<?php

namespace App\Http\Controllers;
use App\Designation as Designation;
use Illuminate\Http\Request;
use DB;
class DesignationController extends Controller
{
  
    public function index()
    {
       
        $designations = DB::table('designations')->get();
        return view("designation.index",['designation'=> $designations ]);
    }

   
    public function create()
    {
        return view('designation.create');
    }

  
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:100',

        ]);

        $des=new Designation();
        $des->designation= $request->name;

        $des->save();
        return redirect('/designation')->with('status', 'designation inserted!');
    }

    function show($id)
    {
    //
    }

  
    public function edit($id)
    {
        $desig=Designation::find($id);
        return view("designation.edit",['desig'=>$desig]);

    }

    
    public function update(Request $request, $id)
    {
        $desig=Designation::find($id);
        $desig->designation= $request->name;
        $desig->save();
        return redirect('/designation')->with('status', 'designation item updated!');
    }

    
    public function destroy($id)
    {
        Designation::destroy($id);
        return redirect('/designation')->with('status', 'Designation item deleted!');
    }
}
