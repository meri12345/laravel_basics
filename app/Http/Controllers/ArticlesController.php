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
    public function show($id){
        //show single resource
        $article=Article::find($id);
        return view('articles.show',[
            'article'=>$article
        ]);
    }
    public function create(){
       return view('articles.create');
    }
    public function store(){
        //persist resource
    }
    public function edit(){
        //show form to edit resource
    }
    public function update(){
        //persist the change
    }
    public function destroy(){
        //delete resource
    }
}
