<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

Route::get('/upload', function () {
    return view('upload');
});

Route::post('/upload', [FileUploadController::class, 'upload'])->name('upload');