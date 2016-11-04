<?php

namespace App\Http\Controllers;
use App\Paygrade as Paygrade;

use Illuminate\Http\Request;

class PaygradeController extends Controller
{

    public function index()
    {
        $paygrade=Paygrade::all();
        return view("paygrade.index",['paygrade'=> $paygrade ]);
    }


    public function create()
    {
        return view('registration.register');
    }


    public function store(Request $request)
    {

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
