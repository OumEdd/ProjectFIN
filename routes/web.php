<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\respoController;
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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// responsable
Route::get('/dashboard_responsable', [App\Http\Controllers\respoController::class,'indexDashboardRespo'])->name('dashboardRespo');
Route::post('/respo', [respoController::class, 'AuthLoginRespo'])->name('AuthLoginRespo');



//admin
Route::get('/dashboard_admin', [App\Http\Controllers\adminController::class,'indexDashboardAdmin'])->name('dashboardAdmin');
Route::post('/Admin', [adminController::class, 'AuthLoginAdmin'])->name('AuthLoginAdmin');
Route::get('/logoutAdmin', [App\Http\Controllers\adminController::class,'logoutAdmin'])->name('logoutAdmin');
Route::get('/respo', [App\Http\Controllers\adminController::class,'ad_respo'])->name('ad_respo');
Route::get('/service', [App\Http\Controllers\adminController::class,'ad_service'])->name('ad_service');
Route::get('/ville', [App\Http\Controllers\adminController::class,'ad_ville'])->name('ad_ville');
Route::get('/updateRespo/{id_respo}', [App\Http\Controllers\adminController::class,'updateRespo'])->name('updateRespo');
Route::get('/deleteRespo/{id_respo}', [App\Http\Controllers\adminController::class,'deleteRespo'])->name('deleteRespo');
Route::get('/updateServ/{id_serv}', [App\Http\Controllers\adminController::class,'updateServ'])->name('updateServ');
Route::get('/deleteServ/{id_serv}', [App\Http\Controllers\adminController::class,'deleteServ'])->name('deleteServ');
Route::get('/updateVille/{id_ville}', [App\Http\Controllers\adminController::class,'updateVille'])->name('updateVille');
Route::get('/deleteVille/{id_ville}', [App\Http\Controllers\adminController::class,'deleteVille'])->name('deleteVille');
Route::post('/ModifyRespo/{id_respo}', [App\Http\Controllers\adminController::class,'ModifyRespo'])->name('ModifyRespo');
Route::post('/ModifyServ/{id_serv}', [App\Http\Controllers\adminController::class,'ModifyServ'])->name('ModifyServ');
Route::post('/ModifyVille/{id_ville}', [App\Http\Controllers\adminController::class,'ModifyVille'])->name('ModifyVille');
