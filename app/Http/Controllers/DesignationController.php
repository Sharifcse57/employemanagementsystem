<?php

namespace App\Http\Controllers;
use App\Designation as Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
  
    public function index()
    {
        $designations=Designation::all();
        return view("designation.index",['designation'=> $designations ]);
    }

   
    public function create()
    {
        return view('designation.create');
    }

  
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:20',

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Designation::destroy($id);
        return redirect('/designation')->with('status', 'Designation item deleted!');
    }
}
