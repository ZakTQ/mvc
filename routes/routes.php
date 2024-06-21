<?php

use Core\Modules\Router\Route;

return [
    Route::get('/', function () {
        echo 'hello world';
    }),
    Route::get('/post', function () {
        echo 'post';
    }),
    Route::get('/home', function () {
        echo 'home';
    }),
];