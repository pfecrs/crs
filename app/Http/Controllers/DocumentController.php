<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    
    public function showHomeDocument()
    {
        $documents = Document::all();
        $entreprises = Entreprise::all();
        return view('Backoffice.document.index', compact('documents','entreprises'));
    }

    public function showAddDocument()
    {
        $entreprises = Entreprise::all();
        return view('Backoffice.document.add',compact('entreprises'));
    }

    public function handleAddDocument(Request $request)
    {
        // var_dump($request->file('document'));
        // dd($request->all());
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
            $download_link= env('APP_URL','ERROR').'/storage/'. $fileNameToStore;
        }
        else{
            $download_link='none';
        }
        //dd($download_link);
        $document = new Document;
        
        $document->nom = $request->nom;
        $document->type = $request->type;
        $document->id_entreprise = $request->entreprise;
        $document->file_path=$download_link;
        
        $document->save();
        toastr()->success('Document ajouteé avec succeés!');

             
        return redirect()->route('showListeDocument');
                       
    }

    public function showEditDocument(Request $request)
    {
        $id = $request->id;
        $document = Document::where('id', $id)->first();
        $entreprises = Entreprise::all();
        $entreprise_name= Entreprise::where('id',$document->id_entreprise)->first();
        //dd($entreprise_name);
        return view('Backoffice.document.edit',compact('document','entreprises','entreprise_name'));
    }


    public function handleEditDocument(Request $request)
    {
        $id=$request->id;
        $document=Document::where('id', $id)->first();
        //dd($document);
        $document->nom = $request->nom;
        $document->type = $request->type;
        $document->id_entreprise = $request->entreprise;
        //$document->id_document = 0;
        
        $document->save();
        toastr()->success('Document modifieé avec succeés!');

             
        return redirect()->route('showListeDocument');
    }


    public function handleDeleteDocument(Request $request)
    {
        $id=$request->id;
        Document::where('id', $id)->delete();
        toastr()->success('Document Supprimé avec succeés!');

        return back();
    }
    public function handleUploadDocument(Request $request)
    {
        if($request->hasFile('document')){

            $file= $request->file('document');
            $filename=$file->getClientOriginalName();
            $folder=uniqid().'-'.now()->timestamp;
            $file->storeAs('documents/'.$folder,$filename);
            

            // TemporaryFile::create([
            //     'folder' => $folder,
            //     'filename' => $filename
            // ]);
            return $folder;
            // Image::make(storage_path('app/public/documents'.$user->id.'/'.$filename))
            // ->fit(50,50)
            // ->save(storage_path('app/public/documents'.$user->id.'/thumb-'.$filename));


            // $user->update([
            //     'document' => $filename,
            // ]);
        }
        return '';

    }
}
