<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/notification', function () {
    return [
        'message' => 'Hello World',
    ];
});
