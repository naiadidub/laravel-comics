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
    $fumetti = config('comics');
    return view('homePage', ['fumetti'=>$fumetti]);
});
Route::get('/superman', function () {
    $fumetti = config('comics');
    $supermano = [];
    foreach ($fumetti as $superfumo){
        if ($superfumo['title']== 'Action Comics #1000: The Deluxe Edition'){
            $supermano[]= $superfumo;
        }
    }
    return view('superman', ['superman'=>$supermano]);
});

