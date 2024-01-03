<?php

use App\Livewire\Auth\Login;
use App\Livewire\Confession\Show;
use App\Livewire\Site;
use Illuminate\Support\Facades\Route;

Route::get('/', Site::class)->name('index');
Route::get('/login', Login::class)->name('login');
Route::get('/{slug}', Show::class);
