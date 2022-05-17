<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DrawingController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\FlippingCardController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MedicalProfessionalController;
use App\Http\Controllers\PaintingController;
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
Route::get('/flipping-cards' , [FlippingCardController::class , 'index'])->name('flipping-cards');

Route::get('/games' , [GameController::class , 'index'])->name('games');

Route::get('/drawing' , [DrawingController::class , 'index'])->name('drawing');

Route::get('/painting' , [PaintingController::class , 'index'])->name('painting');

Route::get('/blog' , function () {
    return Inertia::render('Blog');
});


require __DIR__ . '/auth.php';
