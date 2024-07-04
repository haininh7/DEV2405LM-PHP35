<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('/khoa',function(){
    return "<h1> Danh sách khoa";
});

route::post('/khoa/add',function(Request $request){
    return "<h1> Khoa: $request";
});

route::match(['get','post'],'/student',function(Request $request){
    return 'Request method is :' .$request->method();
});