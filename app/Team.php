<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Clan;
use App\User;

class Team extends Model
{
    public function user() {
        return $this->belongsToMany(User::class);
    }

    public function clan() {
        return $this->belongsTo(Clan::class);
    }
}
