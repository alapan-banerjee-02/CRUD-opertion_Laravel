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
    return view('welcome');
});
use App\Http\Controllers\DemoController;
Route::get('/first',[DemoController::class,'first_example']);
Route::get('/signup',[DemoController::class,'signup_form']);
Route::post('/submit',[DemoController::class,'submit_data']);
Route::get('/display',[DemoController::class,'display_data']);
Route::get('/delete{del_id}',[DemoController::class,'delete_data']);
Route::get('/edit{del_id}',[DemoController::class,'edit_data']);
Route::post('/update',[DemoController::class,'update_data']);
Route::get('/signin',[DemoController::class,'login_form']);
Route::post('/login',[DemoController::class,'login_data']);
Route::get('/changepass',[DemoController::class,'change_pass']);
Route::post('/updatepass',[DemoController::class,'update_pass']);