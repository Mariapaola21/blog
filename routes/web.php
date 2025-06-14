<?php


use Illuminate\Support\Facades\Route;
//Llama tu ruta
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//no se le expecifica el metodo porque se le llamo __invoke y laravel lo toma
//sin[]
Route::get('/',HomeController::class);

Route::get('/posts',[PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

//Pasar parametro a las rutas
Route::get('/posts/{post}', [PostController::class, 'show']);


// multiples parametros en las rutas 
// Route::get('/posts/{post}/{category}', function($post,$category){
// return "Aqui se mostrara el post {$post} de la categoria {$category}";
// });


//Multiples parametros en las rutas pero con la condicion de opcional
//descomitealo para ver su función recuerda comitear el de arriba para que te funcione

// // Route::get('/posts/{post}/{category?}', function($post,$category = null){
// //     if ($category) {
// //         return "Aqui se mostrara el post {$post} de la categoria {$category}";
// //     }
// //  return "Aqui se mostrara el post {$post} ";
// //  });



