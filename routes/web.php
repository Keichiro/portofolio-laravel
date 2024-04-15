<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/argh', function () {
    return "<h2>ARGH 1</h2><img src='https://msp.c.yimg.jp/images/v2/FUTi93tXq405grZVGgDqG9frSXjOmZ7hFZziOjSgtMFNWQLcoFZzf6s8YlunQ-iArqQThNACCVeQiShAq_NfCyTc3Vbn9rjCkqZP_doJCOZLKluBb65TGZv3pwqyv9pnFNDQ0QnExAJe726NttlnBvisdFaetjoEKvtkoiggIGCFmuCy0kmRuBAy4fYK6KOYIpw2QMfc2DqZ5e3tlPUfW71FV_6Nl7JOtugvE_GBs7NGlcjzNqDDszuzqmqTJRGg071jtDfkr45jy-p_U4_h640REDyY0pkG1so5JPoZWvOTQDK_-QOpPvAFiK3LfeAME-iByzOk7-HxKBi3L9Y1Zil2UqbpxFfRCYlVCevU44qwb0gE-e1sbo84QI2bIG0J-j26QbXheq8FFgooL9nrZ6bjqZrFE2quq8D8BYeznNrBMqbLjxuUNr_GpDB6jdfnJQQmndzasnqGKB22RIkoQQ==/i-recreated-the-windows-xp-bliss-wallpaper-in-minecraft-v0-3xdh8rx5abj91.png?errorImage=false' alt='My Image'>";
});

// routes/web.php


Route::get('/adam', function () {
    return view('adam');
});

Route::get('/netbook/HPMini210', function () {
    return view('HPMini210');
});

Route::get('/news/AMD64bit', function () {
    return view('AMDX86-64');
});

Route::get('/news/IntelNetburst', function () {
    return view('IntelNetburst');
});

Route::get('/registerproj', function () {
    return view('registerproj');
});

Route::get('/YG', function () {
    return view('YahooGames');
});

Route::get('/ebay', function () {
    return view('eBay');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/loginproj', function () {
    return view('loginproj');
});

Route::get('/moneyproj', function () {
    return view('moneyproj');
});