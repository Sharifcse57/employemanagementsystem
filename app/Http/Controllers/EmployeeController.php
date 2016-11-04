<?php

namespace App\Http\Controllers;
use App\Employee as Employee;
use App\Designation as Designation;
use App\Paygrade as Paygrade;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $designation=Designation::all();
        $paygrade=Paygrade::all();
        return view("registration.register",['designation'=> $designation,'paygrade'=> $paygrade]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $employee=new Employee();
        $employee->username= $request->username;
        $employee->password= $request->password;
        $employee->fullname= $request->fname;
        $employee->designation_id= $request->designation;
        $employee->email= $request->email;
        $employee->paygrade_id= $request->paygrade;
        $employee->joindate= $request->date;


        $employee->save();
        return redirect('/registration')->with('status', 'User inserted!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
