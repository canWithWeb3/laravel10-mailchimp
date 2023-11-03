<?php

use Illuminate\Support\Facades\Route;
use Spatie\Newsletter\Facades\Newsletter;

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
    $email = "canooo066@gmail.com";

    if(!Newsletter::isSubscribed($email)){ // böyle bir abone var mı
        // abone ekle
        Newsletter::subscribe($email);
        return "tamamdır";
    }else{
        // aboneliği silme
        Newsletter::unsubscribe($email);
    }
});
