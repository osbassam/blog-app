<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\MedicalProfessionalController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/faq', [FAQController::class , 'index'])->name('faq');
Route::get('/about-us' , [AboutUsController::class, 'index'])->name('about');
Route::get('/medical-professionals' , [MedicalProfessionalController::class , 'index'])->name('medicals');


require __DIR__ . '/auth.php';
