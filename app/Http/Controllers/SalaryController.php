<?php

namespace App\Http\Controllers;
use App\Salary as Salary;
use App\Paygrade as Paygrade;
use Illuminate\Http\Request;
use DB;
class SalaryController extends Controller
{

    public function index()
    {
       // echo "inserted";
         $paygrade = DB::table('paygrades')
            ->join('designations', 'paygrades.designation_id', '=', 'designations.id')
            ->select('paygrades.*', 'designations.designation')
            ->get();
            return view("salary.index",['paygrade'=> $paygrade ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request,$paygradeid)
    {


        $salarylist=$request->salarylist;
        $data=[];
        foreach ($salarylist as $payitemid => $amount)
        {
            $data[]=['paygrade_id'=>$paygradeid,'payitem_id'=>$payitemid,'amount'=>$amount];

        }

        DB::table('salaries')->where('paygrade_id','=',$paygradeid)->delete();
        DB::table('salaries')->insert($data);
        return redirect('/salary')->with('status', 'Salary inserted!');
    }

    public function show($id,$basic)
    {
        
             $salarys = DB::table('salaries')
            ->join('paygrades', 'paygrades.id', '=', 'salaries.paygrade_id')
            ->join('payitems', 'salaries.payitem_id', '=', 'payitems.id')
            ->select('salaries.amount', 'paygrades.paygrade_name','paygrades.basic', 'payitems.payitem')
            ->where('paygrades.id', '=',$id)              
            ->get();         
    
              return view("salaries.viewsalary",['salarys'=>$salarys,'basic'=>$basic]);



           
    }

    public function edit($paygradeid)
    {
        $payitem= DB::table('payitems')->get();
        $salarys= DB::table('salaries')->where('paygrade_id', '=', $paygradeid)->get();
        $paygrade= DB::table('paygrades')->where('id', '=', $paygradeid)->get();
        $salarylist=[];
        foreach ($salarys as $salary)
        {
            $salarylist[$salary->payitem_id]=$salary->amount;

        }
        return view("payitems.skim",['paygrade'=>$paygrade[0],'payitems'=>$payitem,'salarylist'=>$salarylist]);
        
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
