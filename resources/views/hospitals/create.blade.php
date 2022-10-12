@extends('layouts.buildapp' , ['class' => 'off-canvas-sidebar', 'category_name' => __('hospitals'), 'page_name' => __('create_hospital')])
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
                                            <h4>Add Hospital</h4>
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
                    <form action="{{ url('/hospital/store') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hospital Name</label>
                                <input type="text" style="text-transform: capitalize" name="name" class="form-control" placeholder="Enter Name" value="{{old('name')}}" required>
                                @error('name')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hospital Address</label>
                                <input type="text" name="address"  class="form-control" placeholder="Enter Address" value="{{old('address')}}" required>
                                @error('address')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hospital Contact Number</label>
                                <input type="text" name="contact" placeholder="Enter Contact No" value="{{old('contact')}}" class="form-control" required>
                                @error('contact')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City </label>
                                <input type="text" style="text-transform: capitalize" name="city" class="form-control" value="{{old('city')}}" placeholder="Enter City" required>
                                @error('address')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Hospital District</label>
                              <input type="text" name="district" placeholder="Enter District" value="{{old('district')}}" class="form-control" required>
                              @error('district')
                              <span style="color: red">{{ $message }}</span>
                              @enderror
                          </div>
                      </div>
                      {{-- <div class="col-md-6">
                          <div class="form-group">
                              <label>City </label>
                              <input type="text" style="text-transform: capitalize" name="city" class="form-control" value="{{old('city')}}" placeholder="Enter City" required>
                              @error('address')
                              <span style="color: red">{{ $message }}</span>
                              @enderror
                          </div>
                          
                      </div> --}}
                  </div>
                    
                   
                    <button type="submit" class="btn btn-primary mt-3">Create</button>
                    </form>

                        </div>
                            </div>
                        </div>
</div>
</div>
</div>

@endsection