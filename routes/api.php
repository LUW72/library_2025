<?php

<<<<<<< HEAD
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
=======
use App\Http\Controllers\LendingController;
>>>>>>> 4fb75fe062fc5398ee306474d394d4e905998750
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

//bárki hozzáférhet
Route::post('/register',[RegisteredUserController::class, 'store']);
Route::post('/login',[AuthenticatedSessionController::class, 'store']);

//autentikált felhasználó
Route::middleware(['auth:sanctum'])->group(function () 
{
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::get('/user', function (Request $request) 
    {
        return $request->user();
    });
});

//admin    
Route::middleware(['auth:sanctum', Admin::class])->group(function () 
{
    Route::get('/users', [UserController::class, 'index']);
});

<<<<<<< HEAD
=======
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::get('/lendings', [LendingController::class, 'index']);
Route::get('/lendings/{user_id}/{copy_id}/{start}', [LendingController::class, 'show']);
Route::post('/lendings', [LendingController::class, 'store']);
Route::put('/lendings/{user_id}/{copy_id}/{start}', [LendingController::class, 'update']);
Route::delete('/lendings/{user_id}/{copy_id}/{start}', [LendingController::class, 'destroy']);
>>>>>>> 4fb75fe062fc5398ee306474d394d4e905998750
