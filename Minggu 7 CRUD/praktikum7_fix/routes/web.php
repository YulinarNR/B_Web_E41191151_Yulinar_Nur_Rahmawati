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
    return view('welcome');
});
Route::group(['namespace' => 'Frontend'], function(){
    Route::resource('home', 'HomeController');
});

Route::group(['namespace' => 'Backend'], function()
{
    Route::resource('dashboard','DashboardController');
}
);

Route::group(['namespace' => 'Backend'], function(){
    Route::resource('dashboard', 'DashboardController');
    Route::resource('pendidikan', 'PendidikanController');
    Route::resource('pengalaman_kerja', 'PengalamanKerjaController');
});

// mulai
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/profile', function(){
    //
})->middleware(CheckAge::class);

Route::get('admin/profile', function(){
    //
})->middleware('auth');

Route::get('/', function(){
    //
})->middleware('first', 'second');

Route::get('/', function(){
    //
})->middleware('web');

Route::group(['middleware' => ['web']], function(){
    //
});

Route::middleware(['web', 'subscribed'])->group(function(){
    //
});

//role
Route::put('post/{id}', function ($id){
    //
})->middleware('role:editor');