<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;
use App\User;

class Clan extends Model
{
    /**
     * fillable fields
     *
     * @var array
     */
    protected $fillable = ['name', 'homepage', 'subdomain', 'country', 'logo'];

    /**
     * change the routeKeyName for Route Model Binding
     *
     * @return string
     */
    public function getRouteKeyName() {
        return 'subdomain';
    }

    /**
         * Get the clan's users.
         *
         * @return string
         */
    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function teams() {
        return $this->hasMany(Team::class);
    }
}
