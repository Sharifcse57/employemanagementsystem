<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
class LoginController extends Controller
{
    public function username()
{
    return 'username';
}
    public function index(Request $req)
    {
    	
        $action=$req->action;
        if($action==1)
        {
            $username = $req->username;
            $password = $req->password; 

            if(Auth::guard('admin')->attempt(['username'=>$username,'password'=>$password]))
            {
                return redirect("/register");

            }
        }
       
        elseif ($action==2) 
        {
            $username = $req->username;
            $password = $req->password;
            if(Auth::guard('employee')->attempt(['username'=>$username,'password'=>$password,'active'=>1]))
            {
                return redirect("/profile");

            }
        

        }

    }

 public function logout_employee () {
    if(Auth::guard('employee')->check())
    {
           Auth::guard('employee')->logout();
    }
    
 
    return redirect("/");
}
public function logout_admin () {
    if(Auth::guard('admin')->check())
    {
           Auth::guard('admin')->logout();
    }
    
 
    return redirect("/");
}

}
