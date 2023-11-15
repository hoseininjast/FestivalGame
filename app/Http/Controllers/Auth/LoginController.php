<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }




    public function login (Request $request) {
        $request->validate([
            'LoginMethod' => ['required' , 'string'],
            'password' => ['required' , 'string'],
        ]);


        $User = User::where('email' , $request->LoginMethod)->orwhere('PhoneNumber' , $request->LoginMethod)->first();
        if (!\Hash::check($request->password , $User->password)) {
            return $this->sendFailedLoginResponse($request);
        }

        if ($User) {
            \Auth::login($User ,$request->get('remember') );
            \Alert::success('عملیات موفق آمیز' , 'شما با موفقیت وارد شدید.');
            return $this->sendLoginResponse($request);
        }else{
            return $this->sendFailedLoginResponse($request);
        }

    }


}
