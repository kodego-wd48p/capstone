<?php
// //testing---------------------
// use App\Models\Applicant;
// use App\Models\User;

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
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



//routes for the jobpost controller
Route::get('/jobs',[JobController::class, 'index']);
Route::get('/job/{id}',[JobController::class, 'show']);
Route::get('/job',[JobController::class, 'create']);
Route::get('/job/{id}/edit',[JobController::class, 'edit']);

Route::post('/job', [JobController::class, 'store']);
Route::put('/job/{id}/edit', [JobController::class, 'update']);
Route::delete('/job/{id}', [JobController::class, 'destroy']);


// // model factories-------------

// Route::get('/', function(){
//    return User::all();
// });

//  Route::get('/', function(){
//     return Applicant::all();
//  });

