<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Reclamation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReclamationController extends Controller
{
    public function showListeReclamationsAdmin(){

        $clients=Client::all();
        $reclamations=Reclamation::all();
        return view('Backoffice.reclamation.liste', compact('reclamations','clients'));


    }

    public function showAdminEditReclamation(Request $request){
        $id=$request->id;
        $reclamation= Reclamation::where('id', $id)->first();

        return view('Backoffice.reclamation.edit', compact('reclamation'));

        
    }
    public function handleAdminEditReclamation(Request $request){

        $id=$request->id;
        $reclamation= Reclamation::where('id', $id)->first();

        
        $reclamation->update($request->all());
        toastr()->success('Reclamation modifieé avec succeés!');
        return redirect()->route('showListeReclamations');

        
    }
    public function showClientListeReclamations(){

        $reclamations=Reclamation::where('id_client', Auth::id())->get();
        return view('Frontoffice.reclamation.liste', compact('reclamations'));

        
    }
    public function showClientAddReclamation(){
        //dd(Auth::id());
        return view('Frontoffice.reclamation.add');
        
    }
    public function handleClientAddReclamation(Request $request){

         
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
        $reclamation = new Reclamation;

       
        $reclamation->titre= $request->titre ;
        $reclamation->type= $request->type ;
        $reclamation->contenu= $request->contenu ;
        $reclamation->status= 0;
        $reclamation->document_path = $download_link;
        $reclamation->id_client = Auth::id();
    

        

        $reclamation->save();

        toastr()->success('Reclamation ajouteé avec succeés!');
        return redirect()->route('showReclamationIndexClient')
                        ->with('success','reclamation créé avec succès');
}
}
