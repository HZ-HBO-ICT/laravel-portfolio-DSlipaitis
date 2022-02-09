<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\DataScienceCompanyController;
use App\Http\Controllers\ProgrammingExperienceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can rephp agister web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//    ];
//
//    if (!array_key_exists($post, $posts)) {
//        abort(404, 'Sorry, that post was not found.');
//    }
//
//    return view('post', [
//        'post' => $posts[$post]
//    ]);
//});

//Route::get('/{page}', function ($page) {
//
//    $pages = array('welcome', 'faq', 'post');
//
//    if (! in_array($page, $pages)) {
//        echo "Variable: " . $page;
//        abort(404, 'Sorry, that post was not found.');
//    }
//
//    return view($page);
//});


Route::get('/', [WelcomeController::class, 'show']);
Route::get('/faq', [FaqController::class, 'show']);
Route::get('/post', [WelcomeController::class, 'show']);
Route::get('/blog', [BlogController::class, 'show']);
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/my-study-choice', [BlogPageController::class, 'show']);
Route::get('/data-science-company', [DataScienceCompanyController::class, 'show']);
Route::get('/programming-experience', [ProgrammingExperienceController::class, 'show']);

//Route::get('/', function () {
//    return view('welcome');
//});




