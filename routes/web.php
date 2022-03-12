<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['middelware' => 'Auth'],function(){
  Route::resource('hotels',App\Http\Controllers\HotelsController::class);
  Route::resource('liasonOfficer',App\Http\Controllers\LiasonOfficerController::class);
  Route::resource('vehicles',App\Http\Controllers\VehicleController::class);
  Route::resource('rooms',App\Http\Controllers\RoomController::class);
  Route::resource('applicants',App\Http\Controllers\ApplicantsController::class);
});
