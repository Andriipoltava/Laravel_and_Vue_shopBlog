<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RoleController;
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

Route::get('/', [MainController::class,'index']);

//Route::middleware(['auth'])->group(function (){
    Route::post('roles',[RoleController::class,'create']);
    Route::get('roles',[RoleController::class,'index']);

    Route::put('roles/{role}',[RoleController::class,'updateRole']);

    Route::get('roles/{role}/users',[RoleController::class,'users']);
//});


Route::post('login',[AuthController::class,'login']);
Route::get('logout',[AuthController::class,'logout']);

