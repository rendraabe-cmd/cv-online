<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;

Route::get('/', [CvController::class, 'index'])->name('cv.index');
Route::get('/download', [CvController::class, 'download'])->name('cv.download');
