<?php

use App\Http\Controllers\Sec3AddInd;
use App\Http\Controllers\Sec3CONFIRM;
use App\Http\Controllers\Sec3SaveData;
use App\Http\Controllers\Sec3Search;
use App\Http\Controllers\Sec4AddInd;
use App\Http\Controllers\Sec4SaveData;
use App\Http\Controllers\Sec4Search;
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
    return view('login');
});

// Route::post('/login', [LoginController::class, 'index'])->name('login');

// Route::post('/Valid', [LoginController::class,'index'],function ($argv){

// } )->name('valid');

// Route::get('/sec3savedata',[Sec3SaveData::class,'index']);
// Route::get('/sec4savedata',[Sec4SaveData::class,'index']);

// Route::get('/sec3savedata', function () {
//     return view('sec3.savedata');
// });

Route::get('/sec3savedata', [Sec3SaveData::class, 'index']);
Route::get('/sec3addind', [Sec3AddInd::class, 'index']);
Route::get('/sec3search', [Sec3Search::class, 'index']);
Route::get('/sec3confirm', [Sec3Confirm::class, 'index']);

Route::get('/sec4savedata', [Sec4SaveData::class, 'index']);
Route::get('/sec4addind', [Sec4AddInd::class, 'index']);
Route::get('/sec4search', [Sec4Search::class, 'index']);
Route::get('/sec4confirm', [Sec4Confirm::class, 'index']);

// Route::get('/sec3addind', function () {
//     return view('sec3.addind');
// });
// Route::get('/sec3search', function () {
//     return view('sec3.sec3search');
// });

Route::get('/sec3dashboard', function () {
    return view('sec3.sec3dashboard');
});
Route::get('/sec3confirm', function () {
    return view('sec3.sec3confirm');
});

// Route::get('/sec4savedata', function () {
//     return view('sec4.savedata');
// });

// Route::get('/sec4addind', function () {
//     return view('sec4.addind');
// });

// Route::get('/sec4search', function () {
//     return view('sec4.sec4search');
// });
Route::get('/sec4dashboard', function () {
    return view('sec4.sec4dashboard');
});
Route::get('/sec4confirm', function () {
    return view('sec4.sec4confirm');
});

Route::post('/index', function () {
    return view('index');
})->name('/');