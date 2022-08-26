<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;


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



Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth','verified');

Route::post('/booking', [HomeController::class, 'booking']);

Route::get('/mybooking', [HomeController::class, 'mybooking']);

Route::get('/cancel_booking', [HomeController::class, 'cancel_booking']);


Route::get('/add_service_view', [AdminController::class, 'addview']);

Route::post('/upload_admin', [AdminController::class, 'upload']);

Route::get('/showbooking', [AdminController::class, 'showbooking']);

Route::get('/approved/{id}', [AdminController::class, 'approved']);

Route::get('/canceld/{id}', [AdminController::class, 'canceled']);

Route::get('/showuser', [AdminController::class, 'showuser']);

Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);

Route::get('/updateuser/{id}', [AdminController::class, 'updateuser']);

Route::get('/showcustomer', [AdminController::class, 'showcustomer']);

Route::post('/updatecustomer', [AdminController::class, 'updatecudtomer']);

Route::get('/deletecustomer/{id}', [AdminController::class, 'deletecustomer']);

Route::post('/edituser/{id}', [AdminController::class, 'edituser']);

Route::get('/emailview/{id}', [AdminController::class, 'emailview']);

Route::post('/sendemail/{id}', [AdminController::class, 'sendemail']);






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


