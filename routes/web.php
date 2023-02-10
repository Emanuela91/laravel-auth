<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home'])
    ->name('home');

// rotta protetta per my Home 
Route::get('/myHome', function () {
    return view('pages.myHome');
})->middleware(['auth', 'verified'])->name('myHome');

// rotta per project show 
Route::get('/project/show/{project}', [MainController::class, 'projectShow'])
    ->name('project.show');

// Route::middleware(['auth', 'verified'])
Route::middleware([])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        // rotta creazione nuovo progetto
        Route::get('/project/create', [MainController::class, 'create'])
            ->name('project.create');
        Route::post('/project/create', [MainController::class, 'store'])
            ->name('project.store');

        // rotta per cancellare
        Route::get('/project/delete/{project}', [MainController::class, 'delete'])
            ->name('project.delete');
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';