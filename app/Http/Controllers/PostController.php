<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //llama tus posts guardados en una carpeta con un . y el helper view
    public function index (){
    return view('posts.index');
    }
    public function create (){
      
     return view('posts.create');
    }
    
   public function show($post){
    // pasa variable desde el controlador a la vista
     return view('posts.show', [
        'post'=> $post
     ]);
   }
}
