<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Cinema\Http\Requests;
use Cinema\MyPruebaModel;

class MyPruebaController extends Controller
{
    //
    public function index(){
    	$usuarios=MyPruebaModel::all();
    	
    	return view('index')->with('usuarios',$usuarios);
    }

    public function getLista(){

    	$usuarios=MyPruebaModel::all();
    	
    	return view('UsuariosRegistrados')->with('usuarios',$usuarios);

    }

    public function getRegister(){
    	return view('auth.register');
    }


    
    
}
