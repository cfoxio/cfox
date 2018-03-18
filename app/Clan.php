<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
