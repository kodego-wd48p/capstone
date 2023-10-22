<?php
// //testing---------------------
// use App\Models\Applicant;
// use App\Models\User;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisterController;
use App\Models\UserType;
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
})->middleware('user');

// Route::get('/', function(){
//     return view('auth.register');   
// })->middleware('applicant');






Route::get('/select-a-user', function(){
   return view('auth.select-a-user');
});

//  Route::get('/register/{id}', function($id){

//     if($id == 1 || $id == 2){
//       $usertype = UserType::find($id);

//       return view('auth.register');

//     }else{
//         abort(404)
//     }
    
//  }); 




// Route::get('/select-a-user', [RegisterController::class, 'select_a_user']);

// Route::get('/register/{id}', [RegisterController::class, 'register_user']);



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