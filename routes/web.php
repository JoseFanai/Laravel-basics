<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return "Hello from homepage!";
    // return view('welcome');
    });

Route::get('/about', function () {
    return view('about');
});

Route::get('/students', [StudentController::class, 'index']);

Route::get('/students/list', [StudentController::class, 'showList']);

Route::get('/students/create', [StudentController::class, 'create']);

Route::post('/students', [StudentController::class, 'store']);
// User-in hming pakhata 'Paih' an hmeh khan a ID (entirnan: /students/1) a rawn thawn ang a, chu chu Controller ah kan lo dawngsawng dawn a ni.
Route::delete('/students/{id}', [StudentController::class, 'destroy']);