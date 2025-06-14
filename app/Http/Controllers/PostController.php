<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //crea los metodos 
    public function index (){
    return"Aqui se mostraran todos los posts";
    }
    public function create (){
     return"Aqui se mostrara un formulario para crear un posts";
    }
    //debes recibir la funcion desde el metodo
   public function show($post){
     return"Aqui se mostrara el post: {$post}";
   }
}
