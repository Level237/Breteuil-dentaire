<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
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
Route::get('facette-dentaire',[PageController::class,'facette'])->name('facette-dentaire');
Route::get('facette-pelliculaire',[PageController::class,'facettePelliculaire'])->name('facette-pelliculaire');
Route::get('dentisterie-numerique',[PageController::class,'dentisterie'])->name('dentisterie-numerique');
Route::get('contact',[ContactController::class,'contactView'])->name('contact.view');
Route::post('contact',[ContactController::class,'send'])->name('send.contact');
Route::get('prenez-rendez-vous',[AppointmentController::class,'appointment'])->name('appointment');
Route::post('prenez-rendez-vous',[AppointmentController::class,'store'])->name('store.appointment');
Route::get('/services',[ServiceController::class,'index'])->name('service.index');
Route::get('/',[HomeController::class,'homepage'])->name('homepage');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [AuthController::class, 'create'])->name('login');
        Route::post('login', [AuthController::class, 'store'])->middleware('throttle:5,1')->name('login.store');
    });

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('logout', [AuthController::class, 'destroy'])->name('logout');
        Route::resource('galeries', GalleryController::class)
            ->except(['show'])
            ->parameters(['galeries' => 'gallery']);
        Route::view('personnel', 'admin.coming-soon', ['title' => 'Personnel'])->name('personnel.index');
    });
});
