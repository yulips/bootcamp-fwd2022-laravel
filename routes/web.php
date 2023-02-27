<?php

use Illuminate\Support\Facades\Route;

// use controller
use App\Http\Controllers\frontsite\LandingController;
use App\Http\Controllers\frontsite\AppointmentController;
use App\Http\Controllers\frontsite\PaymentController;

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

/*Route::get('/', function(){
    return view('welcome');
}); */

// route controller tanpa validasi
Route::resource('/', LandingController::class);

Route::group([ 'middleware' => ['auth:sanctum', 'verified']], function() {

    Route::resource('appointment', AppointmentController::class);

    Route::resource('payment', PaymentController::class);


});

// route group dengan adanya validasi
Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum', 
'verified']], function() {

   return view('dashboard');

});


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');})->name('dashboard');
});
