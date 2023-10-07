<?php
use Illuminate\Support\Facades\Route;

Route::get('/b', function () {
    return 'welcome';
});
Route::get('/a', function () {
    return view('welcome');
});