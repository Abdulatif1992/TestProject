<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\MultiStep;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/multi', MultiStep::class);
