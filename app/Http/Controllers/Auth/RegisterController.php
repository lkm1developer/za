<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Bestmomo\LaravelEmailConfirmation\Traits\RegistersUsers;

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
    protected $redirectTo = 'HomepageController@index';
	//return redirect()->action('HomeController@index');
    /**
     * Create a new controller instance.
     *
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
            'username' => 'required|min:4|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
			'name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'sexualorientation' => 'required|string|max:255',
            'day' => 'required|numeric|max:31|min:1',
            'month' => 'required|numeric|max:12|min:1',
            'year' => 'required|numeric|min:1900|max:2100',
            
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
      
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
			'name' => $data['name'],
            'gender' => $data['gender'],
            'sexualorientation' => $data['sexualorientation'],
            'day' => $data['day'],
            'month' => $data['month'],
            'year' => $data['year'],
            'dob' => strtotime($data['day'].'-'.$data['month'].'-'.$data['year']),
            'city' => $data['city'],
            'state' => $data['state'],
            'country' => $data['country'],
            
        ]);
    }
}
