<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function addnewsletter(Request $request){
        
        $shop = auth()->user();
        $snippet = asset('scripttags/subscribe.js');
        // Data to pass to our rest api request
        $array = array('script_tag' => array('event' => 'onload', 'src' => $snippet));

        $tagapi = $shop->api()->rest('POST', '/admin/api/2020-04/script_tags.json', $array);

        return response('tag added');
    }
}
