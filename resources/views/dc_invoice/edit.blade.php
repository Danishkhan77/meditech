@extends('layouts.buildapp' , ['class' => 'off-canvas-sidebar', 'category_name' => __('invoice'), 'page_name' => __('edit_invoice')])
@section('page_title' ,$page_title)
@section('content')

<div id="content" class="main-content">
<div class="container" style="margin-top: 50px;">
<div class="container">
	                        <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">                                
                                        <div class="row">
                                            <div class="col-xl-9 col-md-9 col-sm-9 col-9">
                                                <h4>Edit DC Invoice</h4>
                                            </div>
                                        </div>                                                        
                                    </div>
                                    
                                @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible mt-3">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    {{ Session::get('success')}}
                                </div>
                                
                                @endif
                             

                 <div class="widget-content widget-content-area br-6 mt-5">
                    <form action="{{ url('/dc_invoice/'.$dc->id.'/update') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Invoice No</label>
                                <input type="text" style="text-transform: capitalize" name="invoice_no" class="form-control" placeholder="Enter S. No" value="{{$dc->invoice_no}}" required>
                                @error('invoice_no')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Invoice Date</label>
                                <input type="date" name="invoice_date"  class="form-control" placeholder="Enter Invoice Date" value="{{$dc->invoice_date}}" required>
                                @error('invoice_date')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Order No</label>
                                <input type="text" style="text-transform: capitalize" name="order_no" class="form-control" placeholder="Enter Order No" value="{{$dc->order_no}}" required>
                                @error('order_no')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Order Date</label>
                                <input type="date" name="order_date"  class="form-control" placeholder="Enter Order Date" value="{{$dc->order_date}}" required>
                                @error('order_date')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>A / U</label>
                                <input type="text" name="au"  class="form-control" placeholder="Enter A / U" value="{{$dc->au}}" required>
                                @error('au')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name of Product</label>
                                <input type="text" name="product" placeholder="Enter Product Name" value="{{$dc->product}}" class="form-control" required>
                                @error('product')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Batch. No </label>
                                <input type="text" style="text-transform: capitalize" name="batch" class="form-control" value="{{$dc->batch}}" placeholder="Enter Batch No." required>
                                @error('batch')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mfg</label>
                                <input type="text" style="text-transform: capitalize" name="mfg" class="form-control" value="{{$dc->mfg}}" placeholder="Enter Mfg" required>
                                @error('mfg')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            
                        </div>
                      
                      
                     
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mfg Date</label>
                            <input type="date" name="mfgdate" placeholder="Enter Mfg Date" value="{{$dc->mfgdate}}" class="form-control" required>
                            @error('mfgdate')
                            <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
 <div class="col-md-6">
    <div class="form-group">
        <label>Exp Date</label>
        <input type="date" style="text-transform: capitalize" name="expdate" class="form-control" value="{{$dc->expdate}}" placeholder="Enter Exp Date" required>
        @error('expdate')
        <span style="color: red">{{ $message }}</span>
        @enderror
    </div>
    
</div>
                  </div>
                    
                   
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </form>

                        </div>
                            </div>
                        </div>
</div>
</div>
</div>

@endsection