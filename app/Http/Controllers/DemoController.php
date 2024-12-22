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

    function demo4(Request $request){
        //laravel logging
        Log::error($request->url());
        return "Logging eccessfully";
    }

    function demo5(Request $request){
        $num1=10;
        $num2=20;
        // dd($num1); er por theke r output show korbena (code execution stop hbe)
        $sum=$num1+$num2;
        return $sum;
        
    
    }


    
    function demo6(Request $request){
        try{
            $num1=10;
            $num2=20;
            $sum=$num1{$num2};
            return $sum;
        
    
    } catch (Exception $exception){
         Log::error($exception);
        return "Fail";
    }
  }
}
