<?php

use App\Http\Controllers\JobPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\JobListing;
use App\Http\Livewire\Landing;
use App\Http\Livewire\Application;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect ('/welcome');
});

Route::get('/welcome',Landing::class)->name('home');
Route::get('/joblisting',JobListing::class)->name('listing');
Route::get('/apply/{id}',Application::class)->name('apply');


