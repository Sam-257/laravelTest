<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PeopleController;
// We are using the namespace

//******** Use php artisan route:list to view all routes in a list
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

Route::get('/', [HomeController::class,'index']);
// Route::get('/','App\Http\Controllers\HomeController@index');
// The above syntax can also be used
//Route::get('/','HomeController@index');
//This was how it was done in older versions but in laravel8,
//we have to mention the whole namespace

Route::get('/about', AboutController::class);

Route::group(['prefix' => '/users'],function(){
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::get('/people', [PeopleController::class,'index']);
Route::post('/people', [PeopleController::class,'people_register']);
Route::get('/people_table',[PeopleController::class,'people_view']);
Route::get('people_edit/{id}',[PeopleController::class,'people_edit']);
Route::post('people_update/{id}',[PeopleController::class,'people_update']);
Route::get('/people_delete/{id}',[PeopleController::class,'people_delete']);

    

