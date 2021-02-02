<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoriesController;
use App\Http\Controllers\admin\dashboardsController;
use App\Http\Controllers\admin\ArticalesController;

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



Route::group(['prefix'=>'admin'],function(){

    Route::resource('categories',CategoriesController::class);
    Route::resource('articales',ArticalesController::class);
    /*Route::get('category',function(){
        return view('admin.category');
    });    */


    route::get('dashboard',[dashboardsController::class,'index']);
    
});
