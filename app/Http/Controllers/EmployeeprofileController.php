<?php

namespace App\Http\Controllers;
use App\Employee as Employee;
use Illuminate\Http\Request;
use App\Leave as Leave;
use App\Timesheet as Timesheet;
use Auth;
use DB;
class EmployeeprofileController extends Controller
{
    
    public function index()
    {
        
    }

    
    public function create()
    {
        
    }
    public function leave()
    {
          $employee=Auth::guard("employee")->user();
          $id=$employee->id;
          return view("employee_site.leave",['id'=> $id]);  
    }
    public function leavestatus()
    {
         $employee=Auth::guard("employee")->user();
         $id=$employee->id;
         $leave = DB::table('leaves')->where('employee_id', '=', $id)->get();

         return view("employee_site.leavestatus",['leave'=> $leave,'id'=>$id]);
    }

     public function salaryinfo()
    {
           $employee=Auth::guard("employee")->user();
           $id=$employee->id;
           $grade_id=$employee->paygrade_id;
           $designation_id=$employee->designation_id;
           $grade = DB::table('paygrades')->where('id', $grade_id)->get();
           $designation = DB::table('designations')->where('id', $designation_id)->get();
           $payitems = DB::table('salaries')
           ->join('payitems', 'salaries.payitem_id', '=', 'payitems.id')
           ->where('salaries.paygrade_id', $grade_id)
           ->select('salaries.amount', 'payitems.payitem')
           ->get();
          // dd($payitems);

           return view("employee_site.salaryinfo",['id'=>$id,'grade'=> $grade,'designation'=> $designation,'payitems'=> $payitems]);
    }

     public function paymenthistory()
    {
          $employee=Auth::guard("employee")->user();
          $id=$employee->id;
          return view("employee_site.paymenthistory");
    }

     public function salaryhistory()
    {
          $employee=Auth::guard("employee")->user();
          $id=$employee->id;
          $payhistory = DB::table('paymenthistories')
          ->where('paymenthistories.employee_id', $id)
          ->get();
          return view("employee_site.salarythistory",['id'=>$id,'payhistory'=>$payhistory]);
    }
    public function checkin($id)
    {
        return view("employee_site.checkin")->with('id', $id);
    }

    public function timesheet(Request $request)
    {
          
        $employee=Auth::guard("employee")->user();
        $id=$employee->id;
        date_default_timezone_set("Asia/Dhaka");
        $date= date('y-m-d');
        $time = date('h:i:s');


        $duplicatedate = DB::table('timesheets')
        ->where('entry_date', $date)
        ->where('employee_id',  $id)
        ->select('entry_date')
        ->first();

        if($duplicatedate){
            
            return redirect('/checkin/{{$id}}')->with('status', 'You have already given todays attendance!');
        }else{

          $attendance =new Timesheet();
          $attendance->employee_id= $request->emp_id;   
          $attendance->description= $request->description;   
          $attendance->entry_date=$date;  
          $attendance->entry_time= $time;  
          $attendance->save();
          return redirect('/checkin/{{$id}}')->with('status', 'Attendance submitted');
        }     

    }
    public function store(Request $request)
    {
        $leave=new Leave();

        $from=$request->leave_from;
        $to=$request->leave_to;
        $formate_from= date('Y-m-d', strtotime($from)); 
        $formate_to= date('Y-m-d', strtotime($to)); 
        $leave->employee_id=$request->id;  
        $leave->leave_form= $formate_from;
        $leave->leave_to=  $formate_to;
        $leave->descrtiption= e($request->descrtiption);
        $leave->status= 0;
        $leave->save();
         return redirect('/leave')->with('status', 'leave application submitted ');
    }

    
    public function show()
    {
         $employee=Auth::guard("employee")->user();
         $id=$employee->id;
         $grade_id=$employee->paygrade_id;
         $designation_id=$employee->designation_id;
         $grade = DB::table('paygrades')->where('id', $grade_id)->get();
         $designation = DB::table('designations')->where('id', $designation_id)->get();


      return view("employee_site.profile",['user'=> $employee,'id'=> $id,'grade'=> $grade,'designation'=> $designation]);
    }

    
    public function edit($id)
    {
         $employee=Auth::guard("employee")->user();
         $id=$employee->id;
         $emp = DB::table('employees')->where('id', '=', $id)->get();
         return view("employee_site.edit",['emp'=>$emp,'id'=> $id]);

        // dd($emp);
    }

    
    public function update(Request $request, $id)
    {
             $employee=Employee::find($id);

             if($request->image=="")
             { 
                if($request->password==""){
                  
                         $employee->fullname= $request->fullname;
                         $employee->email= $request->email;
                         $employee->phone= $request->phone;
                         $employee->address= $request->address;
                         $employee->username= $request->username;
                         $employee->save();

                }else{
                         $employee->fullname= $request->fullname;
                         $employee->email= $request->email;
                         $employee->phone= $request->phone;
                         $employee->address= $request->address;
                         $employee->username= $request->username;
                         $employee->password= bcrypt($request->password);
                         $employee->save();   
                     }
              }
         else{

             if($request->password==""){

             $employee->fullname= $request->fullname;
             $employee->email= $request->email;
             $employee->phone= $request->phone;
             $employee->address= $request->address;
             $employee->username= $request->username;
             $imageName = time().'.'.$request->image->getClientOriginalExtension();
             $request->image->move(public_path('images'), $imageName);
             $employee->images=$imageName;
             $employee->save();

             }else{

                   $employee->fullname= $request->fullname;
                   $employee->email= $request->email;
                   $employee->phone= $request->phone;
                   $employee->address= $request->address;
                   $employee->username= $request->username;
                   $employee->password= bcrypt($request->password);
                   $imageName = time().'.'.$request->image->getClientOriginalExtension();
                   $request->image->move(public_path('images'), $imageName);
                   $employee->images=$imageName;
                   $employee->save();

             }  
         }

     return redirect('/profile'); 
    }
   
    public function destroy($id)
    {
        
    }
}
