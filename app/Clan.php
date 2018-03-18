<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Clan extends Model
{
    /**
     * change the routeKeyName for Route Model Binding
     *
     * @return string
     */
    public function getRouteKeyName() {
        return 'subdomain';
    }

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
