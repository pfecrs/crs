<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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

    /**
     * Where to redirect users after login.
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
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:admin')->except('logout');
            $this->middleware('guest:client')->except('logout');
    }

     public function showAdminLoginForm()
    {
        return view('Backoffice.login', ['url' => 'admin']);
    }
   
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        //dd($request->all());
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->route('showListeEntreprise');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

     public function showClientLoginForm()
    {
        return view('auth.login', ['url' => 'client']);
    }

    public function clientLogin(Request $request)
    {
        // $this->validate($request, [
        //     'email'   => 'required|email',
        //     'password' => 'required|min:6'
        // ]);
            //dd($request->all());
        if (Auth::guard('client')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            
            return redirect()->intended('client/entreprises');
        }
        dd('off');
        return back()->withInput($request->only('email', 'remember'));
    }

    public function adminLogout() {
        //dd('ok');
        Session::flush();
        Auth::logout();
        return redirect('/');
      }
}