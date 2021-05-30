<?php

namespace App\Http\Controllers;

use toastr;
use App\Models\Document;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\EntrepriseController;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showHome()
    {
        $entreprises = Entreprise::all();
        //$response = Http::get('https://amazing-keller-3bfd4f.netlify.app');
        //dd($entreprises);
        //$entreprisesString=$response->body();
        //dd($response->body());
        //$entreprises = explode("},", $entreprisesString);
        //dd(gettype($entreprises));
        //dd($entreprises[1][Ville]);
        //Alert::html('Html Title', 'Html Code', 'Type');
        return view('Backoffice.entreprise.index', compact('entreprises'));
    }

    public function showEnrepriseApi()
    {
        $entreprises = Entreprise::all();
        return $entreprises;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAdd()
    {

        return view('Backoffice.entreprise.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function handleAdd(Request $request)
    {
        //dd($request->file('document'));

        if($request->file('document')){


            // Get filename with the extension
            $filenameWithExt = $request->file('document')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('document')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $download_link= $request->file('document')->storeAs('public', $fileNameToStore);
            $download_link= env('APP_URL','http://127.0.0.1:8000').'/storage/'. $fileNameToStore;
        }
        else{
            $download_link='none';
        }
        //dd($download_link);
        $entreprise = new Entreprise;
        
        $entreprise->nom = $request->nom;
        $entreprise->secteur = $request->secteur;
        $entreprise->adresse = $request->adresse;
        $entreprise->phone = $request->phone;
        $entreprise->email = $request->email;
        $entreprise->description=$request->description;
        $entreprise->image_path=$download_link;
        $entreprise->statut = $request->status;
        $entreprise->save();
        toastr()->success('Entreprise ajouteé avec succeés!');

             
        return redirect()->route('showListeEntreprise');
                       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showEdit(Request $request)
    {
        $id = $request->id;
        $entreprise = Entreprise::where('id', $id)->first();

        return view('Backoffice.entreprise.edit',compact('entreprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function handleEdit(Request $request)
    {
        $id=$request->id;
        $entreprise=Entreprise::where('id', $id)->first();
        
        $entreprise->nom = $request->nom;
        $entreprise->secteur = $request->secteur;
        $entreprise->adresse = $request->adresse;
        //$entreprise->id_document = 0;
        $entreprise->phone = $request->phone;
        $entreprise->email = $request->email;
        $entreprise->statut = $request->status;
        
        $entreprise->save();
        toastr()->success('Entreprise modifieé avec succeés!');

             
        return redirect()->route('showListeEntreprise');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function handleDelete(Request $request)
    {
        $id=$request->id;
        Entreprise::where('id', $id)->delete();
        toastr()->success('Entreprise Supprimé avec succeés!');

        return back();
    }

    public function showHomeClient()
    {
        $entreprises = Entreprise::all();
        $documents= Document::all();
        return view('Frontoffice.entreprise.liste', compact('entreprises','documents'));
    }

    public function showSearch(Request $request)
    {
        // $search = $request->get('id');
        // $result=Entreprise::where('identifiant_unique',$search)->get();
        return view('Frontoffice.search.search') ;
    }


    public function handleSearch(Request $request)
    {
        $search = $request->id;
        //dd($search);
        $result=Entreprise::where('identifiant_unique',$search)->first();
        return view('Frontoffice.search.search', compact('result')) ;
    }
}
