<?php

namespace App\Http\Controllers;
use App\Employee as Employee;
use App\Designation as Designation;
use App\Paygrade as Paygrade;
use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
{

    public function index()
    {
        $employee = Employee::orderBy('id', 'DESC')->get();
//        $employee=Employee::all();
//        $employee->orderBy('id', 'DESC');
//        $employee = DB::table('employees')->get()
//
//        ->orderBy('employees.id','ASC');


        return view("registration.table",['employee'=> $employee]);
    }


    public function create()
    {
        $designation=Designation::all();
        $paygrade=Paygrade::all();
        return view("registration.employee",['designation'=> $designation,'paygrade'=> $paygrade]);
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
        $employee->active=0;


        $employee->save();
        return redirect('/employee')->with('status', 'employee inserted!');

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
