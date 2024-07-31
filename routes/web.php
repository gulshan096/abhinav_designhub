<?php

use App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Route;


Route::get('/', [Frontend::class, 'home']);
Route::get('/about', [Frontend::class, 'about']);
Route::get('/contact', [Frontend::class, 'contact']);
Route::get('/portfolio/{id}', [Frontend::class, 'portfolio']);
Route::get('/portfolio-detail/{id1}/{id2}', [Frontend::class, 'portfolio_detail']);

Route::get('/details', [Frontend::class, 'details']);
Route::get('/terms', [Frontend::class, 'terms']);
Route::get('/privacy', [Frontend::class, 'privacy']);

Route::get('/myform', [Frontend::class, 'myform']);
Route::post('/form_submit', [Frontend::class, 'form_submit']);
Route::post('/submit_enquire', [Frontend::class, 'submit_enquire']);


// Route::get('/', [Frontend::class, 'home']);
// Route::get('/', [Frontend::class, 'home']);
// Route::get('/', [Frontend::class, 'home']);
// Route::get('/', [Frontend::class, 'home']);
// Route::get('/', [Frontend::class, 'home']);


