<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    function welcome(){
        return view("public.welcomepage");

}
function about(){
    return view("public.about");
}
}