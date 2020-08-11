<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        //show list of resource
        $articles=Article::latest()->get();
        return view('articles.index',[
            'articles'=>$articles
        ]);

    }
    public function show(Article $article){
        //show single resource

        return view('articles.show',[
            'article'=>$article
        ]);
    }
    public function create(){
       return view('articles.create');
    }
    public function store(){

        Article::create($this->valildateArticle());

        return redirect('/articles');
    }
    public function edit(Article $article){

        return view('articles.edit',[
            'article'=>$article
        ]);
    }
    public function update(Article $article){


        $article->update($this->valildateArticle());

        return redirect($article->path());
    }
    public function destroy(){
        //delete resource
    }
    public function valildateArticle(){
        return request()->validate([
            'title'=>'required',
            'body'=> 'required',
            'excerpt' =>'required'
        ]);
    }
}
