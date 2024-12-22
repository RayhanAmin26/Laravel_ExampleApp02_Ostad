<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demo1(Request $request){
        //Store data in Session
        $request->session()->put('user_email','rayhan@gmail.com');
        return "Hellow Rayhan Strore data in session seccessfully";
    }

    function demo2(Request $request){

        //function Retrive
        $value=$request->session()->get('user_email','0');
        return $value;
    }
       

    
    function demo3(Request $request){

        //Flash session
       $request->session()->flush();
       return "Hellow Rayhan Strore data in session seccessfully";
    }
    
}
