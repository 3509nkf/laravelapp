<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
use Illuminate\Http\Requests\HelloRequest;
 


class HelloController extends Controller 
{

      
     public function index(Request $request){
            return view('hello.index', ['msg'=>'フォームを入力して下さい。']);
    }
 
     public function post(HelloRequest $request) {
           return view('hello.index',['msg'=>'正しく入力されました!']);
      }

    
}