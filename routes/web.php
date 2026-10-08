<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PageMetaController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\TeamMemberController;
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
Route::get('/le-cabinet/{slug}', [TeamController::class, 'show'])->name('team.show');
Route::get('faq',[PageController::class,'faq'])->name('faq');

$legacyServiceRoutes = [
    'urgence-dentaire' => 'urgence-dentaire',
    'protheses-dentaires' => 'proteses-dentaires',
    'implant-dentaire' => 'implant-dentaire',
    'remplacer-dent' => 'remplacer-dent',
    'remplacer-plusieurs-dents' => 'remplacer-plusieurs-dents',
    'remplacer-toutes-ces-dents' => 'remplacer-toutes-dents',
    'chirurgie-pre-implantaire' => 'chirurgie-pre-implantaire',
    'conseils-post-operatiores' => 'conseils',
    'eclaircissement-dentaire' => 'eclaircissement',
    'esthetique-sourire' => 'esthetique.sourire',
    'facette-dentaire' => 'facette-dentaire',
    'facette-pelliculaire' => 'facette-pelliculaire',
    'dentisterie-numerique' => 'dentisterie-numerique',
];

foreach ($legacyServiceRoutes as $uri => $name) {
    Route::get($uri, function () use ($uri) {
        return redirect()->route('service.show', $uri, 301);
    })->name($name);
}
Route::get('contact',[ContactController::class,'contactView'])->name('contact.view');
Route::post('contact',[ContactController::class,'send'])->name('send.contact');
Route::get('prenez-rendez-vous',[AppointmentController::class,'appointment'])->name('appointment');
Route::post('prenez-rendez-vous',[AppointmentController::class,'store'])->name('store.appointment');
Route::get('/services',[ServiceController::class,'index'])->name('service.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])
    ->where('slug', '[A-Za-z0-9\-]+')
    ->name('service.show');
Route::get('/',[HomeController::class,'homepage'])->name('homepage');

$adminLoginUri = trim((string) config('admin.login_uri'), '/');

if ($adminLoginUri !== '' && $adminLoginUri !== 'admin' && ! str_starts_with($adminLoginUri, 'admin/')) {
    Route::middleware('guest')->group(function () use ($adminLoginUri) {
        Route::get($adminLoginUri, [AuthController::class, 'create'])
            ->name('admin.login');
        Route::post($adminLoginUri, [AuthController::class, 'store'])
            ->middleware('throttle:admin-login')
            ->name('admin.login.store');
    });
}

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('logout', [AuthController::class, 'destroy'])->name('logout');
        Route::resource('galeries', GalleryController::class)
            ->except(['show'])
            ->parameters(['galeries' => 'gallery']);
        Route::resource('personnel', TeamMemberController::class)
            ->except(['show'])
            ->parameters(['personnel' => 'personnel']);
        Route::post('services/images', [AdminServiceController::class, 'uploadImage'])->name('services.images');
        Route::resource('services', AdminServiceController::class)->except(['show']);
        Route::resource('faqs', AdminFaqController::class)->except(['show']);
        Route::get('seo', [PageMetaController::class, 'index'])->name('seo.index');
        Route::get('seo/{page_meta}/edit', [PageMetaController::class, 'edit'])->name('seo.edit');
        Route::put('seo/{page_meta}', [PageMetaController::class, 'update'])->name('seo.update');
    });
});

Route::get('/{slug}', function (string $slug) {
    return redirect()->route('service.show', $slug, 301);
})->where('slug', '[A-Za-z0-9\-]+');
