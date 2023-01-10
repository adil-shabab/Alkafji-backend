<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlasticController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\ProtectionController;
use App\Http\Controllers\FoamController;
use App\Http\Controllers\AluminiumController;
use App\Http\Controllers\FoodController;


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

Route::post('account/login', [UserController::class, 'login']);
Route::get('account/form/login', [UserController::class, 'login_form']);
Route::get('account/logout', [UserController::class, 'logout']);

Route::get('account/', [HomeController::class, 'index']);


Route::get('account/plastic', [PlasticController::class, 'index']);
Route::get('account/form-plastic', [PlasticController::class, 'plastic_form']);
Route::post('account/add-plastic', [PlasticController::class, 'store']);
Route::delete('account/delete-plastic/{id}', [PlasticController::class, 'destroy']);

Route::get('account/paper', [PaperController::class, 'index']);
Route::get('account/form-paper', [PaperController::class, 'paper_form']);
Route::post('account/add-paper', [PaperController::class, 'store']);
Route::delete('account/delete-paper/{id}', [PaperController::class, 'destroy']);


Route::get('account/protection', [ProtectionController::class, 'index']);
Route::get('account/form-protection', [ProtectionController::class, 'protection_form']);
Route::post('account/add-protection', [ProtectionController::class, 'store']);
Route::delete('account/delete-protection/{id}', [ProtectionController::class, 'destroy']);



Route::get('account/foam', [FoamController::class, 'index']);
Route::get('account/form-foam', [FoamController::class, 'foam_form']);
Route::post('account/add-foam', [FoamController::class, 'store']);
Route::delete('account/delete-foam/{id}', [FoamController::class, 'destroy']);



Route::get('account/aluminium', [AluminiumController::class, 'index']);
Route::get('account/form-aluminium', [AluminiumController::class, 'aluminium_form']);
Route::post('account/add-aluminium', [AluminiumController::class, 'store']);
Route::delete('account/delete-aluminium/{id}', [AluminiumController::class, 'destroy']);



Route::get('account/food', [FoodController::class, 'index']);
Route::get('account/form-food', [FoodController::class, 'food_form']);
Route::post('account/add-food', [FoodController::class, 'store']);
Route::delete('account/delete-food/{id}', [FoodController::class, 'destroy']);

