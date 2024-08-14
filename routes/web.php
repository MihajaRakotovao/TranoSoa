<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{GetController,AllController,MailController};
use App\Http\Controllers\Admin\{LogementController,OptionController};
use Illuminate\Support\Facades\Session;

/*
mot clé route / :: (redirection) url / fonction */
Route::get('/', [GetController::class, 'home'])->name('home');
Route::get('about', [GetController::class, 'about'])->name('about');
Route::get('/logements', [AllController::class,'ind'])->name('logements');
Route::get('/logements/{id}', [AllController::class,'offre'])->name('offres');
// message
Route::post("comments",[AllController::class,"InsertComs"])->name("comments");
// Supprimer image logement
Route::delete('supprimerImg/{id}',[AllController::class,'destroyImage'])->name('SupImg');
// inscription
Route::post('/inscription',[AllController::class, 'inscription'])->name('inscription');
// Connexion
Route::post('/connexion',[AllController::class, 'connexion'])->name('connexion');
// Deconnexion
Route::get('/logout',[AllController::class, 'logout'])->name('logout');
// Mail
Route::post('mail/{id}',[MailController::class,'mailaka'])-> name('mailaka');
//ajout Offre
Route::post('/add-product',[AllController::class,'store'])->name('store');

// Route::get('users/{id}', [UserController::class, 'index'])->name('user.index');

// ADMIN
Route::get('adminAD', [LogementController::class, 'indexAD'])->name('adminAD');
Route::get('form',[LogementController::class, 'create'])->name('form');
Route::get('admin', [LogementController::class, 'index'])->name('admin');
Route::get('User', [LogementController::class, 'User'])->name('user');
Route::get('annonce', [LogementController::class, 'annonce'])->name('annonce');
Route::get('option',[OptionController::class, 'index'])->name('option');
Route::get('/post-image/{id}',[AllController::class, 'post'])->name('post');

// CRUD Admin
Route::prefix('adminAd')->name('admin.')->group(function(){
    Route::resource('logement',(LogementController::class));
    Route::resource('option',(OptionController::class));
});

/* U S E R S P A C E */
Route::get('/membre',[GetController::class,'membre'])->name('membre');
// Supprimer User
Route::delete('supprimerUser/{id}',[AllController::class,'destroyUser'])->name('SupUser');
Route::get('login', [GetController::class, 'login'])->name('login');
Route::get('signin', [GetController::class, 'signin'])->name('signin');




