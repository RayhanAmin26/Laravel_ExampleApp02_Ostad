<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demo1(){
        //Store data in Session
        session(key:'user_email',default:'rayhananan20012gmail.com');
        return "Hellow Rayhan Strore data in session seccessfully";
    }

    function demo2(){

        //function Retrive
        session(key:'user_email',default:'default');
        return "Hellow Rayhan";
    }
    
}
