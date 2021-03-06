<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;


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


    public function roles(){


    return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');


    }

    public function hasrole($role_id)
    {
        if($this->roles()->where('id',$role_id)->first()){
            return true;
        }
    }
    
    public function attachrole($user_id,$role_id)
    {
        $user = User::find($user_id);
        $role = Role::find($role_id);
        $user->roles()->attach($role_id);
    }

}
