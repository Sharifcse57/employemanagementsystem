<?php

namespace App\Http\Controllers;
use App\Leave as Leave;
use Illuminate\Http\Request;
use DB;
class LeaveController extends Controller
{
    
    public function index()
    {
        $leave = DB::table('leaves')
        ->join('employees', 'leaves.employee_id', '=', 'employees.id')
        ->select('leaves.*', 'employees.fullname','employees.id as emp_id')
        ->where('leaves.status', '=',0)
        ->orderBy('leaves.id', 'desc') 
        ->paginate(5);

        //dd($leave);
        
        return view('leave.leave',['leave'=>$leave]);

    }

     public function leaveinfo($id)
    {
        $leaveinfo = DB::table('leaves')
        ->join('employees', 'leaves.employee_id', '=', 'employees.id')
        ->select('leaves.*', 'employees.fullname','employees.images')
        ->where('leaves.employee_id', '=', $id) 
        ->get();
        return view('leave.leavedetails',['leaveinfo'=>$leaveinfo]);
       // dd($leaveinfo);
    }

    public function create()
    {
        //
    }

    public function leaveaccept(Request $request)
    {
        
        $id= $request->accept_id;
        $leave=leave::find($id);
        $leave->status= 1;
        $leave->save();
         return redirect('/manageleave');


    }

    public function leavereject(Request $request)
    {
        
        $id= $request->reject_id;
        $leave=leave::find($id);
        $leave->status= 2;
        $leave->save();
        return redirect('/manageleave');
    }



public function leavehistory()
    {
        $leavehistory = DB::table('leaves')
        ->where('leaves.status', '=',1)
        ->orWhere('leaves.status', 2)
        ->orderBy('leaves.id', 'desc')  
        ->paginate(5);

      // dd($leavehistory);
        
        return view('leave.leavehistory',['leavehistory'=>$leavehistory]);

    }

    public function leavehistorydetails($id,$eid)
    {
         $leavehistory = DB::table('leaves')
         ->where('leaves.id', '=',$id)
         ->where('leaves.employee_id', '=',$eid)
         ->get();

         $employee = DB::table('employees')
         ->where('employees.id', '=',$eid)
         ->get();

     //  dd($employee);

     
        
        return view('leave.leavedetailhistory',['leavehistory'=>$leavehistory,'employee'=>$employee]);

    }


    
public function store(Request $request)
    {
        //
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
