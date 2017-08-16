<?php

namespace App\Http\Controllers\Auth;

use App\Model\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
    * MemberLogin action
    *
    * @return void
    */
    protected function memberLogin()
    {
        return view('auth.memberLogin');
    }

    /**
    * memberRegister action
    *
    * @return void
    */
    protected function memberRegister()
    {
        return view('auth.memberRegister');
    }

    /**
    * Logout action
    *
    * @return void
    */
    protected function getLogout()
    {
        Auth::logout();
        return redirect()->route('item.list');
    }
}
