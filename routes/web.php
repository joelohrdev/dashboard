<?php

use App\Http\Controllers\ServerController;
use App\Models\Server;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/servers', function () {
    return view('server.index');
})->name('server.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/servers/{server:slug}', [
    ServerController::class, 'show'
])->name('server.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/domains', function () {
    return view('domain.index');
})->name('domain.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/clients', function () {
    return view('client.index');
})->name('client.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/contacts', function () {
    return view('contact.index');
})->name('contact.index');
