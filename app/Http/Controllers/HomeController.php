<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    
    public function index(Request $req)
    {
        $action=$req->action;
        if($action==1)
        {
            $username = $req->username;
            $password = $req->password;
            $admin = DB::table('admins')->first();
            $username_db=$admin->username;
            $password_db=$admin->password;
            $action_db=$admin->role_id;

            if($username== $username_db && $password==$password_db && $action== $action_db)
            {
                 return view('registration.table');
            } 
            else{
                 return redirect('/')->with('error', 'User Type not matched');
            } 
        }
       
        elseif ($action==2) 
        {
            $username = $req->username;
            $password = $req->password;
            $user = DB::table('employees')->first();
            $username_db=$user->username;
            $password_db=$user->password;
            $id=$user->id;

            if($username== $username_db && $password==$password_db)
            {
                
                //return view("employee_site.profile",['payitems'=> $payitem ]);
                 //return view('employee_site.profile');
                return redirect('/employee/'.$id);
              
            }
            else{
                 return redirect('/')->with('error', 'User Type not matched');
            } 
        }


        else {
             return redirect('/')->with('error', 'Invalid Access');
        }
    }

    public function logout()
    {
        
    }
    
}
