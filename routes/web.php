
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\GuruController;

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


    Route::post('/login/admin', [IndexController::class,'loginAdmin']);
    Route::post('/login/siswa', [IndexController::class,'loginSiswa']);
    Route::post('/login/guru', [IndexController::class,'loginGuru']);
    Route::get('/',[IndexController::class,'index']);
    Route::get('/home',[IndexController::class,'home']);
    Route::get('/logout', [IndexController::class, 'logout']);

    Route::prefix('/guru')->group(function() {
        Route::get('/index', [GuruController::class, 'index']);
        Route::get('/create', [GuruController::class, 'create']);
        Route::post('/store', [GuruController::class, 'store']);
        Route::get('/edit/{guru}', [GuruController::class, 'edit']);
        Route::post('/update/{guru}', [GuruController::class, 'update']);
        Route::get('/destroy/{guru}', [GuruController::class, 'destroy']);
    });
// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
