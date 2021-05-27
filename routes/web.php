<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AssociateController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientsMessageController;
use App\Http\Controllers\AssociatesMessageController;

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

Route::get('/', function (){
    return view("pages.front");
})->name('front')->middleware('ifLoggedIn');

Route::post("authenticate", [LoginController::class, "login"])->name("login"); 

// Route::middleware(['ifLoggedOut'])->group(function () {
    
    Route::get('/admin-home', function(){
        return view("pages.admin-home");
    })->name('admin-home');

    Route::resource('clients', ClientController::class);
    Route::resource('associates', AssociateController::class);

// });    

//Routes for the Asssociates
    Route::get('/associates-message', [AssociatesMessageController::class, "index"])->name("associates-message");
    Route::post('/create-msg-assoc', [AssociatesMessageController::class, "insert"])->name('create-msg-assoc');
    Route::get('msg-assoc/{id}', [AssociatesMessageController::class, "show"])->name('msg-assoc');
    Route::get('delete/{id}', [AssociatesMessageController::class, "delete"])->name('delete');
    Route::get('associates-inbox', [AssociatesMessageController::class, "inbox"])->name('associates-inbox');
    Route::get('inbox-assoc/{id}', [AssociatesMessageController::class, "show_inbox"])->name('inbox-assoc');

//Routes for the Clients
    Route::get('/clients-message', [ClientsMessageController::class, "index"])->name("clients-message");
    Route::post('/create-msg-clients', [ClientsMessageController::class, "insert"])->name('create-msg-clients');
    Route::get('msg-clients/{id}', [ClientsMessageController::class, "show"])->name('msg-clients');
    Route::get('delete/{id}', [ClientsMessageController::class, "delete"])->name('delete');
    Route::get('clients-inbox', [ClientsMessageController::class, "inbox"])->name('clients-inbox');
    Route::get('inbox-clients/{id}', [ClientsMessageController::class, "show_inbox"])->name('inbox-clients');

Route::get('logout', function (){
    Auth::logout();
    return redirect()->route('front');
});

// Route::get('/test', function(){
//         $password ="nimda";
//         echo Hash::make($password);
//     });




    
