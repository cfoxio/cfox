<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Membership;
use App\Team;

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

    public function memberships() {
        return $this->hasMany(Membership::class);
    }

    /**
         * Get the clan's users.
         *
         * @param  string  $value
         * @return string
         */
    public function users() {
        $users = collect();
        foreach($this->memberships as $membership) {
            $users->push($membership->user);
        }
        return $users;
    }

    public function teams() {
        return $this->hasMany(Team::class);
    }
}
