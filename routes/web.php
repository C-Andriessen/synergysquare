<?php

use App\Http\Controllers\MollieController;
use App\Http\Controllers\UserCodeController;
use App\Mail\CodeEmail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function ()
{
    return view('home');
})->name('home');
Route::get('/invest/', function ()
{
    return view('invest.home');
})->name('invest.home');

Route::get('/testmail', function ()
{
    $code = 'test';
    Mail::to(request()->user())->send(new CodeEmail($code));
});

Route::get('/startup/', function ()
{
    return view('startup.home');
})->name('startup.home');

Route::get('/dashboard', function ()
{
    return view('dashboard');
})->middleware(['auth', 'verified', 'code'])->name('dashboard');

Route::group(['as' => 'code.', 'prefix' => 'code', 'middleware' => ['auth', 'verified']], function ()
{
    Route::get('', [UserCodeController::class, 'index'])->name('index');
    Route::get('request', [UserCodeController::class, 'request'])->name('request');
    Route::post('verify', [UserCodeController::class, 'verify'])->name('verify');
});
require __DIR__ . '/auth.php';
