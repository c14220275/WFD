<?php
use App\Http\Controllers\CarStatusController;
use App\Http\Controllers\carController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisteredUserController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cars', [carController::class, 'index'])->name('cars.index'); //show mobil
    Route::get('/cars/view/{car:car_id}', [carController::class, 'show'])->name('cars.show'); //lihat detail suatu mbl
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::middleware(['auth', 'role:ADMIN'])->group(function () {
    Route::get('/carstatus', [CarStatusController::class, 'index'])->name('carstatus.index'); // To view cars
    Route::patch('/carstatus/check-out/{id}', [CarStatusController::class, 'checkOut'])->name('cars.checkOut');
    Route::patch('/carstatus/check-in/{id}', [CarStatusController::class, 'checkIn'])->name('cars.checkIn');
    Route::get('/cars/edit/{car:car_id}', [carController::class, 'edit'])->name('car.edit'); // Show form to edit a car
    Route::put('/cars/update/{car:car_id}', [carController::class, 'update'])->name('car.update'); // Update car details
    Route::delete('/cars/delete/{car:car_id}', [carController::class, 'delete'])->name('car.delete');
    Route::get('/cars/create', [carController::class, 'create'])->name('car.create');
    Route::post('/cars/store', [carController::class, 'store'])->name('car.store'); // tambah mobil baru
});


});

require __DIR__.'/auth.php';
