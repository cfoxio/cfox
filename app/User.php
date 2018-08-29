<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Carbon\Carbon;
use App\Clan;

class User extends Authenticatable
{
    use Notifiable;
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

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

    protected $casts = [
        'birthday' => 'date:Y-m-d'
    ];

    public function clans() {
        return $this->belongsToMany(Clan::class);
    }

    public function isMemberOf(Clan $clan) {
        if ($this->clans->contains($clan)) {
            return true;
        } else {
            return false;
        }
    }

    public function getAgeAttribute() {
        return $this->birthday->diff(Carbon::now())->format('%y');
    }
}
