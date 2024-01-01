<?php

use App\Livewire\Confession\Show;
use App\Livewire\Site;
use Illuminate\Support\Facades\Route;

Route::get('/', Site::class);
Route::get('/page/{page}', Site::class);
Route::get('/{slug}', Show::class);
