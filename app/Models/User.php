<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use Sortable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'cognome', 'email', 'password', 'active', 'image'
    ];

    public $sortable = ['id', 'nome', 'email', 'active'];
        
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];

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
    
    public function permissions() {
        return $this->belongsToMany('App\Models\Permission');
    }

    // true if user is Admin
    public function isAdmin() {
        return $this->hasRole('admin');
    }

    // true if user has a role
    public function hasRole($role) {
        $roles = Auth::user()->roles->pluck('name')->toArray();
        return in_array($role, $roles);
    }

    public function user_image() {
        $image = "noimage.png";

        if (Auth::user()->image) 
            $image = Auth::user()->image;

        return  Storage::url("/profiles/{$image}");
        // $id = Auth::user()->email;
        // return './storage/avatars/' . $image; //"https://i.pravatar.cc/160?u={$id}";

    }


    // ************************************************************
    // for AdminLte 
    public function adminlte_image()
    {
        return $this->user_image();
    } 
    
    public function adminlte_desc()
    {
        return Auth::user()->email;
    } 
    
    public function adminlte_profile_url()
    {
        return "/profile";
    } 
   
    public function gate($can)
    {
      
        if ($this->isAdmin()) {
            return true;
        } else {   
            switch ($can) {
                case 'menu-admin':
                    return $this->isAdmin(); //(Auth::user()->id == 1);
                    break;
                
                default:
                    return false;
                    break;
            }
        }

    } 

}
