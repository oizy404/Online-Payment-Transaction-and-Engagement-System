<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssociateController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InboxClientsController;
use App\Http\Controllers\InboxAssociatesController;
use App\Http\Controllers\SentAssociatesController;
use App\Http\Controllers\SentClientsController;

use App\Model\Associate;
use App\Model\MessageAssociate;
use App\Model\Client;
use App\Model\MessageClient;
use App\Model\Message;
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
    return view('layout.master');
});
Route::view('/', 'pages.login')->name('login');
Route::view('/admin-home', 'pages.admin-home')->name('admin-home');

Route::resource('clients', ClientController::class);
Route::resource('associates', AssociateController::class);

Route::resource('inbox_message_clients', InboxAssociatesController::class);
Route::resource('message_associates', SentAssociatesController::class);

Route::resource('inbox_message_associates', InboxClientsController::class);
Route::resource('message_clients', SentClientsController::class);
