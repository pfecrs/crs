<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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
        $this->middleware('guest:admin');
        $this->middleware('guest:client');
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
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAdminRegisterForm()
    {
        return view('Backoffice.register', ['url' => 'admin']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showClientRegisterForm()
    {
        return view('auth.register', ['url' => 'client']);
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createAdmin(Request $request)
    {


        // $entreprise = new Entreprise;
        
        // $entreprise->nom = $request->nom;
        // $entreprise->secteur = $request->secteur;
        // $entreprise->adresse = $request->adresse;
      
        
        // $entreprise->save();
        // dd($request->all());
        //$this->validator($request->all())->validate();
        $admin= new Admin;
        $admin->name=$request->username;
        $admin->email=$request->email;
        $admin->password=Hash::make($request->password);
        $admin->save();
        // Admin::create([
        //     'name' => $request->username,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
        return redirect()->intended('/');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createClient(Request $request)
    {
        //dd($request->all());
        $client= new Client;
        $client->nom=$request->nom;
        $client->prenom=$request->prenom;
        $client->email=$request->email;
        $client->num_telephone=$request->tel;
        $client->cin=$request->cin;
        $client->password=Hash::make($request->password);
        
        $client->save();



        return redirect()->intended('/');
    }
}