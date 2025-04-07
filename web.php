<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServicoController;


Route::get('usuarios', [UserController::class, 'getusuarios']);

Route::get('servicos', [ServicoController::class, 'getservicos']);
