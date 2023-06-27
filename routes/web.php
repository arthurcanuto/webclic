<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

// Páginas estáticas
Route::get('/sobre', [StaticPageController::class, 'about'])->name('about');
Route::get('/servicos', [StaticPageController::class, 'services'])->name('services');
Route::get('/contato', [StaticPageController::class, 'contact'])->name('contact');

// Portfólio
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{project}', [PortfolioController::class, 'show'])->name('portfolio.show');

// Serviços
Route::get('/servicos', [ServiceController::class, 'index'])->name('services');
Route::get('/servicos/{service}', [ServiceController::class, 'show'])->name('services.show');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');

// Área administrativa (exemplo)
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/usuarios', [AdminController::class, 'users'])->name('admin.users');
    Route::get('/configuracoes', [AdminController::class, 'settings'])->name('admin.settings');
});






