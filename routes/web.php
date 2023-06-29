<?php
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;


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

// Route::get('home', [HomeController::class, 'index'])->name('home');

// Route::get('employees', [HomeController::class, 'index'])->name('employees.index');
// Route::get('profile', [HomeController::class, 'index'])->name('profile');

Route::get('profile', ProfileController::class)->name('profile');

Route::resource('employees', EmployeeController::class);

Auth::routes(
);

Route::post('login', [LoginController::class, 'authenticate']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
