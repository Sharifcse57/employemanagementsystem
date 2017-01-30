<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    
	public function index()
    {
        return view('registration.table');
    }


     public function search(Request $request)
    {
        if($request->ajax())
        {

if(!empty($request->search))
{
     		$employee = DB::table('employees')
            ->join('designations', 'employees.designation_id', '=', 'designations.id')
            ->join('paygrades', 'employees.paygrade_id', '=', 'paygrades.id')
            ->select('employees.*', 'designations.designation', 'paygrades.paygrade_name')
            ->where('employees.fullname','LIKE','%'.$request->search.'%')
            ->orWhere('paygrades.paygrade_name','LIKE','%'.$request->search.'%')
            ->orWhere('designations.designation','LIKE','%'.$request->search.'%')
            ->orderBy('employees.id','DESC')
            ->paginate(4);
        }
        else {
               $employee = DB::table('employees')
            ->join('designations', 'employees.designation_id', '=', 'designations.id')
            ->join('paygrades', 'employees.paygrade_id', '=', 'paygrades.id')
            ->select('employees.*', 'designations.designation', 'paygrades.paygrade_name')
            ->orderBy('employees.id','DESC')
            ->paginate(5);
        }

         if($employee)
         {
              return response()->json($employee,200);

         }
         else {
            return response()->json(["error"=> "search not found"],400);

         }
         
        }
    }



     public function active(Request $request)
    {
        if($request->ajax())
        {
           if(!empty($request->id))
            {

               $employee= DB::table('employees')
                        ->where('id', $request->id)
                        ->update(['active' => $request->active]);
            }
                 if($employee)
                 {
                      return response()->json($employee,200);

                 }
                 else {
                    return response()->json(["error"=> "search not found"],400);

                 }
                 
        }
    }

    public function deactivate()
    {
        $employee = DB::table('employees')
            ->join('designations', 'employees.designation_id', '=', 'designations.id')
            ->join('paygrades', 'employees.paygrade_id', '=', 'paygrades.id')
            ->select('employees.*', 'designations.designation', 'paygrades.paygrade_name')
            ->where('active', 0)
            ->orderBy('employees.id','DESC')
            ->paginate(5);

             return view("registration.deactivate",['employee'=> $employee]);

    }


    public function activated(Request $request)
    {
        if($request->ajax())
        {
           if(!empty($request->id))
            {

               $employee= DB::table('employees')
                        ->where('id', $request->id)
                        ->update(['active' => $request->active]);
            }
                 if($employee)
                 {
                      return response()->json($employee,200);

                 }
                 else {
                    return response()->json(["error"=> "search not found"],400);

                 }
                 
        }
    }
}
