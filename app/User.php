<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;
    

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

    public function getRoleName()
    {
        return $this->roles()->pluck('name')->implode(', ');
    }

    public function getRoleDisplayNames()
    {
        return $this->roles()->pluck('name')->implode(', ');
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
    
    // Relacion con los post, un Usuario tiene muchos posts
    public function posts(){
        return $this->hasMany(Post::class, 'user_id','id');
    }

}
