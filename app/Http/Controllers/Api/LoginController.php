<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function process(Request $request){
        
        $credentials = $request->only('email', 'password');
         if (Auth::attempt($credentials)) {
             return["result"=>"User loged in"];
         }else{
            return ["result"=>"email or password dose not match"];
         }
        }

        public function logout(){
            Auth::logout();
            return["result"=>"User loged out"];
    
        }
}