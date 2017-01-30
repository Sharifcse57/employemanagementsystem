<?php

namespace App\Http\Controllers;
use App\Paygrade as Paygrade;
use App\Designation as Designation;
use DB;
use Illuminate\Http\Request;

class PaygradeController extends Controller
{

    public function index()
    {
         $paygrade = DB::table('paygrades')
            ->join('designations', 'paygrades.designation_id', '=', 'designations.id')
            ->select('paygrades.*', 'designations.designation')
            ->where('paygrades.status', 0)
            ->get();
            return view("paygrade.index",['paygrade'=> $paygrade ]);

    }

      public function salary()
    {
         $paygrade = DB::table('paygrades')
            ->join('designations', 'paygrades.designation_id', '=', 'designations.id')
            ->select('paygrades.*', 'designations.designation')
            ->get();
            return view("salary.index",['paygrade'=> $paygrade ]);

    }




    public function create()
    {
        $designation=Designation::all();
        return view("paygrade.create",['designation'=> $designation]);

    }


    public function store(Request $request)
    {
                    $this->validate($request, [
                        'name' => 'required|max:20',
                    ]);

                    $grade=new Paygrade();
                    $grade->designation_id= $request->designation;
                    $grade->paygrade_name= $request->name;
                    $grade->basic= $request->range;
                    $grade->status= 0;

                    $grade->save();
                    return redirect('/paygrade')->with('status', 'Designation inserted!');
    }


    public function show($id)
    {
        //
    }

     public function deactive($id)
    {
          $paygrades= DB::table('paygrades')
                    ->where('id', $id)
                    ->update(['status' => 1]);

          if($paygrades) {
               return redirect('/paygrade')->with('status', 'Paygrade item Deactivated!');
          }          
      
       
    }
      public function active($id)
    {
          $paygrades= DB::table('paygrades')
                    ->where('id', $id)
                    ->update(['status' => 0]);

          if($paygrades) {
               return redirect('/paygrade')->with('status', 'Paygrade item Activated!');
          }          
      
       
    }

     public function showdeactive()
    {
           $paygrade = DB::table('paygrades')
            ->join('designations', 'paygrades.designation_id', '=', 'designations.id')
            ->select('paygrades.*', 'designations.designation')
            ->where('paygrades.status', 1)
            ->get();
            return view("paygrade.deactivelist",['paygrade'=> $paygrade ]);        
      
       
    }

    public function edit($id)
    {
         $grade=Paygrade::find($id);
         return view("paygrade.edit",['grade'=>$grade]);
    }

    public function update(Request $request, $id)
    {
                $grade=Paygrade::find($id);
                $grade->paygrade_name= $request->name;
                $grade->basic= $request->range;
                $grade->save();
                return redirect('/paygrade')->with('status', 'Paygrade item updated!');
    }

    public function destroy($id)
    {
        Paygrade::destroy($id);
        return redirect('/paygrade')->with('status', 'Paygrade deleted!');
    }
}
