<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class MyPruebaModel extends Model
{
    //
    protected $table='users';
    //public $timestamps=false;

    public function getNombreCompletoAttribute(){
    	return $this->first_name.' '.$this->last_name;
    }


}
