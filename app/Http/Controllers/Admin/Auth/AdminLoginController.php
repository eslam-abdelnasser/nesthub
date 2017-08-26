<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth ;
class AdminLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:admin');
    }


    public function loginForm(){

        return view('admin.auth.login');
    }


    public function loginPost(Request $request){

        // validate form

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'

        ]);

        // attempt to log user in

        if (Auth::guard('admin')->attempt(['email'=> $request->email,'password'=>$request->password], $request->remember)){
            //if successful , then redirect the user to the intended location
            return redirect()->route('admin.dashboard');

        }
        // if unsuccessful then redirect back to login form again

        return redirect()->back()->withInput($request->only('email','remember'));

    }


}
