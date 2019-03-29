<?php

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

Route::get('/', function()
{
    return View::make('pages.home');
})->name('home');
Route::get('about', function()
{
    return View::make('pages.about');
})->name('about');
Route::get('contact', function()
{
    return View::make('pages.contact');
})->name('contact');
Route::get('login', function()
{
    return View::make('pages.login');
})->name('login');