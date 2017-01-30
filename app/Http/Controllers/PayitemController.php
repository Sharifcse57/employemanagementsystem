<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Payitem as Payitem;
use DB;
use Illuminate\Http\Request;

class PayitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *\
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payitem=Payitem::all();
        return view("payitems.index",['payitems'=> $payitem ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payitems.create');
    }

    public function store(Request $request)
    {
        $item=new Payitem();
        $item->payitem= $request->name;

        $item->save();
        return redirect('/payitem')->with('status', 'Payitem inserted!');

    }

    public function show($id)
    {


    }
      public function modal($id)
    {
         // return view("payitems.modal",['id'=>$id]);
        dd($id);
    }

    public function edit($id)
    {
        $payitem=Payitem::find($id);
        return view("payitems.edit",['payitem'=>$payitem]);
    }

    public function update(Request $request, $id)
    {
        $payitem=Payitem::find($id);
        $payitem->payitem= $request->name;
        $payitem->save();
        return redirect('/payitem')->with('status', 'Payitem updated!');
    }

    public function destroy($id)
    {
        Payitem::destroy($id);
        return redirect('/payitem')->with('status', 'payitem item deleted!');
    }
}
