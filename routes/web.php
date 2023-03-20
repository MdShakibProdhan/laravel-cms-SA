<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
use App\Http\Controllers\TestimonialController;
use App\Models\Testimonial;

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
    $services = Service::all();

    return view('welcome', compact('services'));
});
// Route::view('/', 'welcome')->name('home');
Route::view('/serviceIndex', 'serviceView.index');


// ........................................................
// Service Crud Route 
Route::resource('service', ServiceController::class);
// ........................................................


// ........................................................
// Testimonial Crud Route 
Route::resource('testimonial', TestimonialController::class);
// ........................................................




Route::get('/dashboard', function () {
    $services = Service::all();
    return view('dashboard', compact('services'));
})->middleware(['auth', 'verified'])->name('dashboard');




Route::view('/test', 'test');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
