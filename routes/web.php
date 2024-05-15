<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

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

# 一覧画面
Route::get('/pokedex', [PokemonController::class, 'index']);
# 詳細画面
Route::get('/pokedex/{name}', [PokemonController::class, 'show'])->name('pokedex.show');
