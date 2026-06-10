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
                           ->get();
        return view('tarot.history', compact('readings'));
    }

    public function show($id)
    {
        $reading = Reading::where('user_id', Auth::id())->findOrFail($id);
        
        // $reading->cards_drawn is an array of card IDs
        $cardIds = $reading->cards_drawn;
        
        // We need to keep the order in which they were drawn
        $cards = collect($cardIds)->map(function ($cardId) {
            return Card::find($cardId);
        });

        return view('tarot.show', compact('reading', 'cards'));
    }
}