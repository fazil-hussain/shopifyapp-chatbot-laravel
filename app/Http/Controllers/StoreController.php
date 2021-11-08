<?php

namespace App\Http\Controllers;
use App\Models\Appsetting;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function verify(){
    // dd(json_decode(config('appdefaultsettings.chatopts')));

        $authuser = auth()->user();

    $users = Appsetting::where('store_name', '=', $authuser->name)->first();
       if($users)
       {
           return view('index')->with('user', $users);
       }
       else{
          $appsetting = new Appsetting();
          $appsetting->store_name = $authuser->name;
          $appsetting->save();
         return view('index')->with('user', $authuser->name);

       }
    }
}
