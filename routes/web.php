<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/productos', [ProductController::class, 'index'])->name('products.index');
Route::get('/productos/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::get('/tecnologia', [PageController::class, 'tecnologia'])->name('tecnologia');
Route::get('/resultados', [PageController::class, 'resultados'])->name('resultados');
Route::get('/preguntas-frecuentes', [PageController::class, 'faq'])->name('faq');

Route::get('/nosotros', [AboutController::class, 'index'])->name('about');

Route::get('/calculadora', [CalculatorController::class, 'index'])->name('calculator.index');

Route::get('/contacto', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contacto', [ContactController::class, 'send'])->name('contact.send');
