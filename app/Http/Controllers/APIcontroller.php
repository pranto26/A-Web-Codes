<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use Illuminate\Support\Facades\Validator;


class APIcontroller extends Controller
{
    function get($type){
        $data=news::where ('type',$type)->get();
        return response()->json($data);
    }
}

function create(Request $req){
    $validator = Validator::make($req->all(),[
        "title"=>"required",
        "description"=>"required",
        "postdate"=>"required",
        "type"=>"required",
        "createdby"=>"required"
    ]);
    if($validator->fails()){
        return response()->json($validator->errors());
    }
    $data=new news();
    $data->title=$req->title;
    $data->description=$req->description;
    $data->postdate=$req->postdate;
    $data->type=$req->type;
    $data->createdby=$req->createdby;
    $data->save();
    return response()->json(
        [
            "msg"=>"Added Successfully",
            "data"=>$data        
        ]
    );

    function update(Request $req,$id){
        $validator = Validator::make($req->all(),[
            "title"=>"required",
            "description"=>"required",
            "postdate"=>"required",
            "type"=>"required",
            "createdby"=>"required"
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }
        $data=News::where('id',$id)->first();
        $data->title=$req->title;
        $data->description=$req->description;
        $data->postdate=$req->postdate;
        $data->type=$req->type;
        $data->createdby=$req->createdby;
        $data->update();
        return response()->json(
            [
                "msg"=>"Updated Successfully",
                "data"=>$data        
            ]
        );
         
    }
}
