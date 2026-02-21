<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

// route akan memanggil View sesuai dengan nama file tanpa ‘blade.php’.
// Route::get('/greeting', function () { 
//     return view('blog.hello', ['name' => 'Ike']); 
// }); 

Route::get('/greeting', [WelcomeController::class, 'greeting']); 

//Route agar bisa menggunakan resource controller untuk mengelola data foto
Route::resource('photos', PhotoController::class);

Route::get ('/', [HomeController::class,'index']);
Route::get ('/about', [AboutController::class,'about']);
Route::get ('/articles/{id}', [ArticleController::class,'articles']);

// Route::get('/', function () {
//     return 'Hello ~ike'; 
// });
// Route::get('/hello', function () {
//     return 'Hello World ~ike'; 
// });

// Route::get('/world', function () { 
//     return 'World ~ike'; 
// }); 

// Route::get('/about', function () { 
//     return 'Nama: Yulike Dwi Nurcahyani <br> NIM: 244107020146'; 
// }); 

// Memanggil route /user/{name} sekaligus mengirimkan parameter berupa nama user $name
Route::get ('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

// Route menerima parameter $postId dan juga $comment. 
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
}); 

// Route::get ('/articles/{id}', function ($id) { 
//     return 'Halaman Artikel dengan ID '.$id; 
// });

// Optional Parameters
Route::get ('/user/{name?}', function ($name = 'John'){
    return 'Nama saya '.$name;
});

// Route dengan controller
Route::get ('/hello', [WelcomeController::class,'hello']);