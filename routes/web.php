<?php

use App\Http\Controllers\AyahController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AyahController::class, 'today']);