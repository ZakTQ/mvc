<?php

use App\Controllers\MainController;
use Core\Modules\Router\Route;

return [
    // Route::get('/', function () {
    //     echo 'hello';
    // }),

    Route::get('/', [MainController::class, 'index']),
    Route::get('/main', [MainController::class, 'index']),
    Route::get('/home', [MainController::class, 'index']),
    Route::get('/post', [MainController::class, 'index']),
];