<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Sec3SaveData;
use App\Http\Controllers\Sec4SaveData;
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
    return view('login');
});

// Route::post('/login', [LoginController::class, 'index'])->name('login');


// Route::post('/Valid', [LoginController::class,'index'],function ($argv){

// } )->name('valid');

// Route::get('/sec3savedata',[Sec3SaveData::class,'index']);
// Route::get('/sec4savedata',[Sec4SaveData::class,'index']);

Route::get('/sec3savedata', function () {
    return view('sec3.savedata');
});

Route::get('/sec3addind', function () {
    return view('sec3.addind');
});
Route::get('/sec3search', function () {
    return view('sec3.sec3search');
});

Route::get('/sec4savedata', function () {
    return view('sec4.savedata');
});

Route::get('/sec4addind', function () {
    return view('sec4.addind');
});

Route::get('/sec4search', function () {
    return view('sec4.sec4search');
});


Route::post('/index', function () {
    return view('index');
})->name('/');
