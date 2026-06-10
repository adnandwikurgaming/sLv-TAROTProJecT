<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
        'name',
        'upright_meaning',
        'reversed_meaning',
        'arcana',
        'image_url',
        'action_do',
        'action_avoid',
    ];
}