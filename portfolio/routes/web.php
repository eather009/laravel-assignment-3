<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthenticationController;
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

Route::get('/',[WebController::class, 'index'])->name('web.home');
Route::get('/about',[WebController::class, 'aboutme'])->name('web.about');
Route::get('/projects',[WebController::class, 'projects'])->name('web.project');
Route::get('/contact',[WebController::class, 'contactme'])->name('web.contact');
Route::post('/contact',[WebController::class, 'contactme'])->name('web.contact');

Route::get('/login',[AuthenticationController::class, 'login'])->name('login');
Route::post('/login',[AuthenticationController::class, 'login'])->name('login')
    ->middleware(['throttle:6,1']);
Route::get('/logout',[AuthenticationController::class, 'logout'])
    ->name('logout')->middleware('auth')->prefix('admin');

Route::middleware(['auth'])->prefix('admin')->group(function(){
   Route::get('/',[PortfolioController::class, 'index'])->name('admin.home');
   Route::get('/projects',[PortfolioController::class, 'projects'])->name('admin.projects');
   Route::get('/me',[PortfolioController::class, 'aboutMe'])->name('admin.me');
   Route::get('/contact',[PortfolioController::class, 'contacts'])->name('admin.contact');
});
