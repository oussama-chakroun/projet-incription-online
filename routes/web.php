<?php

use App\Http\Controllers\ConcourController;
use App\Http\Controllers\ConvocationController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PreInscriptionController;
use App\Mail\SendValidationCondidature;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {

        // Mail::to('choussama816@gmail.com')
        // ->send(new SendValidationCondidature());
    return view('welcome');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pre_inscription', function () {
    return view('preinscription.preinscription-register');
})->name('pre_inscription');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user/{user}/{lang}', [UserController::class, 'updateLang'])->name('user.lang');

    Route::resource('concour', ConcourController::class);

    // Route::get('/concour/validateConcour/{concour}', [ConcourController::class , 'validateConcour'])->name('concour.validateConcour');
    Route::get('/concour/rejectConcour/{concour}', [ConcourController::class , 'rejectConcour'])->name('concour.rejectConcour');
    Route::post('concour/validateConcour/{concour}', [ConcourController::class , 'validateConcour'])->name('concour.validateConcour');


    Route::resource('convocations', ConvocationController::class);

    // routes/web.php
    Route::get('/download/convocation/{concour}', [ConvocationController::class, 'downloadConvocationDetails'])->name("download.convocation");

    Route::group(['middleware' => ['role:super-admin|admin|support']], function() {

        Route::resource('permissions', PermissionController::class);
        Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);



        Route::resource('roles', RoleController::class);
        Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);
        Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'addPermissionToRole']);
        Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionToRole']);

        Route::resource('users', UserController::class);

        Route::get('users/{userId}/delete', [UserController::class, 'destroy']);

        Route::get('/pre_inscription/list', [PreInscriptionController::class , 'index'])->name('pre_inscription.list');
        Route::get('/pre_inscription/delete/{preInscription}', [PreInscriptionController::class , 'delete'])->name('pre_inscription.delete');
        Route::get('/pre_inscription/validateCondidature/{preInscription}', [PreInscriptionController::class , 'validateCondidature'])->name('pre_inscription.validateCondidature');
        Route::get('/pre_inscription/rejectCondidature/{preInscription}', [PreInscriptionController::class , 'rejectCondidature'])->name('pre_inscription.rejectCondidature');


        Route::get('/concour/delete/{concour}', [ConcourController::class , 'delete'])->name('concour.delete');

        Route::get('/concour/validateConcour/{concour}', [ConcourController::class , 'validateConcour'])->name('concour.validateConcour');
        Route::get('/concour/rejectConcour/{concour}', [ConcourController::class , 'rejectConcour'])->name('concour.rejectConcour');


    });
});


require __DIR__.'/auth.php';
