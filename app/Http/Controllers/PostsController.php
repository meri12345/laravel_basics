<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($id){

        $posts=[
            'first-post'=>'My first blog post to show in view',
            'second-post'=>'Second post content'
        ];
        if(!array_key_exists($id,$posts)){
            abort('404','Sorry that post was not found');
        }
        return view('post',[
            'post'=>$posts[$id]
        ]);

    }
}
