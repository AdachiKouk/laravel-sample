<?php

<<<<<<< HEAD
# use Illuminate\Support\Facades\Route;
=======
use Illuminate\Support\Facades\Route;
>>>>>>> cd4830e0a90bd36609e5819931651a4c3c4aa8c8

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
<<<<<<< HEAD
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);

=======
>>>>>>> cd4830e0a90bd36609e5819931651a4c3c4aa8c8

Route::get('/', function () {
    return view('welcome');
});
