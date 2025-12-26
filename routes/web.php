<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// index page Routes
Route::get("/",'pagesController@home');



Route::prefix('admin')->namespace('admin')->group(function(){

    // Dashboard 
    Route::get("dashboard",'pagesControllers@dashboard')->name('admin.dashboard');

    // Party Routes
    Route::get("/addParty",'pagesControllers@add_Party')->name('admin.addParty');

    Route::post('/addParty','pagesControllers@createParty')->name('createparty');
    Route::get("/manageParty",'pagesControllers@manage_Party')->name('admin.manageParty');
    Route::get("/edit-party/{id}",'pagesControllers@edit_Party')->name('admin.editparty');
    Route::post('/updateParty/{id}','pagesControllers@updateParty')->name('updateParty');
    Route::get('/deleteParty/{id}','pagesControllers@deleteParty')->name('admin.deleteParty');

// Gst Billing Routes
    Route::get("/addbill",'pagesControllers@add_bill')->name('admin.add-gst-bill');
// for creation of bill
Route::post("/create-bill",'pagesControllers@create_bill')->name('admin.createbill');

    Route::get("/manage-addbill",'pagesControllers@manage_gst_bill')->name('admin.manage-gst-bill');
    Route::get("/print-gst-bill",'pagesControllers@print_gst_bill')->name('admin.print-gst-bill');
    Route::get("/vendor",'pagesControllers@vendor')->name('admin.vendor');

});


    // for soft Deleting Record
    Route::get('/delete/{table}{id}','pagesController@deletesoft')->name('admin.deletesoft');
Route::resource('vendor','vendorController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
