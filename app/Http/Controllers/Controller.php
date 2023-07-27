<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function index(){
        return view('index');
    }

    function login(){
        
        $validator = Validator::make(request()->all(), [
            'email' => 'required|email|max:250',
            'password' => 'required',
        ]);
 
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        if(request()->input('email')=='admin@test.com' && request()->input('password')=='test@123'){
            return redirect()->back()->with('success','Login successfully');
        }else{
            return redirect()->back()->with('error','Email Id or Password not match');
        }
    }
}
