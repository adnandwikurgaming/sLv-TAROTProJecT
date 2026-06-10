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

    public function cards()
    {
        return Card::whereIn('id', $this->cards_drawn)->get();
    }
}