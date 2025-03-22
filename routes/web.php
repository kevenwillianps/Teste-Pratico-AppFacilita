<?php

use App\Http\Controllers\GenerosController;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioLivrosController;
use Illuminate\Support\Facades\Route;

Route::get('user/list', [UserController::class, 'index'])->name('user.index');
Route::get('user/form', [UserController::class, 'create'])->name('user.create');
Route::get('user/form/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('user/store', [UserController::class, 'store'])->name('user.store');
Route::put('user/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('user/remove/{id}', [UserController::class, 'remove'])->name('user.remove');

Route::get('/', [LivrosController::class, 'index'])->name('livros.index');
Route::get('livros/form', [LivrosController::class, 'create'])->name('livros.create');
Route::get('livros/form/{id}', [LivrosController::class, 'edit'])->name('livros.edit');
Route::get('livros/details/{id}', [LivrosController::class, 'details'])->name('livros.details');
Route::post('livros/store', [LivrosController::class, 'store'])->name('livros.store');
Route::put('livros/update/{id}', [LivrosController::class, 'update'])->name('livros.update');
Route::delete('livros/remove/{id}', [LivrosController::class, 'remove'])->name('livros.remove');

Route::get('generos/list', [GenerosController::class, 'index'])->name('generos.index');
Route::get('generos/form', [GenerosController::class, 'create'])->name('generos.create');
Route::get('generos/form/{id}', [GenerosController::class, 'edit'])->name('generos.edit');
Route::post('generos/store', [GenerosController::class, 'store'])->name('generos.store');
Route::put('generos/update/{id}', [GenerosController::class, 'update'])->name('generos.update');
Route::delete('generos/remove/{id}', [GenerosController::class, 'remove'])->name('generos.remove');

Route::get('emprestimos/list', [UsuarioLivrosController::class, 'index'])->name('usuario_livros.index');
Route::get('emprestimos/form', [UsuarioLivrosController::class, 'create'])->name('usuario_livros.create');
Route::get('emprestimos/form/{id}', [UsuarioLivrosController::class, 'edit'])->name('usuario_livros.edit');
Route::post('emprestimos/store', [UsuarioLivrosController::class, 'store'])->name('usuario_livros.store');
Route::put('emprestimos/update/{id}', [UsuarioLivrosController::class, 'update'])->name('usuario_livros.update');
Route::delete('emprestimos/remove/{id}', [UsuarioLivrosController::class, 'remove'])->name('usuario_livros.remove');
