<?php

use App\Http\Controllers\ScripttagController;
use Illuminate\Support\Facades\Route;
use Osiset\ShopifyApp\Messaging\Jobs\ScripttagInstaller;
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

Route::get('/','App\Http\Controllers\StoreController@verify')->middleware(['auth.shopify']);
// Route::get('/', function () {
//     $user = auth::user();
//     return view('index')->with('user', $user);
// })->middleware(['auth.shopify'])->name('home');

Route::POST('/addscripttag',[ScripttagController::class,'addscript'])->name('addscript');

Route::GET('/allscripttags',[ScripttagController::class,'allscripttags'])->name('allscripttags');

//-------------------App Status --------------//
Route::POST('/changeapearance','App\Http\Controllers\SettingController@changeapearance')->middleware(['auth.shopify'])->name('changeapearance');
//-------------------Change Appearance --------------//
Route::post('/changeappstatus','App\Http\Controllers\SettingController@changeappstatus')->name('changeappstatus');
//-------------------Change Chat Option Status --------------//
Route::post('/changechatoptstatus','App\Http\Controllers\SettingController@changechatoptstatus')->name('changechatoptstatus');
//-------------------Chat Option Data --------------//
Route::post('/chatoptiondatat','App\Http\Controllers\SettingController@chatoptiondata')->name('chatoptiondatat');
Route::get('/countchatavavtor','App\Http\Controllers\SettingController@countchatavavtor')->name('countchatavavtor');
//-------------------Questoin Data --------------//
Route::post('/questionsdaatta','App\Http\Controllers\SettingController@questionsdaatta')->name('questionsdaatta');
//-----------Store form required data ----//
Route::post('/requiredformdata','App\Http\Controllers\SettingController@requiredformdata')->name('requiredformdata');

Route::get('/countquestions','App\Http\Controllers\SettingController@countquestions')->name('countquestions');
//-------------------Enable Disable Contact us option --------------//
Route::post('/changecontactusoptions','App\Http\Controllers\SettingController@changecontactusoptions')->name('changecontactusoptions');
// Route::get("toastr-notification", "App\Http\Controllers\MessageNotificationController@showToastrMessages");

/*================================================================================
        Store Routes
===============================================================================*/
Route::get('/appsettingsdata','App\Http\Controllers\ScripttagController@appsettingsdata')->name('appsettingsdata');

