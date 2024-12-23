<?php

use App\Http\Controllers\GaleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/le-cabinet/notre-equipe',[TeamController::class,'teamList'])->name('team');
Route::get('/le-cabinet/docteur-dassie-fabrice',[TeamController::class,'dassie'])->name('team.dassie');
Route::get('/le-cabinet/docteur-aboulker-mickael',[TeamController::class,'michael'])->name('team.michael');
Route::get('/le-cabinet/visite-cabinet',[GaleryController::class,'index'])->name('visite-cabinet');
Route::get('/urgence-dentaire',[PageController::class,'urgence'])->name('urgence-dentaire');
Route::get('/protheses-dentaires',[PageController::class,'protese'])->name('proteses-dentaires');
Route::get('/',[HomeController::class,'homepage'])->name('homepage');
