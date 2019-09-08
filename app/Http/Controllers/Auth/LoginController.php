<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function login(){

        $credentials = $this->validate(request(),[
            'useremail'=> 'email|string|required',
            'userpassword' => 'string|required'
        ]);

        if(Auth::attempt($credentials))
        {
            return 'Exito Login';
        }
        return $credentials;
       // return redirect()->back()->withErrors(validator)->withInput();
        ;
    }
 }