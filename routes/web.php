<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__ . '/auth.php';


Route::get('send_mail', [MailController::class, 'index']);
Route::get('file-upload', [FileController::class, 'index']);
