<?php

use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListProfilesCompetenciesRaController;
use App\Http\Controllers\ProfilesCompetenciesRaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListUsersController;
use App\http\Controllers\GenerateDocumentController;
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

Route::get('/', function () {
    return view('home');
});

// Rutas home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutass de profiles_competencies_ra
Route::get('/profiles-competencies-ra', [ProfilesCompetenciesRaController::class, 'index'])->name('profilesCompetenciesRa');
Route::get('/listado-profiles-competencies-ra', [ListProfilesCompetenciesRaController::class, 'index'])->name('listProfilesCompetenciesRa');

// Rutas user
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/list-users', [ListUsersController::class, 'index'])->name('ListUsers');

//Routes document
Route::get('/document', [GenerateDocumentController::class, 'index'])->name('document');
