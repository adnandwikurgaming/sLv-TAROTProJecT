<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Reading;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TarotController extends Controller
{
    public function dashboard()
    {
        $readings = Reading::where('user_id', Auth::id())
                           ->latest()
                           ->take(5)
                           ->get();

        $this->loadCardsRelation($readings);

        return view('dashboard', compact('readings'));
    }

    public function draw(Request $request)
    {
        $request->validate([
            'spread_type' => 'required|in:single,three-card',
        ]);

        $count = $request->spread_type === 'three-card' ? 3 : 1;
        $cards = Card::inRandomOrder()->take($count)->get();

        $reading = Reading::create([
            'user_id'     => Auth::id(),
            'spread_type' => $request->spread_type,
            'cards_drawn' => $cards->pluck('id')->toArray(),
        ]);

        return view('tarot.result', compact('cards', 'reading'));
    }

    public function history()
    {
        $readings = Reading::where('user_id', Auth::id())
                           ->latest()
                           ->paginate(15);

        $this->loadCardsRelation($readings);

        return view('tarot.history', compact('readings'));
    }

    public function show($id)
    {
        $reading = Reading::where('user_id', Auth::id())->findOrFail($id);

        $cardIds = $reading->cards_drawn;

        $ids = implode(',', array_map('intval', $cardIds));
        $cards = Card::whereIn('id', $cardIds)
            ->orderByRaw("FIELD(id, $ids)")
            ->get();

        $reading->setRelation('cards', $cards);

        return view('tarot.show', compact('reading', 'cards'));
    }

    private function loadCardsRelation($readings)
    {
        if ($readings->isEmpty()) return;

        $allCardIds = $readings->pluck('cards_drawn')->flatten()->unique()->values()->toArray();
        $allCards = Card::whereIn('id', $allCardIds)->get()->keyBy('id');

        $readings->each(function ($reading) use ($allCards) {
            $ids = $reading->cards_drawn ?? [];
            $ordered = collect($ids)->map(fn($id) => $allCards[$id] ?? null)->filter();
            $reading->setRelation('cards', $ordered);
        });
    }
}