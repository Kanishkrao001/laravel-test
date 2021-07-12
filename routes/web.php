<?php

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

// // for controller
// // Route::get('/', 'testcontroller@test');

// Route::get('/about', function () {
//     $name = ["This", "is", "Kanishk"];
//     // return view('about', ['name'=>$name]);
//     // return view('about')->with(['name'=>$name]);
//     return view('about', compact('name'));
// });

// Route::resource('form' ,'formcontroller');

// use App\Http\Controllers\testcontroller;

// Route::get('/', 'testcontroller@test');

// Route::get('/form', 'testcontroller@home');

// Route:: get('/register', 'testcontroller@register');

// Route:: post('/form' , 'testcontroller@store');

use App\Http\Controllers\testcontroller;

Route:: get('query', 'testcontroller@insert');