<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'admin_id';
    protected $table = 'admin';
    protected $fillable = [
         'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAvatarUrl()
    {
        return "http://www.gravatar.com/avatar/" . md5(strtolower(trim($this->email))) . "?d=mm&s=40";
    }
}
