<?php

use App\Http\Controllers\Sec3AddInd;
use App\Http\Controllers\Sec3Confirm;
use App\Http\Controllers\Sec3SaveData;
use App\Http\Controllers\Sec3Search;
use App\Http\Controllers\Sec4AddInd;
use App\Http\Controllers\Sec4Confirm;
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
// Route::get('/sec3confirm', function () {
//     return view('sec3.sec3confirm');
// });

// Route::get('/sec4savedata', function () {
//     return view('sec4.savedata');
// });

// Route::get('/sec4addind', function () {
//     return view('sec4.addind');
// });

// Route::get('/sec4search', function () {
//     return view('sec4.sec4search');
// });

// Route::get('/content', [ObjectGroup1::class, 'index']);
// Route::get('/content/{id}', [Kr::class, 'index']);
Route::post('/sec3/add', [Sec3AddInd::class, 'addInd'])->name('sec3addInd');
Route::post('/sec4/add', [Sec4AddInd::class, 'addInd'])->name('sec4addInd');
Route::post('/sec3/update', [Sec3AddInd::class, 'updateInd'])->name('sec3updateInd');
Route::post('/sec3/updatedata', [Sec3SaveData::class, 'updateData'])->name('updateDataSec3');
Route::post('/sec4/updatedata', [Sec4SaveData::class, 'updateData'])->name('updateDataSec4');
Route::post('/searchresultmountsec3', [Sec3Search::class, 'resultShowMount'])->name('resultsearchmountsec3');
Route::post('/showresultmountsec3', [Sec3SaveData::class, 'resultShowMount'])->name('resultshowmountsec3');
Route::post('/showresultmountsec4', [Sec4SaveData::class, 'resultShowMount'])->name('resultshowmountsec4');
Route::get('/sec4dashboard', function () {
    return view('sec4.sec4dashboard');
});
// Route::get('/sec4confirm', function () {
//     return view('sec4.sec4confirm');
// });

Route::post('/index', function () {
    return view('index');
})->name('/');
