<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.home.index');
})->name('/');
Route::get('/b2b', function () {
    return view('pages.b2b.index');
})->name('/b2b');;
Route::get('/features', function () {
    return view('pages.features.index');
});
Route::get('/solutions', function () {
    return view('pages.solutions.index');
});
Route::get('/whykasper', function () {
    return view('pages.whykasper.index');
})->name('/whykasper');;
Route::get('/about', function () {
    return view('pages.about.index');
})->name('about');;
Route::get('/blog', function () {
    return view('pages.blog.index');
})->name('/blog');;
Route::get('/announcements', function () {
    return view('pages.announcements.index');
})->name('/announcements');;
Route::get('/supplierlist', function () {
    return view('pages.supplierlist.index');
})->name('/supplierlist');;
Route::get('/contact', function () {
    return view('pages.contact.index');
})->name('/contact');;
Route::get('/terms', function () {
    return view('pages.terms&privacy.terms');
})->name('/terms');;
Route::get('/privacy', function () {
    return view('pages.terms&privacy.privacy');
})->name('/privacy');;
