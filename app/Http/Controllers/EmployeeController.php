<?php

namespace App\Http\Controllers;
use App\Employee as Employee;
use App\Designation as Designation;
use App\Paygrade as Paygrade;
use App\Admin as Admin;
use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
{

    public function index()
    {
       
        $employee = DB::table('employees')
            ->join('designations', 'employees.designation_id', '=', 'designations.id')
            ->join('paygrades', 'employees.paygrade_id', '=', 'paygrades.id')
            ->select('employees.*', 'designations.designation', 'paygrades.paygrade_name','paygrades.basic')
            ->where('active', 1)
            ->orderBy('employees.id','DESC')
            ->paginate(5);
            $designation=Designation::all();
            $paygrade=Paygrade::all();
            return view("registration.table",['employee'=> $employee,'designation'=> $designation,'paygrade'=> $paygrade]);
    }


    public function search(Request $request)
    {
            $abc = $request->search;
            $searchemployee = DB::table('employees')
            ->where('fullname', 'LIKE', "%$abc%")
            ->orWhere('id', 'LIKE', "%$abc%")
            ->get();
            return view("registration.table",['searchemployee'=> $searchemployee]);
    }


    public function leavesearch(Request $request)
    {
            $abc = $request->status;
            $leave = DB::table('leaves')
            ->where('status', $abc)
            ->paginate(15);
             return view('leave.leavehistory',['searchleave'=>$leave]);
            // dd($leave);
          // return view("registration.table",['searchemployee'=> $searchemployee]);
    }


    public function create()
    {
        $designation=Designation::all();
        $paygrade=Paygrade::all();
        return view("registration.table",['designation'=> $designation,'paygrade'=> $paygrade]);
    }


    public function add_admin(Request $request)
        {
            $admin=new Admin();
            $admin->username= $request->username;
            $admin->password= bcrypt($request->password);
            $admin->save();
            return redirect('/register')->with('status', 'Admin inserted!');
        }

    public function store(Request $request)
    {

        $getemail= $request->email;
        $useremail = DB::table('employees')
        ->where('email', $getemail)
        ->select('email')
        ->first();

        if($useremail){
            echo "this email is already exist";
        }
        else{

        $employee=new Employee();
        $employee->username= $request->username;
        $employee->password= bcrypt($request->password);
        $employee->fullname= $request->fname;
        $employee->designation_id= $request->designation;
        $employee->email= $request->email;
        $employee->paygrade_id= $request->paygrade;
        $employee->joindate= $request->date;
        $employee->phone= $request->num;
        $employee->address= $request->address;
        $employee->active=1;
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $employee->images=$imageName;
        $employee->save();
        return redirect('/register')->with('status', 'employee inserted!');
        }

    }
    public function show($id,$basic,$paygrade)
    {
          $employee = DB::table('employees')
          ->where('employees.id', '=',$id) 
          ->get();
           $paygrade = DB::table('paygrades')
          ->where('paygrades.basic', '=',$basic)
          ->join('designations', 'paygrades.designation_id', '=', 'designations.id')
          ->select('paygrades.*', 'designations.designation')
          ->get();
     return view("registration.profile",['employee'=> $employee,'basic'=> $basic,'paygrade'=>$paygrade])->with('data','some data here');
    }

    public function searchshow($id,$paygrade)
    {
           $searchemployee = DB::table('employees')
          ->where('employees.id', '=',$id) 
          ->get();
          $searchpaygrade = DB::table('paygrades')
          ->where('paygrades.id', '=',$paygrade)
          ->get();
          return view("registration.profile",['searchemployee'=> $searchemployee,'searchpaygrade'=>$searchpaygrade]);
    }


    public function edit($id)
    {
        $emp = DB::table('employees')->where('id', '=', $id)->get();
        $designation=Designation::all();
        $paygrade = DB::table('paygrades')
        ->where('paygrades.status', '=', 0)
        ->get(); 
        return view("registration.edit",['emp'=>$emp,'designation'=> $designation,'paygrade'=> $paygrade]);
    }


    public function update(Request $request, $id)
    {
         $employee=Employee::find($id);
         if($request->image=="")
         {
             $employee->fullname= $request->fname;
             $employee->email= $request->email;
             $employee->designation_id= $request->designation;
             $employee->paygrade_id= $request->paygrade;
             $employee->save();
        

         }else{

             $employee->fullname= $request->fname;
             $employee->email= $request->email;
             $employee->designation_id= $request->designation;
             $employee->paygrade_id= $request->paygrade;
             $imageName = time().'.'.$request->image->getClientOriginalExtension();
             $request->image->move(public_path('images'), $imageName);
             $employee->images=$imageName;
             $employee->save();

         }

          return redirect('/register')->with('status', 'Employee  updated!');
    }

    public function deactivate()
    {
        $employee = DB::table('employees')
            ->join('designations', 'employees.designation_id', '=', 'designations.id')
            ->join('paygrades', 'employees.paygrade_id', '=', 'paygrades.id')
            ->select('employees.*', 'designations.designation', 'paygrades.paygrade_name')
            ->where('active', 1)
            ->orderBy('employees.id','DESC')
            ->paginate(5);

             return view("registration.deactivate",['employee'=> $employee]);

    }

    public function employee_edit($id)
    {
         echo $id;
    }
}
