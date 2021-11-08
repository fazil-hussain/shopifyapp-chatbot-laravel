<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScripttagController extends Controller
{
    public function addscript()
    {
        $shop = auth()->user();
        $snippet = asset('scripttags/boot.js');
        // Data to pass to our rest api request
        $array = array('script_tag' => array('event' => 'onload', 'src' => $snippet));

        $tagapi = $shop->api()->rest('POST', '/admin/api/2020-04/script_tags.json', $array);
        return response('tag added');
    }

    public function allscripttags()
    {
        $shop = auth()->user();
        $tagapi = $shop->api()->rest('GET', '/admin/api/2021-10/script_tags.json');
        $scriptdata = $tagapi['body']['container']['script_tags'];
        // dd($scriptdata);
        foreach ($scriptdata as $key => $value) {
            $deltetag = $shop->api()->rest('DELETE', '/admin/api/2021-10/script_tags/' . $value['id'] . '.json');
        }

        return redirect()->back();
    }

    public function appsettingsdata(){
        return  response('hello world');
        // $widgetapearance = json_decode($user->widgetapearance);
        // return response($widgetapearance);
    }


}
