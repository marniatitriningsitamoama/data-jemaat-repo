<?php

use App\Http\Controllers\ListDataController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ListDataController::class, 'index']);

       
