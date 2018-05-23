<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Clan;

class Membership extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function clan() {
        return $this->belongsTo(Clan::class);
    }
}
