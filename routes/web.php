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
Route::get('user/{number}/age/{age}',function($number,$age){
    return 'My number is :' . '<b>' . $number .'</b>' . ', And my age is : '. $age;
});

Route::get('Any',function(){
    return redirect()->route('information');
});
Route::view('Hello','kareemblade',['name' => 'Abd Alkareem']);

Route::redirect('facebook','http://www.facebook.com',301);

Route::redirect('old','login');

Route::get('age',function(){
    return 'My age is 21';
})->name('information');

Route::get('login' , 'App\Http\Controllers\Controller@login');

Route::get('myname', function () {
    return ('<h1>welcome Abd Al-kareem to php</h1><br><h2>1301198619<h2>');
});
