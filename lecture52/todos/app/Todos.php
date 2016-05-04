<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    protected $fillable = [
        'user_id', 'text'
    ];

    public function user() {
        return $this->belongsTo(\App\User::class);
    }
}
