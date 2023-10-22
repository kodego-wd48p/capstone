<?php
// //testing---------------------
// use App\Models\Applicant;
// use App\Models\User;

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AddressController;
// use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;

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
//default routes
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/', function(){
    return view('auth.login');
});


// // model factories-------------

// Route::get('/', function(){
//    return User::all();
// });

//  Route::get('/', function(){
//     return Applicant::all();
//  });



// //routes for the service controller
// Route::get('/services',[ServiceController::class, 'index']);
// Route::get('/service/{id}',[ServiceController::class, 'show']);
// Route::get('/service',[ServiceController::class, 'create']);
// Route::get('/service/{id}/edit', [ServiceController::class, 'edit']);

// Route::post('/service', [ServiceController::class, 'store']);
// Route::put('/service/{id}/edit', [ServiceController::class, 'update']);
// Route::delete('/service/{id}', [ServiceController::class, 'destroy']);