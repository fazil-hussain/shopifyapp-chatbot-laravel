<?php

namespace App\Http\Controllers;
use App\Models\AppSetting;
use DB;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function changeappstatus(Request $request){
    $authuser = auth()->user();
    $users = Appsetting::where('store_name', '=', $authuser->name)->first();

        if($request->status == 1){
            $snippet = asset('scripttags/boot.js');
            // Data to pass to our rest api request
            $array = array('script_tag' => array('event' => 'onload', 'src' => $snippet));
            $tagapi = $authuser->api()->rest('POST', '/admin/api/2020-04/script_tags.json', $array);
            $tagid = ($tagapi['body']['script_tag'])->id;

            DB::table('appsettings')
            ->where('id', $users->id)
            ->update(['app_script_tag' => $tagid]);
        }
        else{
            $tagapi = $authuser->api()->rest('GET', '/admin/api/2021-10/script_tags.json');
            //  $scriptdata = $tagapi['body']['container']['script_tags'];
            $deltetag = $authuser->api()->rest('DELETE', '/admin/api/2021-10/script_tags/' .$users->app_script_tag. '.json');
            DB::table('appsettings')
            ->where('id', $users->id)
            ->update(['app_script_tag' => ""]);

        }

        DB::table('appsettings')
        ->where('id', $users->id)
        ->update(['appstatus' => $request->status]);
        return response($request->status);

        // session()->flash("success", "This is success message");

    }
    public function changechatoptstatus(Request $request){
        $authuser = auth()->user();
        $users = Appsetting::where('store_name', '=', $authuser->name)->first();
        DB::table('appsettings')
        ->where('id', $users->id)
        ->update(['chatoptstatus' => $request->status]);
        return response($request->status);

        // session()->flash("success", "This is success message");

    }

    public function changeapearance(Request $request){
        $authuser = auth()->user();
        $users = Appsetting::where('store_name', '=', $authuser->name)->first();

        $datta = json_encode($request->all());
        $change = DB::table('appsettings')->where('id' , $users->id)->update(['widgetapearance' => $datta]);
        if($change){
            return response('true');
        }
        else{
            return response('false');
        }
    }
    public function chatoptiondata(Request $request){

        // dd($request->data);
        $authuser = auth()->user();
        $users = Appsetting::where('store_name', '=', $authuser->name)->first();

            $dataa = $request->data;
            $storedata =DB::table('appsettings')
            ->where('id', $users->id)
            ->update(['chatopt' => $dataa]);

            if($storedata){
                return response(1);
            }
            else{
           return response(0);

            }
    }
    public function questionsdaatta(Request $request){
        $authuser = auth()->user();
        $users = Appsetting::where('store_name', '=', $authuser->name)->first();

        $questions = $request->questions;
        $answers = $request->answers;

            $datasaver = [
                'questions' => $questions,
                'answers' => $answers
            ];
            $data = json_encode($datasaver);

            DB::table('appsettings')
            ->where('id', $users->id)
            ->update(['faqs' => $data]);
            return redirect()->back()->with(session()->flash("success", "Questions Updated"));


    }

    public function countquestions(){

        $authuser = auth()->user();
        $users = Appsetting::where('store_name', '=', $authuser->name)->first();

        $chatopt = count(json_decode($users->faqs)->questions);
        return response($chatopt);
    }

    public function changecontactusoptions(Request $request){
        $authuser = auth()->user();
        $users = Appsetting::where('store_name', '=', $authuser->name)->first();
        // dd($request);
        DB::table('appsettings')
        ->where('id', $users->id)
        ->update(['contactusoption' => $request->status]);
        return response($request->status);
    }

    public function countchatavavtor(){

        $authuser = auth()->user();
        $users = Appsetting::where('store_name', '=', $authuser->name)->first();

        $countt = count(json_decode($users->chatopt));
        return response($countt);

    }
    public function requiredformdata(Request $request){
        $data = json_encode($request->all());
        $authuser = auth()->user();
        $users = Appsetting::where('store_name', '=', $authuser->name)->first();

        $formdata  = DB::table('appsettings')
        ->where('id', $users->id)
        ->update(['formsubmitreq' => $data]);
        dd($formdata);
        return response(1);
    }

    
}
