<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('test', function () {
//     return 'Hello Worldb sqijdjqsl';
// });

// Route::get('/user', [UserController::class, 'index']); // laravel 8

// // Route::get('/user', 'UserController@index'); // laravel 7

// Route::view('/welcome', 'welcome');


// Route::get('ljklsqjdjklqjdqlkjdlq', function () {
//     return 'User ';
// })->name('smyadyalroute');

// Route::get('user/salam', [TestController::class, 'hi']);
// Route::get('khadija', [TestController::class, 'hiview']);

// // hi/Salah , hi/mohamad 

// Route::get('hello/{name}', [TestController::class, 'hello']);

// Route::get('salam/{name}', [TestController::class, 'salam']);



Route::prefix('blog')->group(function () {
    
    Route::get('/',[BlogController::class,'index'])->name('blog');

    Route::get('create',[BlogController::class,'create'])->name('blog.create');
    Route::post('store',[BlogController::class,'store'])->name('blog.store');

    Route::get('edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('update/{id}',[BlogController::class,'update'])->name('blog.update');

    Route::get('delete/{id}',[BlogController::class,'delete'])->name('blog.delete');

});