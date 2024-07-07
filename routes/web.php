<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectOrderController;
use App\Http\Controllers\ProjectScreenshotController;
use App\Http\Controllers\ProjectToolController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ToolController;
use App\Models\ProjectOrder;
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
Route::get('/details/{project:slug}', [FrontController::class, 'details'])->name('front.details');
Route::get('/book', [FrontController::class, 'book'])->name('front.book');
Route::post('/book/save', [FrontController::class, 'store'])->name('front.book.store'); //simpan book

Route::get('/services', [FrontController::class, 'services'])->name('front.services');

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
        Route::resource('project_orders', ProjectOrderController::class);

        Route::resource('project_tools', ProjectToolController::class);
        //route project tool
        Route::get('/tools/assign/{project}', [ProjectToolController::class, 'create'])->name('project.assign.tool'); //tampil pada index project_tool
        Route::post('/tools/assign/save/{project}', [ProjectToolController::class, 'store'])->name('project.assign.tool.store');

        Route::resource('project_screenshots', ProjectScreenshotController::class);
        Route::get('/screenshot/{project}', [ProjectScreenshotController::class, 'create'])->name('project_screenshots.create'); //tampil pada index project_tool
        Route::post('/screenshot/save/{project}', [ProjectScreenshotController::class, 'store'])->name('project_screenshots.store');


        Route::resource('testimonials', TestimonialController::class);
        
         
    });
    
});

require __DIR__.'/auth.php';
