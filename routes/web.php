<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdoptorController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\RescuerController;
use App\Http\Controllers\LandingController;

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

// Route::get('/', function () {
//     return view('WelcomePage.index');
// });

//LANDING PAGE
Route::get('/', [LandingController::class, 'index'])->name('landing.index');


// Animals Route
Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::post('/animals/store', [AnimalController::class, 'store'])->name('animals.store');
Route::get('/animals/edit/{id}', [AnimalController::class, 'edit'])->name('animals.edit');
Route::patch('/animals/update/{id}', [AnimalController::class, 'update'])->name('animals.update');
Route::delete('/animals/delete/{id}', [AnimalController::class, 'destroy'])->name('animals.delete');

// Adoptors Route
Route::get('/adoptors', [AdoptorController::class, 'index'])->name('adoptors.index');
Route::get('/adoptors/create', [AdoptorController::class, 'create'])->name('adoptors.create');
Route::post('/adoptors/store', [AdoptorController::class, 'store'])->name('adoptors.store');
Route::get('/adoptors/edit/{id}', [AdoptorController::class, 'edit'])->name('adoptors.edit');
Route::patch('/adoptors/update/{id}', [AdoptorController::class, 'update'])->name('adoptors.update');
Route::delete('/adoptors/delete/{id}', [AdoptorController::class, 'destroy'])->name('adoptors.delete');

// Rescuers Route
Route::get('/rescuers', [RescuerController::class, 'index'])->name('rescuers.index');
Route::get('/rescuers/create', [RescuerController::class, 'create'])->name('rescuers.create');
Route::post('/rescuers/store', [RescuerController::class, 'store'])->name('rescuers.store');
Route::get('/rescuers/edit/{id}', [RescuerController::class, 'edit'])->name('rescuers.edit');
Route::patch('/rescuers/update/{id}', [RescuerController::class, 'update'])->name('rescuers.update');
Route::delete('/rescuers/delete/{id}', [RescuerController::class, 'destroy'])->name('rescuers.delete');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

// // Animals Route
// Route::get('/animals', [AnimalController::class, 'index'])->name('animals.index');
// Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
// Route::post('/animals/store', [AnimalController::class, 'store'])->name('animals.store');
// Route::get('/animals/edit/{id}', [AnimalController::class, 'edit'])->name('animals.edit');
// Route::patch('/animals/update/{id}', [AnimalController::class, 'update'])->name('animals.update');
// Route::delete('/animals/delete/{id}', [AnimalController::class, 'destroy'])->name('animals.delete');

// // Adoptors Route
// Route::get('/adoptors', [AdoptorController::class, 'index'])->name('adoptors.index');
// Route::get('/adoptors/create', [AdoptorController::class, 'create'])->name('adoptors.create');
// Route::post('/adoptors/store', [AdoptorController::class, 'store'])->name('adoptors.store');
// Route::get('/adoptors/edit/{id}', [AdoptorController::class, 'edit'])->name('adoptors.edit');
// Route::patch('/adoptors/update/{id}', [AdoptorController::class, 'update'])->name('adoptors.update');
// Route::delete('/adoptors/delete/{id}', [AdoptorController::class, 'destroy'])->name('adoptors.delete');

// // Rescuers Route
// Route::get('/rescuers', [RescuerController::class, 'index'])->name('rescuers.index');
// Route::get('/rescuers/create', [RescuerController::class, 'create'])->name('rescuers.create');
// Route::post('/rescuers/store', [RescuerController::class, 'store'])->name('rescuers.store');
// Route::get('/rescuers/edit/{id}', [RescuerController::class, 'edit'])->name('rescuers.edit');
// Route::patch('/rescuers/update/{id}', [RescuerController::class, 'update'])->name('rescuers.update');
// Route::delete('/rescuers/delete/{id}', [RescuerController::class, 'destroy'])->name('rescuers.delete');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

