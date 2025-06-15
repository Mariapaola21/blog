<?php
//Direccion donde se encuentra
namespace App\Http\Controllers;


use Illuminate\Http\Request;


class HomeController extends Controller
{
    
    public function __invoke (){
        //llama a view que es un helper son funciones internas para el uso de larael
          return view('home');
    }
}
