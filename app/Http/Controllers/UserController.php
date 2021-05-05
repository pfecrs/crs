<?php

namespace App\Http\Controllers;

use toastr;
use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   
    public function showHomeUsers()
    {
        $users = User::all();
        return view('Backoffice.user.index', compact('users'));
    }

    public function showAddUsers()
    {

        return view('Backoffice.user.add', compact('users'));
    }
    public function showClientDetails(){

        $user=Auth::user();
        
        return view('Frontoffice.user.edit', compact('user'));

    }
    public function hanleClientDetails(Request $request){
        $id =$request->id/256;
        //dd($id);
        //dd($request->date_naissance);

        $client=Client::where('id', $id)->first();

        $client->nom=$request->nom;
        $client->prenom=$request->prenom;
        $client->email=$request->email;
        $client->date_naissance=$request->date_naissance;
        $client->num_telephone=$request->num_tel;
        $client->entreprise=$request->entreprise;
        $client->cin=$request->cin;



        // $client->password=Hash::make($request->password);
        

        $client->save();


        toastr()->success('profile modifieé avec succeés!');
        return redirect()->route('showClientDetails');
    }

}
