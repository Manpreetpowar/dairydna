<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AnimalControllers;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//FOR ADMIN ONLY
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('users', UserController::class);
});

//FOR EMPLOYEE ONLY
Route::middleware(['auth','role:employee'])->group(function () {
   
    Route::get('employee/dashboard', [EmployeeController::class, 'dashboard'])->name('emplyee.dashboard');
});

//FOR BOTH EMPLOYEE AND ADMIN COMMON ROUTES

Route::middleware(['role:admin,employee'])->group(function () {
    Route::get('animals/create', [AnimalControllers::class, 'create'])->name('animals.create');
    Route::get('animals/index', [AnimalControllers::class, 'index'])->name('animals.index');
});
