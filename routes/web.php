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
Route::get('implant-dentaire',[PageController::class,'implant'])->name('implant-dentaire');
Route::get('remplacer-dent',[PageController::class,'oneDent'])->name('remplacer-dent');
Route::get('remplacer-plusieurs-dents',[PageController::class,'moreDent'])->name('remplacer-plusieurs-dents');
Route::get('remplacer-toutes-ces-dents',[PageController::class,'allDent'])->name('remplacer-toutes-dents');
Route::get('chirurgie-pre-implantaire',[PageController::class,'chirugie'])->name('chirurgie-pre-implantaire');
Route::get('conseils-post-operatiores',[PageController::class,'conseils'])->name('conseils');
Route::get('faq',[PageController::class,'faq'])->name('faq');
Route::get('eclaircissement-dentaire',[PageController::class,'eclair'])->name('eclaircissement');
Route::get('esthetique-sourire',[PageController::class,'esthetique'])->name('esthetique.sourire');
Route::get('/',[HomeController::class,'homepage'])->name('homepage');
