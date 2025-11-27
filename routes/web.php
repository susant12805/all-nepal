<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HeroImageController;
Route::get('home', [NewController::class, 'index']);
Route::get('/', [NewController::class, 'index']);
Route::get('about', [NewController::class, 'about']);
Route::get('service', [NewController::class, 'service']);
Route::get('product', [NewController::class, 'product']);
Route::get('project', [NewController::class, 'project']);
Route::get('contact', [NewController::class, 'contact']);




Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('user.pages.dashboard');
    })->name('dashboard');
     Route::resource('heroimage', HeroImageController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('products', ProductController::class);
    Route::resource('team', TeamController::class);
    Route::resource('logo', LogoController::class);
    Route::resource('client', ClientController::class);
    
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/edit-profile-picture', [ProfileController::class, 'changeimage'])->name('profile.editprofilepicture');
    Route::post('/profile/edit-profile-picture', [ProfileController::class, 'savechangeimage'])->name('profile.updateprofilepicture');
    Route::get('/profile/changepassword', [ProfileController::class, 'changepassword'])->name('profile.changepassword');
    Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('user', UserController::class);
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});




require __DIR__.'/auth.php';

