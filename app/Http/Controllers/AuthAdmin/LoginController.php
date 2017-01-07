<?php

namespace App\Http\Controllers\AuthAdmin;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    protected $redirectTo = '/adminzone';
    protected $redirectAfterLogout = '/admin/login';

    public function __construct()
    {
        //$this->middleware('guest', ['except' => ['logout','login']]);
        view()->share('guard', 'admin');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    /**
     * Log the user out of the application.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        /*$request->session()->flush();*/

        $request->session()->regenerate();

        return redirect('/admin/login');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
