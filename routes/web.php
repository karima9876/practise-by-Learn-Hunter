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
    //dd(app());
    return view('welcome');
});
//Route::get('/', function () {
////    cache()->put('hello','world');
////    dd(cache()->get('hello'));
//      Cache::put('hello','world');
//      dd(cache()->get('hello'));
//});
Route::get('/test', function () {
    app()->make('first_service_helper');
});
Route::get('/test-one', function () {
    return "Test";
});
Route::get('/test-two', function () {
    //Hunter::test();
    Hunter::test_one();
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
