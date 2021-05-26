<?php

use App\Http\Controllers\Sec3AddInd;
use App\Http\Controllers\Sec3Confirm;
use App\Http\Controllers\Sec3SaveData;
use App\Http\Controllers\Sec3Search;
use App\Http\Controllers\Sec3Dashboard;
use App\Http\Controllers\Sec4AddInd;
use App\Http\Controllers\Sec4Confirm;
use App\Http\Controllers\Sec4SaveData;
use App\Http\Controllers\Sec4Search;
use App\Http\Controllers\Sec4Dashboard;
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



Route::get('/sec3savedata', [Sec3SaveData::class, 'index'])->name('sec3savedata');
Route::get('/sec3addind', [Sec3AddInd::class, 'index'])->name('sec3addind');;
Route::get('/sec3search', [Sec3Search::class, 'index']);
Route::get('/sec3confirm', [Sec3Confirm::class, 'index'])->name('sec3confirm');

Route::get('/sec4savedata', [Sec4SaveData::class, 'index'])->name('sec4savedata');
Route::get('/sec4addind', [Sec4AddInd::class, 'index'])->name('sec4addind');;
Route::get('/sec4search', [Sec4Search::class, 'index']);
Route::get('/sec4confirm', [Sec4Confirm::class, 'index'])->name('sec4confirm');;

Route::get('/sec3dashboard', [Sec3Dashboard::class, 'index']);

Route::get('/sec4dashboard', [Sec4Dashboard::class, 'index']);

Route::post('/sec3/add', [Sec3AddInd::class, 'addInd'])->name('sec3addInd');
Route::post('/sec4/add', [Sec4AddInd::class, 'addInd'])->name('sec4addInd');

Route::post('/sec3/update', [Sec3AddInd::class, 'updateInd'])->name('sec3updateInd');
Route::post('/sec4/update', [Sec4AddInd::class, 'updateInd'])->name('sec4updateInd');

Route::post('/sec3/delete', [Sec3AddInd::class, 'deleteInd'])->name('sec3deleteInd');
Route::post('/sec4/delete', [Sec4AddInd::class, 'deleteInd'])->name('sec4deleteInd');

Route::post('/sec3/updatedata', [Sec3SaveData::class, 'updateData'])->name('updateDataSec3');
Route::post('/sec4/updatedata', [Sec4SaveData::class, 'updateData'])->name('updateDataSec4');

Route::post('/searchresultmountsec3', [Sec3Search::class, 'resultShowMount'])->name('resultsearchmountsec3');
Route::post('/searchresultmountsec4', [Sec4Search::class, 'resultShowMount'])->name('resultsearchmountsec4');

Route::post('/showresultmountsec3', [Sec3SaveData::class, 'resultShowMount'])->name('resultshowmountsec3');
Route::post('/showresultmountsec4', [Sec4SaveData::class, 'resultShowMount'])->name('resultshowmountsec4');

Route::post('/sec3confirm/sec3confirmindicator', [Sec3Confirm::class, 'lockIndicator'])->name('sec3confirmindicator');
Route::post('/sec4confirm/sec4confirmindicator', [Sec4Confirm::class, 'lockIndicator'])->name('sec4confirmindicator');

Route::post('/sec3confirm/sec3unconfirmindicator', [Sec3Confirm::class, 'unlockIndicator'])->name('sec3unconfirmindicator');
Route::post('/sec3confirm/sec4unconfirmindicator', [Sec4Confirm::class, 'unlockIndicator'])->name('sec4unconfirmindicator');

Route::post('/confirmresultmountsec3', [Sec3Confirm::class, 'resultShowMount'])->name('confirmresultmountsec3');
Route::post('/confirmresultmountsec4', [Sec4Confirm::class, 'resultShowMount'])->name('confirmresultmountsec4');

Route::post('/downloadsec3', [Sec3Search::class, 'download'])->name('downloadsec3');
Route::post('/downloadsec4', [Sec4Search::class, 'download'])->name('downloadsec4');

Route::post('/index', function () {
    return view('index');
})->name('/');
