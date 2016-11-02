<?php

namespace App\Http\Controllers;

use App\Designation as Designation;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $designation=Designation::all();
        return view("registration.register",['designation'=> $designation]);
    }


    public function create()
    {
        //
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
