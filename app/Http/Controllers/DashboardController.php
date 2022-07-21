<?php

namespace App\Http\Controllers;
use App\Models\orderlist;
use App\Models\doctor;
use App\Models\Authentication;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function mlist(){

        $data= orderlist:: all();
        return view('dashboard.order',['mlists'=>$data]);
    }


    function dlists(){

        $data= doctor:: all();
        return view('dashboard.doctor',['dlists'=>$data]);
    }
    function cpassword(){
    return view('dashboard.cpassword');
    }

    function search(Request $req)
    {
        return $req->input();
    }
}
