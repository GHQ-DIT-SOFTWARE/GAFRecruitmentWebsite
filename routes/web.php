<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



//Read More Pages
Route::get('/about', function () {
    return view('about.about');
});

Route::get('/what-is-smi', function () {
    return view('about.what-is-smi');
});

Route::get('/who-is-officer-cadet', function () {
    return view('about.who-is-officer-cadet');
});

Route::get('/who-is-a-recruit', function () {
    return view('about.who-is-a-recruit');
});



//Officer Cadets
Route::get('/officer-general-elegibility', function () {
    return view('officers.officer-general-elegibility');
});

Route::get('/regular-commision', function () {
    return view('officers.regular-commision');
});

Route::get('/short-service-commision', function () {
    return view('officers.short-service-commision');
});

Route::get('/officer-cadet', function () {
    return view('officers.officer_cadet');
});

Route::get('/officer-phases', function () {
    return view('officers.officer-phases');
});



//Special Medical Intake
Route::get('/smi-general-elegibility', function () {
    return view('smi.smi-general-elegibility');
});

Route::get('/smi-entry-requirement', function () {
    return view('smi.smi-entry-requirement');
});

Route::get('/smi-phases', function () {
    return view('smi.smi-phases');
});



//Recruits
Route::get('/recruit-general-elegibility', function () {
    return view('recruit.recruit-general-elegibility');
});

Route::get('/recruit-army-requirement', function () {
    return view('recruit.recruit-army-requirement');
});

Route::get('/recruit-navy-requirement', function () {
    return view('recruit.recruit-navy-requirement');
});

Route::get('/recruit-airforce-requirement', function () {
    return view('recruit.recruit-airforce-requirement');
});

Route::get('/recruit-medical-corp', function () {
    return view('recruit.recruit-medical-corp');
});

Route::get('/recruit-phases', function () {
    return view('recruit.recruit-phases');
});



//Card Outline
Route::get('/card-outline', function () {
    return view('card_outline');
});


