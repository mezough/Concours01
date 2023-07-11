<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('Layout/Pages/home');
});

Route::get('/concours', function () {
    return view('Layout/Pages/concours');
});

Route::get('/profiles', function () {
    return view('Layout/Pages/profiles');
});

Route::get('/profile', function () {
    return view('Layout/Pages/profile-ad');
});

Route::get('/connexion', function () {
    return view('Layout/Pages/connexion');
});

Route::get('/inscription', function () {
    return view('Layout/Pages/inscription');
});

Route::get('/admin',[RolesController::class, 'connexion']);
Route::post('/inscription',[UserController::class, 'insertUser'])->name('user.data');

Route::get('/admin/role',[RolesController::class, 'roleView']);
Route::post('/role',[RolesController::class, 'addRole'])->name('add.role');
