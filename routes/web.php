<?php

use Illuminate\Support\Facades\Route;

/* ====================== Pages routes ====================== */

Route::get('/', function () {
    return view('index');
});

Route::get('/ratings', function () {
    return view('pages.ratings');
});

Route::get('/articles', function () {
    return view('pages.articles');
});

Route::get('/company', function () {
    return view('pages.company');
});

Route::get('/country', function () {
    return view('pages.country');
});

Route::get('/FraudulentCompanies', function () {
    return view('pages.fraudulentCompanies');
});

Route::get('/report', function () {
    return view('pages.report');
});
