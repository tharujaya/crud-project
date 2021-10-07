<?php

namespace App\Http\Controllers\User;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegistrationController extends Controller
{
    //
    public function registration(){
        
        return view('dashboard.auth.registration');

    }
    public function process(Request $request){
       $user = new User();
       $user->name=$request->name;
       $user->email=$request->email;
       $user->mobileNo=$request->mobileNo;
       if($request->confirmPassword==$request->password){
        $user->password=Hash::make($request->password);
       }else{
        return redirect()->route('register')->with('danger', 'Password dose not match');
       }
       $user->save();

       $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            
        } 

       /* return redirect()->route('')->with('success', 'Completed'); */

    }
}