<?php

use App\Http\Middleware\MustNotLogin;
use App\Livewire\AuthAction;
use App\Livewire\Confession\Show;
use App\Livewire\Me;
use App\Livewire\Site;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', Site::class)->name('index');
Route::get('/me', Me::class)->name('me');
Route::group(['prefix' => 'auth', 'as' => 'auth.'], static function () {
    Route::get('/', static fn () => Auth::user())->name('me');
    Route::group(['middleware' => MustNotLogin::class], static function () {
        Route::get('/login', AuthAction::class)->name('login');
        Route::get('/google', [AuthAction::class, 'google'])->name('google');
        Route::get('/callback', [AuthAction::class, 'callback'])->name('callback');
    });
    Route::get('/logout', [AuthAction::class, 'logout'])->name('logout');

});
Route::get('/{slug}', Show::class);
