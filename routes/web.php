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

Route::get('/dropdown', function(){
    return view('dropdown');
});
Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

Route::get('/','App\Http\Controllers\StoreController@verify')->middleware(['auth.shopify']);
// Route::get('/', function () {
//     $user = auth::user();
//     return view('index')->with('user', $user);
// })->middleware(['auth.shopify'])->name('home');

Route::POST('/addscripttag',[ScripttagController::class,'addscript'])->name('addscript');

Route::GET('/allscripttags',[ScripttagController::class,'allscripttags'])->name('allscripttags');
//-------------------Change Appearance --------------//
Route::post('/changeappstatus','App\Http\Controllers\SettingController@changeappstatus')->name('changeappstatus');
//-------------------App Status --------------//
Route::POST('/changeapearance','App\Http\Controllers\SettingController@changeapearance')->middleware(['auth.shopify'])->name('changeapearance');

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
        Store Routess
===============================================================================*/
Route::get('/appsettingsdata','App\Http\Controllers\ScripttagController@appsettingsdata')->name('appsettingsdata');
Route::post('/getdetails','App\Http\Controllers\SettingController@getdetails')->name('getdetails');

Route::post('/proxyrequest', 'App\Http\Controllers\SettingController@proxyrequest')->middleware(['auth.proxy'])->name('proxyrequest');
Route::post('/proxyrequest/newsletter', 'App\Http\Controllers\SettingController@proxynewsletter')->middleware(['auth.proxy'])->name('proxynewsletter');
Route::post('/testtt','App\Http\Controllers\SettingController@testtt')->name('testtt');

/*================================================================================
        News Letter Routes
===============================================================================*/
Route::get('/addnewsletter','App\Http\Controllers\NewsletterController@addnewsletter')->name('addnewsletter');

