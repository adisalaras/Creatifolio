<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectToolController;
use App\Http\Controllers\ToolController;
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

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/details', [FrontController::class, 'details'])->name('front.details');
Route::get('/book', [FrontController::class, 'book'])->name('front.book');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function(){
        Route::resource('projects', ProjectController::class); 
        Route::resource('tools', ToolController::class);
        //Route::resource('project_tools', ProjectToolController::class); //tidak bisa pake ini, dikarenakan model project sama dengan projects

        //route project tool
        Route::get('/tools/assign/{project}', [ProjectToolController::class, 'create'])->name('project.assign.tool'); //tampil pada index project_tool
        Route::post('/tools/assign/save/{project}', [ProjectToolController::class, 'store'])->name('project.assign.tool.store');
         
    });
    
});

require __DIR__.'/auth.php';
