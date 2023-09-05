<?php

use App\Events\MessageSent;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
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

Route::view('/view', "messageView");

Route::get("/send", function () {

    event(new MessageSent(request("message"), request("sign")));
    return ["succcess" => "successss"];
})->name("send");


Route::get("socket", function (){
    
    Artisan::call("migrate");
    Artisan::call("websocket:serve");
});
