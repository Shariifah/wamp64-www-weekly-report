<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\SeeReportController;
use App\Http\Controllers\ServiceController;
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
    return view('welcome');
});

// Route Get
Route::get('/import_fichier', [FileController::class, 'add_file_to_website']);
Route::get('/service-creation', [ServiceController::class, 'index']);
Route::get('/reports_list', [SeeReportController::class, 'index']);
Route::get('/see/reports/{id}', [SeeReportController::class, 'voir'])->name('voir');

// Route Post
Route::post('/import_fichier_done', [FileController::class, 'file_settings'])->name('fichier');
Route::post('/service_creation_done', [ServiceController::class, 'create_employee_service'])->name('service');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
