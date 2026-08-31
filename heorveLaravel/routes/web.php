<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\NotrePrixController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;


// Route pour la page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/notre-prix', [NotrePrixController::class, 'index'])->name('notre-prix');
Route::get('/legal', [LegalController::class, 'index'])->name('legal');
Route::get('/nos-liens', [LinksController::class, 'index'])->name('nos-liens');

