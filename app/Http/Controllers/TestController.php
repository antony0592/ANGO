<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class TestController extends Controller
{
    public function vista ($tbuserid){

      // $articulo = Articulo::find($articuloid);
       //dd($articulo);

       $user = User::find($tbuserid);
       $user->tbuseridcountry;
       $user->tbuseridleveluser;
       dd($user);
        
       /*
       $articulo = Articulo::orderBy('articuloid')
        ->where('articuloid', '=', $articuloid)
        ->get();
        dd($articulo);
        */
    }
}
