<?php

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

Route::get('/',function(){

    return view('index');
});

Route::get('/blog',function(){

    return view('blog');
})->name('blog');

Route::get('/about',function(){

    return view('about');
});

Route::get('/blog-single',function(){

    return view('blog-single');
})->name('blog-single');

Route::get('/contact',function(){

    return view('contact');
});

Route::get('/faq',function(){

    return view('faq');
});


Route::get('/features',function(){

    return view('features');
});

Route::get('/features-single',function(){

    return view('features-single');
})->name('fea.single');

