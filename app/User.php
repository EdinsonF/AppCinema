<?php

namespace Cinema;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\DataBase\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use SoftDeletes;


    protected $fillable = ['first_name', 'last_name', 'email', 'password','deleted_at'];

    protected $hidden = ['password', 'remember_token'];

    public function getNameAttribute(){
        return $this->first_name.' '.$this->last_name;
    }

    public function setPasswordAttribute($valor)
    {
        if(!empty($valor)){

            $this->attributes['password']=\Hash::make($valor);

        }

    }

 

}
