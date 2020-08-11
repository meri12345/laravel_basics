<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        //show list of resource
        if(\request('tag')){
            $articles=Tag::where('name',\request('tag'))->firstOrFail()->articles;
        }
        else{
            $articles=Article::latest()->get();
        }

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
       return view('articles.create',[
           'tags'=>Tag::all()
       ]);
    }
    public function store(){

        $this->valildateArticle();
        $article = new Article(\request(['title','body','excerpt']));
        $article->user_id=1;
        $article->save();

        $article->tags()->attach(\request('tags'));

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
            'excerpt' =>'required',
            'tags' =>'exists:tags,id'
        ]);
    }
}
