<?php

use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function(){
    Route::get('/tweets',[TweetController::class,'index'])->name('home');
    Route::post('/tweets',[TweetController::class,'store']);

    Route::post('/profiles/{user:name}/follow',[FollowsController::class,'store']);
});

Route::get('/profiles/{user:name}',[ProfilesController::class,'show'])->name('profile');


Auth::routes();



