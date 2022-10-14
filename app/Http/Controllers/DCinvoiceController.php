<?php

namespace App\Http\Controllers;

use App\Models\DCinvoice;
use Illuminate\Http\Request;

class DCinvoiceController extends Controller
{
    public function index(){
        
        $data=['page_title' => 'Dc Invoice','dc' => DCinvoice::all()];
        return view('dc_invoice.index',$data);

    }
    public function create(){

        $data = ['page_title'=> 'Add DC Invoice'];
        return view('dc_invoice.create')->with($data);
    }
    public function store(Request $request){

        $request->validate([
            'invoice_date' => 'required',
            'invoice_no' => 'required',
            'order_date' => 'required',
            'order_no' => 'required',
            'product' => 'required',
            'au' => 'required',
            'mfg' => 'required',
            'batch' => 'required',
            'expdate' => 'required',
            'mfgdate' => 'required',
        ]);

        DCinvoice::create([

        'invoice_no' => $request->invoice_no,
        'invoice_date' => $request->invoice_date,
        'order_no' => $request->order_no,
        'order_date' => $request->order_date,
        'au' => $request->au,
        'product' => $request->product,
        'batch' => $request->batch,
        'mfg' => $request->mfg,
        'mfgdate' => $request->mfgdate,
        'expdate' => $request->expdate,
        ]);
           
        return redirect('/manage/dc_invoice')->with('success','Add Invoice Successfully');
    }
    public function edit($id){

        
        $data=['page_title' => 'Dc Invoice','dc' => DCinvoice::find($id)];
        return view('dc_invoice.edit',$data);
    }

    public function update(Request $request,$id){

        $request->validate([
            'invoice_date' => 'required',
            'invoice_no' => 'required',
            'order_date' => 'required',
            'order_no' => 'required',
            'product' => 'required',
            'au' => 'required',
            'mfg' => 'required',
            'batch' => 'required',
            'expdate' => 'required',
            'mfgdate' => 'required',
        ]);

        $dc = DCinvoice::find($id);
        $dc->invoice_no = $request->invoice_no;
        $dc->invoice_date = $request->invoice_date;
        $dc->order_no = $request->order_no;
        $dc->order_date = $request->order_date;
        $dc->au = $request->au;
        $dc->product = $request->product;
        $dc->batch = $request->batch;
        $dc->mfg = $request->mfg;
        $dc->mfgdate = $request->mfgdate;
        $dc->expdate = $request->expdate;
        $dc->update();
        return redirect('/manage/dc_invoice')->with('success','Invoice Updated Successfully');

    }

    public function destroy($id){

        $dc = DCinvoice::find($id);
        if($dc != null)
        {
            $dc->delete();
            return redirect('/manage/dc_invoice')->with('success','Invoice Deleted Successfully');

        }
        else{

            return redirect('/manage/dc_invoice')->with('success','No such Record Found');

        }
        
    }
}
