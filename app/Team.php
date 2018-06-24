<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use MartinBean\Database\Eloquent\Sluggable;
use App\Clan;
use App\User;

class Team extends Model
{
    use Sluggable;

    /**
     * change the routeKeyName for Route Model Binding
     *
     * @return string
     */
    public function getRouteKeyName() {
        return 'slug';
    }

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function clan() {
        return $this->belongsTo(Clan::class);
    }

    public function teamleader() {
        return $this->belongsTo(User::class);
    }

    public function manager() {
        return $this->belongsTo(User::class);
    }
}
