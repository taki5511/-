<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CategoryController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    //Route::post('/', 'refine')->name('refine');
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts/create', 'create')->name('create');
    Route::get('/posts/{post}', 'show')->name('show');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', 'delete')->name('delete');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
});

Route::controller(DiaryController::class)->middleware(['auth'])->group(function(){
    Route::get('/diary', 'index')->name('diary_index');
    Route::post('/diaries', 'store')->name('diary_store');
    Route::get('/diaries/create','create')->name('diary_create');
    Route::get('/diaries/{diary}', 'show')->name('diary_show');
    Route::put('/diaries/{diary}', 'update')->name('diary_update');
    Route::delete('/diaries/{diary}','delete')->name('diary_delete');
    Route::get('/diaries/{diary}/edit', 'edit')->name('diary_edit');
    
});

Route::controller(TestController::class)->middleware(['auth'])->group(function(){
    Route::get('/test','index')->name('test_index');
    Route::post('/tests', 'store')->name('test_store');
    Route::get('/tests/title', 'title')->name('test_title');
    Route::get('tests/create', 'create')->name('test_create');
    Route::get('/tests/{test}', 'show')->name('test_show');
    Route::put('/tests/{test}', 'update')->name('test_update');
    Route::delete('/tests/{test}','delete')->name('test_delete');
    Route::get('tests/{test}/edit', 'edit')->name('test_edit');
    Route::get('tests/{test}/answer', 'answer')->name('test_answer');
});

Route::get('/categories/{category}', [CategoryController::class,'index'])->middleware("auth");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
