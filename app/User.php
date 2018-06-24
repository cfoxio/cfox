<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Clan;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function memberships() {
        return $this->hasMany(Membership::class);
    }

    public function clans() {
        $clans = collect();
        foreach ($this->memberships as $membership) {
            $clans->push($membership->clan);
        }
        return $clans;
    }

    public function isMemberOf(Clan $clan) {
        if ($this->clans()->contains($clan)) {
            return true;
        } else {
            return false;
        }
    }
}
