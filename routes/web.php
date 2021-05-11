<?php

use App\Http\Controllers\ExploreController;
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

    Route::post('/profiles/{user:username}/follow',[FollowsController::class,'store'])->name('follow');

    Route::get('/profiles/{user:username}/edit',[ProfilesController::class,'edit'])->middleware('can:edit,user');

    Route::patch('/profiles/{user:username}',[ProfilesController::class,'update'])->middleware('can:edit,user');

    Route::get('/explore',[ExploreController::class,'index']);
});

Route::get('/profiles/{user:username}',[ProfilesController::class,'show'])->name('profile');



Auth::routes();



