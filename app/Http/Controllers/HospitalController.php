<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index(){

        $data = ['page_title'=> 'Hospitals','hospital'=> Hospital::all()];
        return view('hospitals.index')->with($data);
    }

    public function create(){

        $data = ['page_title'=> 'Add Hospitals'];
        return view('hospitals.create')->with($data);
    }
    public function store(Request $request){

        $request->validate([

            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'city' => 'required',
            'district' => 'required',
        ]);
        Hospital::create([
            'name' => $request->name,
            'address' => $request->address,
            'contact' => $request->contact,
            'city' => $request->city,
            'district' => $request->district,

        ]);

        return redirect('/manage/hospitals')->with('success',' Add Hospital Successfully');

        
    }
    public function edit($id){

        $data = ['page_title'=>'Edit Hospital','hospital'=>Hospital::find($id)];
        return view('hospitals.edit')->with($data);
    }
    public function update($id,Request $request){
        
        $hospital = Hospital::find($id);
        if($hospital != null){

            $hospital->name = $request->name;
            $hospital->address = $request->address;
            $hospital->contact = $request->contact;
            $hospital->city = $request->city;
            $hospital->district = $request->district;
            $hospital->update();

        return redirect('/manage/hospitals')->with('success',' Update Hospital Successfully');

        }
        else{
            
        return redirect('/manage/hospitals')->with('success',' Update Hospital Unsuccessfully');

        }
    }
    public function destroy($id){

        $hospital  = Hospital::find($id);

        
        if($hospital != null)
        {

            $hospital->delete();
            return back()->with('success',"Hospital Deleted Successfully");
        }
        else{
            return back()->with('success','No such Record Found');
        }
    }
}
