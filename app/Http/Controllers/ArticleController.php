<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //

    public function showListeArticlesAdmin(){
        $articles = Article::all();
        //dd($articles);
        return view('Backoffice.article.index', compact('articles'));

    }


    public function handleArticleAdd(Request $request)
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
        //dd($request->contenu);
        $article = new Article;
        
        $article->titre = $request->titre;
        $article->contenu = $request->contenu;
        $article->created_by = $request->created_by;
        $article->img_path=$download_link;
        $article->save();
        toastr()->success('article ajouteé avec succeés!');

             
        return redirect()->route('showListeArticles');
                       
    }

    
    public function handleDeleteArticleAdmin(Request $request){
        $id=$request->id;
        Article::where('id', $id)->delete();
        toastr()->success('Article Supprimé avec succeés!');

        return back();
    }


    public function showListeArticlesClient(){
        $articles = Article::all();
        //dd($articles);
        return view('Frontoffice.actualite.index', compact('articles'));

    }

    public function showOneArticleClient(Request $request){
        $id=$request->id;
        $article= Article::where('id', $id)->first();
        return view('Frontoffice.actualite.show', compact('article'));

    }
}
