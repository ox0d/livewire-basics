<?php

use App\Livewire\CreatePost;
use App\Livewire\ShowPosts;
use App\Livewire\HelloWorld;
use App\Livewire\Counter;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;

Route::get('/', HelloWorld::class)->name('home');
Route::get('/counter', Counter::class)->name('counter');
Route::get('/todos', Todos::class)->name('todos');
Route::get('/show-posts', ShowPosts::class)->name('show-posts');
Route::get('/create-post', CreatePost::class)->name('create-post');

use App\Http\Controllers\RoleController;
Route::resource('roles', RoleController::class);