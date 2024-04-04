<?php

use App\Events\CreatedPost;
use App\Livewire\PostCreate;
use App\Livewire\PostView;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/vpost', PostView::class)
    ->name('vpost');

    Route::get('/post', PostCreate::class)
    ->name('post');

});
