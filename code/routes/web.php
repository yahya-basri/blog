<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
// POST LOGIc
use App\Livewire\Posts\PostIndex;
use App\Livewire\Posts\PostCreate;
use App\Livewire\Posts\PostEdit;
use App\Livewire\Posts\PostShow;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');

    // POST CRUD
    Route::get('posts', PostIndex::class)->name('posts.index');
    Route::get('posts/create', PostCreate::class)->name('posts.create');
    Route::get('posts/{id}/edit', PostEdit::class)->name('posts.edit');
    Route::get('posts/{id}', PostShow::class)->name('posts.show');
});

require __DIR__.'/auth.php';
