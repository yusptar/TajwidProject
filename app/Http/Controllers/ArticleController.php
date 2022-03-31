<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{
    public function article($id){
        $article = Article::find($id);
        return view('articles', ['article'=>$article, 'id'=>$id]);
        $value = Cache::remember('articles', function(){ 
            return \app\articles::all();
        });     
    }
    
    public function index(){
        $article = Article::all();
        return view('manage',['article' => $article]);
    }

    public function add(){
        return view('create');
    }

    public function create(Request $request){
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image' => $request->image
        ]);
        return redirect()->route('manage');
    }

    public function edit($id){
        $article = Article::find($id);

        return view('edit',['article'=>$article]);
    }

    public function update($id, Request $request){
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->featured_image = $request->image;

        $article->save();

        return redirect()->route('manage');
    }

    public function delete($id){
        $article = Article::find($id);
        $article->delete();

        return redirect()->route('manage');
    }

    public function __construct(){
        $this->middleware('auth');
    }
}
