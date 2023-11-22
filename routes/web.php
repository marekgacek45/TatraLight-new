<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminPostsController;

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
    return view('welcome');
})->name('home');



//LOGIN
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/', [PagesController::class,'home'])->name('home');
Route::get('/o-nas', [PagesController::class,'about'])->name('about');
Route::get('/oferta', [PagesController::class,'offer'])->name('offer');
Route::get('/galeria', [PagesController::class,'gallery'])->name('gallery');

Route::get('/kontakt', [PagesController::class,'contact'])->name('contact');



//ADMIN PANEL
// Route::get('/admin', [AdminPostsController::class, 'index'])->name('admin.index')->middleware('admin');
Route::get('/admin', [AdminPostsController::class, 'index'])->name('admin.index');
Route::get('/admin/nowyPost', [AdminPostsController::class, 'create'])->name('admin.create');
Route::post('/admin/nowyPost', [AdminPostsController::class, 'store'])->name('store');
Route::get('/{post:slug}', [AdminPostsController::class, 'show'])->name('admin.show');
Route::get('/{post:slug}/edytuj', [AdminPostsController::class, 'edit'])->name('admin.edit');
Route::patch('/{post:slug}', [AdminPostsController::class, 'update'])->name('admin.update');
Route::delete('/{post:slug}', [AdminPostsController::class, 'destroy'])->name('admin.destroy');
//zmienic nazwe 
Route::post('/admin/nowyPost/upload', [AdminPostsController::class, 'upload'])->name('ckeditor.upload');




