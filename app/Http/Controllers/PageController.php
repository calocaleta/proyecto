<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function blog(){
        //consulta a base de datos
        //$posts = Post::get();
        //$post = Post::first();
        //$post = Post::find(25);
        
        //dd($post);

        $posts = Post::latest()->paginate();

        return view('blog',['posts' => $posts]);
    }

    public function post(Post $post){
        //consulta a base de datos
        return view('post',['post' => $post]);
    }
}
