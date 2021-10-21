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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kontak', function(){
    $nama = 'Wilda';
    $teks = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
    Quae dolorum quidem accusamus deserunt nostrum eveniet cumque nisi 
    necessitatibus ea quia repudiandae atque, iste perspiciatis error 
    illo! Commodi possimus voluptas libero. Lorem ipsum dolor, sit amet 
    consectetur adipisicing elit. Quo minus modi necessitatibus perspiciatis 
    vero blanditiis nesciunt voluptates ipsa, placeat praesentium ex 
    molestias eius eaque repellat magnam tempore libero eligendi optio 
    aperiam doloribus. Odit enim at repudiandae voluptatibus, natus modi 
    dicta nobis eveniet adipisci magni aut corrupti autem culpa reiciendis blanditiis?';
    return view('kontak',['name'=>$nama, 'text'=>$teks]);
});

//Route::view('/home','home');
Route::view('/galeri','galeri');
Route::view('articles/index','articles/index');

Route::get('/home', 'HomeController');//invokable
Route::get('/home/show', 'HomeController@show');

//urut sesuai method di PostController
Route::get('/posts','PostController@index'); // model binding ke PK: ID
Route::get('/posts/create','PostController@create'); //membuka form create
//Route::get('/posts/{slug}','PostController@show'); //Route Wildcard
Route::get('/posts/{post:slug}','PostController@show'); // model binding ke slug
//Route::get('/posts/{post}','PostController@show'); // model binding ke PK: ID
Route::post('/posts/store','PostController@store'); // model binding ke slug

