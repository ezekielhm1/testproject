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
Route::get('/','PageController@home');

Route::get('page2', function () {
  $testvar = 'string from var';
  return view('page2',compact('testvar'));
});

Route::get('swords','SwordController@index'); 
