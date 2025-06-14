<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function (){
    return "Bienvenido a mi primera vista";
});

//Define tu tipo de peticion get o post
Route::get('/posts',function(){
return"Aqui se mostraran todos los posts";
});

//El Orden es importante prioriza las rutas sin parametros 
Route::get('/posts/create', function(){
    return"Aqui se mostrara un formulario para crear un posts";
});

//Pasar parametro a las rutas
Route::get('/posts/{post}', function($post){
return"Aqui se mostrara el post: {$post}";
} );


// multiples parametros en las rutas 
Route::get('/posts/{post}/{category}', function($post,$category){
return "Aqui se mostrara el post {$post} de la categoria {$category}";
});


//Multiples parametros en las rutas pero con la condicion de opcional
//descomitealo para ver su función recuerda comitear el de arriba para que te funcione

// // Route::get('/posts/{post}/{category?}', function($post,$category = null){
// //     if ($category) {
// //         return "Aqui se mostrara el post {$post} de la categoria {$category}";
// //     }
// //  return "Aqui se mostrara el post {$post} ";
// //  });



