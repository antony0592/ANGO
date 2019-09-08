<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        /* return User::create([
            'tbuseridcountry' => $data['country'],
            'tbuserlevelid' => $data['level'],
            'tbusername' => $data['name'],
            'tbuserlastname' => null,
            'tbuserusername' => null,
            'tbuseremail' => $data['email'],
            'tbuserpassword' => Hash::make($data['password']),
            'tbuseraddress' => null,
            'tbusercreditcard' => null,
            'tbuserimage' => 'images/users/defauld.jpg',
            'tbuseractive' => true,
            'remember_token' => $data['_token'],
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]); */

        $user = new User();
        $user->tbuseridcountry = $request->country;
        $user->tbuserlevelid = $request->level;
        $user->tbusername = $request->name;
        $user->tbuserlastname = null;
        $user->tbuserusername = null;
        $user->tbuseremail = $request->email;
        $user->tbuserpassword = bcrypt($request->password);
        $user->tbuseraddress = null;
        $user->tbusercreditcard = null;
        $user->tbuserimage = 'images/users/defauld.jpg';
        $user->tbuseractive = true;
        $user->remember_token = $request->_token;
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();
        
    }
}
