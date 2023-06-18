<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StaticController;

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

Route::get('/accueil',[StaticController::class,'accueil'] );
Route::get('/propos',[StaticController::class,'propos'] );
Route::get('/Service_Reclamation', [StaticController::class,'Service_Reclamation']);
Route::get('/Service_Suggestion', [StaticController::class,'Service_Suggestion']);
Route::get('/Service_Observation', [StaticController::class,'Service_Observation']);
Route::get('/clarification', [StaticController::class,'clarification']);
Route::get('/definition', [StaticController::class,'definition']);
Route::get('/guide',[StaticController::class,'guide'] );
Route::get('/Responsable',[StaticController::class,'Responsable'] );
Route::get('/equipe',[StaticController::class,'equipe'] );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// responsable 
Route::get('/dashboard_responsable', [App\Http\Controllers\respoController::class,'indexDashboardRespo'])->name('dashboardRespo');
Route::get('/dashboard_admin', [App\Http\Controllers\adminController::class,'indexDashboardAdmin'])->name('dashboardAdmin');
