<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuruController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        "title" => "Home"
    ]
);
    
});
Route::get('/about', function () {
    return view('about',[
        "title" => "About"
    ]
);
});
Route::get('/todolist', function () {
    return view('todolist',[
        "title" => "ToDolist"
    ]
);
});
Route::get('/test', function () {
    return view('test',[
        "title" => "test"
    ]
);
});
Route::resource('students', StudentController::class);
Route::resource('gurus', GuruController::class);
Route::get('/export-gurus', [GuruController::class, 'exportgurus'])->name('export.gurus');

