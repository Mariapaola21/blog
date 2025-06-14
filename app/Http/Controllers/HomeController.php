<?php
//Direccion donde se encuentra
namespace App\Http\Controllers;


use Illuminate\Http\Request;


class HomeController extends Controller
{
    //para crear un controlador se utilizo php artisan:makecontroller nombreController
    //se llama invoke porque el controlador tiene un unico metodo
    //solo se debe usar cuando hay un solo metodo
    public function __invoke (){
          return "Bienvenido a mi pagina principal desde los controladores";
    }
}
