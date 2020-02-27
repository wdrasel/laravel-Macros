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

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

Route::get('/', function () {


    dd(Str::partNumber('021212554544554'));

    dd(Str::prefix('abcdd','00000'));
    return Response::errmassage('dsgsdgsgd');

//    dd(Str:: partnumber('1230544848'));
    return view('welcome');
});
