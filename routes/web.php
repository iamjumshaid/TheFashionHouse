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

Route::get('/', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/boutique/add/purchase', function () {
    return view('add_purchase');
});
Route::get('/boutique/view/purchase', function () {
    return view('view_purchase');
});
Route::get('/boutique/view/reports', function () {
    return view('view_reports');
});
Route::get('/boutique/add/products', function () {
    return view('add_products');
});


Route::get('/gym/add/member', function () {
    return view('add_member');
});
Route::get('/gym/view/member', function () {
    return view('view_member');
});
Route::get('/gym/view/reports', function () {
    return view('view_gym_reports');
});

Route::get('/parlor/add/appointment', function () {
    return view('add_appointment');
});
Route::get('/parlor/view/bookings', function () {
    return view('view_parlor_bookings');
});
Route::get('/parlor/view/reports', function () {
    return view('view_parlor_reports');
});


