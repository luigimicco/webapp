<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'cognome', 'email', 'password', 'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userInfo()
    {
        return $this->hasOne('App\Models\UserInfo');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role')->withTimestamps();
    }   
    
    public function profiles() {
        return $this->belongsToMany('App\Models\Profiles');
    }


    // for AdminLte 
    public function adminlte_image()
    {
        $id = Auth::user()->email;
        return "https://i.pravatar.cc/160?u={$id}";
    } 
    
    public function adminlte_desc()
    {
        return Auth::user()->email;
    } 
    
    public function adminlte_profile_url()
    {
        return "#";
    } 
   
    public function gate($can)
    {
      
        if (Auth::user()->id == 1) {
            return true;
        } else {   
            switch ($can) {
                case 'menu-admin':
                    return in_array('admin', Auth::user()->roles->pluck('name')->toArray()); //(Auth::user()->id == 1);
                    break;
                
                default:
                    return false;
                    break;
            }
        }

    } 

}
