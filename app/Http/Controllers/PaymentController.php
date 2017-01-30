<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Paymenthistory as Paymenthistory;
class PaymentController extends Controller
{
    
    public function index()
    {
                
    }

    public function create($employee_id=null,$paygrade_id=null)
    {
        if($employee_id || $paygrade_id)
        {
         
             $payment = DB::table('employees')
            ->join('designations', 'employees.designation_id', '=', 'designations.id')
            ->join('paygrades', 'employees.paygrade_id', '=', 'paygrades.id')
            ->select('employees.*', 'designations.designation','designations.id As des_id', 'paygrades.paygrade_name','paygrades.basic')
            ->where('employees.id', $employee_id)
            ->get();

            $extrasalary = DB::table('salaries')
            ->select('amount') 
            ->where('paygrade_id', $paygrade_id)
            ->get();

            return view("payment.payment",['payment'=> $payment,'extrasalary'=> $extrasalary]);

        }
        else {

           $paymenthistory = DB::table('paymenthistories')
           ->orderBy('id', 'desc')
           ->get();

           $history = DB::table('paymenthistories')
           ->join('employees', 'employees.id', '=', 'paymenthistories.employee_id')
           ->select('paymenthistories.*', 'employees.fullname', 'employees.email')
           ->orderBy('payment_date', 'desc')
           ->paginate(5);
           // dd( $employee);
          
           return view("payment.payment",['paymenthistory'=> $paymenthistory,'history'=> $history]);        
        }

        
    }

    public function store(Request $request)
    {
      $paymenthistory=new Paymenthistory();
      $paymenthistory->employee_id=$request->emp_id;;
      $paymenthistory->designation_id=$request->designation_id;
      $paymenthistory->basic=$request->basic;
      $paymenthistory->sub_total=$request->subtotal;
      $paymenthistory->additional_total=$request->extra;
      $paymenthistory->substruction_total=$request->deduction;
      $paymenthistory->grand_total=$request->grandtotal;
      $paymenthistory->description=$request->description;
      date_default_timezone_set('Asia/Dhaka');
      $c_date =date("Y-m-d");
      $paymenthistory->payment_date=$c_date;
      $paymenthistory->save();

      $emp_name=$request->fullname;
      $designation=$request->designation;
      $paygrade=$request->paygrade;
      $basic=$request->basic;
      $subtotal=$request->subtotal;
      $grandtotal=$request->grandtotal;
      $extra=$request->extra;
      $deduction=$request->deduction;


      $invoicee= array("emp_name"=>"$emp_name", "designation"=>"$designation", "paygrade"=>" $paygrade", "basic"=>" $basic", "subtotal"=>" $subtotal", "grandtotal"=>" $grandtotal", "extra"=>" $extra", "deduction"=>" $deduction");

      $invoice = (object) $invoicee;
      return view("payment.invoice",['invoice'=> $invoice]);
    }

    public function show()
    {
           $employee = DB::table('employees')
           ->orderBy('fullname', 'desc')
           ->get();
          return view("payment.paymentadd",['employee'=> $employee]); 

    }
   public function invoice()
    {
          
          return view("payment.invoice"); 

    }

    public function edit(Request $req)
    {
         $id=$req->payment;
         $user = DB::table('employees')->where('id', $id)->first();
         $paygrade_id=$user->paygrade_id;

           $payment = DB::table('employees')
            ->join('designations', 'employees.designation_id', '=', 'designations.id')
            ->join('paygrades', 'employees.paygrade_id', '=', 'paygrades.id')
            ->select('employees.*', 'designations.designation','designations.id As des_id', 'paygrades.paygrade_name','paygrades.basic')
            ->where('employees.id', $id)
            ->get();


            $extrasalary = DB::table('salaries')
            ->select('amount') 
            ->where('paygrade_id', $paygrade_id)
            ->get();

            $lastpaydate = DB::table('paymenthistories')
           ->select('payment_date') 
           ->where('employee_id', $id)
           ->orderBy('payment_date', 'desc')
           ->limit(1)
           ->get();
          // $attendance  = DB::select('select COUNT(entry_date) as total_entry from timesheets where employee_id= '.$id.' GROUP BY entry_date' );
          $attendance  = 
          DB::select('select YEAR(entry_date) as entry_year,
            MONTH(entry_date) as entry_month,
            COUNT(DISTINCT entry_date) as total_entry
            FROM timesheets
            WHERE employee_id= '.$id.'
            GROUP BY YEAR(entry_date), MONTH(entry_date) 
            ORDER BY YEAR(entry_date), MONTH(entry_date)
          ');

          return view("payment.payment",['lastpaydate'=> $lastpaydate,'payment'=> $payment,'extrasalary'=> $extrasalary,'attendance'=> $attendance]);


    }

    public function update(Request $request, $id)
    {
        //
    }
    public function search(Request $request)
    {
        $id=$request->searchpaymentemployee;
        $history = DB::table('paymenthistories')
            ->join('designations', 'paymenthistories.designation_id', '=', 'designations.id')
            ->join('employees', 'paymenthistories.employee_id', '=', 'employees.id')
            ->select('paymenthistories.*','fullname','designation')
            ->where('paymenthistories.id', $id)
            ->get();
      return view("payment.invoice",['history'=> $history]);  
    }


     public function search_by_id_history($id)
    {
        $history = DB::table('paymenthistories')
            ->join('designations', 'paymenthistories.designation_id', '=', 'designations.id')
            ->join('employees', 'paymenthistories.employee_id', '=', 'employees.id')
            ->select('paymenthistories.*','fullname','designation')
            ->where('paymenthistories.id', $id)
            ->get();
            return view("payment.invoice",['history'=> $history]);  
    }


       public function searchpayment(Request $request)
    {
        $from=$request->from_date;
        $to=$request->to_date;
        $formate_from= date('Y-m-d', strtotime($from)); 
        $formate_to= date('Y-m-d', strtotime($to)); 
        $history = DB::table('paymenthistories')
             ->whereBetween('payment_date', [$formate_from,  $formate_to])
             ->orderBy('id', 'desc')
             ->paginate(15);
       return view("payment.paymentview",['history'=> $history]);
    }
    public function destroy($id)
    {
        //
    }
}
