<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class BeritaController extends Controller
{
    public function berita(Request $req){
        $articlesAll = Article::all(); 
        $articles = json_decode(json_encode($articlesAll));
        return view('berita',['articlesAll'=>$articlesAll]);
        $value = Cache::remember('articles', function(){
            return Article::all();
        }); 
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
