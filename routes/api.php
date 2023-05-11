<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\khleang\ChangePassController;
use App\Http\Controllers\khleang\inboxController;
use App\Http\Controllers\khleang\InboxCustome;
use App\Http\Controllers\khleang\khleangController;
use App\Http\Controllers\khleang\noteController;
use App\Http\Controllers\khleang\noteCustome;
use App\Http\Controllers\khleang\upload_type_Controller;
use App\Http\Controllers\khleang\UserController;
use App\Http\Controllers\khleang\UserCustome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::resource('/upload',khleangController::class);
    Route::resource('/upload_type',upload_type_Controller::class);
    Route::resource('/note',noteController::class);
    Route::resource('/user',UserController::class);

    // custome
    Route::put('/changepassword',[UserCustome::class,'changePass']);
        // Admin
    Route::get('/getalluser',[UserCustome::class,'getalluser']);
    Route::get('/getallnote',[UserCustome::class,'getallnote']);
    Route::get('/getallupload',[UserCustome::class,'getallupload']);
    // Delete All 
    Route::delete('/deleteAllNote/{id}',[noteCustome::class,'delete_allnote']);

    // inbox
    Route::resource('/inbox',inboxController::class);
    Route::get('/getProfileImage/{id}',[InboxCustome::class,'getProfileImageByID']);
    Route::get('/getUser/{id}',[InboxCustome::class,'getUserByID']);
});