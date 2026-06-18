<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    protected $fillable = [
        'user_id',
        'spread_type',
        'cards_drawn',
    ];

    protected $casts = [
        'cards_drawn' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCardsAttribute()
    {
        if ($this->relationLoaded('cards')) {
            return $this->getRelation('cards');
        }

        $ids = $this->cards_drawn ?? [];
        $cards = Card::whereIn('id', $ids)->get()->keyBy('id');
        $ordered = collect($ids)->map(fn($id) => $cards[$id] ?? null)->filter();
        $this->setRelation('cards', $ordered);

        return $ordered;
    }
}