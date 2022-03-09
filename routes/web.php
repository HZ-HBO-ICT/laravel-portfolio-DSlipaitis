<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;

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


Route::resources([
    'blog' => BlogController::class,

]);


//Route::get('/blog', [BlogController::class, 'index']);
//
//Route::get('/blog/create', [BlogController::class, 'create']);
//Route::post('/blog', [BlogController::class, 'store']);
//
//Route::get('/blog/{id}/edit', [BlogController::class, 'edit']);
//Route::put('/blog/{id}',[BlogController::class, 'update']);
//
//Route::delete('/blog/{id}', [BlogController::class, 'destroy']);
//
//
//Route::get('/blog/{id}', [BlogController::class,'show']);

Route::get('/', function (){
    return redirect('/welcome');
});

Route::get('/{page}', [WelcomeController::class, 'show']);




