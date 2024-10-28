<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Else_;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);	
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);


// Route::get('/', function () {
//     return "Hola mundo";
// });
// Route::get('/posts', function () {
//    return "Aqui se listaran todos los posts"; 
// });

// Route::get('/posts/create', function () {
//     return "Aqui se mostrara el formulario para crear un nuevo post";
// });

// Route::get('/posts/{post}', function ($post) {
//     return "Aqui se mostrara el post {$post}";
// });



// Route::get('/posts/category', function ($post, $category) {
//     return "Aqui se mostraran todos los posts {$post} de la categoria {$catego}";
// });