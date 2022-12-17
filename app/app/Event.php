<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'user_id',
        'event_name',
        'game_name',
        'place',
        'event_start',
        'event_end',
        'recruit_start',
        'recruit_end',
        'maximum',

    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
