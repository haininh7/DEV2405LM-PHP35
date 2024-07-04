<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ProfileController;
use App\http\controllers\AccountController;


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
#Route: trả về view (trang php)
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/devmaster', function () {
//     return view('Devmaster');
// });
Route::view('/devmaster', 'devmaster');
Route::get('/greeting', function () {
    return "<h1> xin chào </h1>";
});

#Route parameter
## Required parameter
Route::get('/param/{id}',function($id){
    return "<h1> param with Id: $id</h1>";
});
##optional parameter
Route::get('/optional/{name}', function($name="Devmaster"){
    return "<h1>(optional) param with Id: $name</h1>";
});
###regular Expression constraints
Route::get('/user/{name}', function($name){
    return "<h1>(name) tên chỉ chứa kí tự [A-Za-z]+";
})->where('name', '[A-Za-z]+');

Route::get('/user/{id}', function($id){
    return "<h1>(id) tên chỉ chứa kí tự [0-9]+";
})->where('id', '[0-9]+');

Route::get('/user/{id}/{name}', function($id, $name){
    return "<h1>(id) tên chỉ chứa kí tự [0-9]+";
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

##encoded forward slashes
Route::get('/search/{search}', function ($search) {
    return $search;
})->where('search', '.*');

#named route
Route::get('/named/profile', function(){
    return "<h1>đặt tên route; route('named.profile')";
})->name('named.profile');

#route group prefix
Route::group(['prefix'=>'admins'],function(){
    route::get('/',function(){return "<h1>admin home";});
    route::get('/account',function(){return "<h1>admin account";});
    route::get('/product',function(){return "<h1>admin product";});
});

#controller
##route method
Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
## Route Controller
Route::controller(ProfileController::class)->group(function(){
    route::get('/profile/{id}','show');
    route::get('/profile-{name}','store');

});

Route::get('/account',[AccountController::class,'index'])->name('account.index');

route::get('/account-create',[AccountController::class,'create'])->name('account.create');

route::get('/account-show',[AccountController::class,'showData'])->name('account.showData');

route::get('/account-list',[AccountController::class,'accountList'])->name('account.accountList');





