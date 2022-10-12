@extends('layouts.buildapp' , ['class' => 'off-canvas-sidebar', 'category_name' => __('hospitals'), 'page_name' => __('manage_hospitals')])
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
                                            <h4>Manage Hospitals</h4>
                                        </div>
                                        <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                           <a href="{{ url('/partner/create') }}" class="btn btn-primary">Add Partner</a>
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
                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        {{-- <th>ID</th> --}}
                                        <th>Hospital Name</th>
                                        <th>Hospital Contact</th>
                                        <th>Hospital Address</th>
                                        <th>Hospital City</th>
                                        <th>Hospital District</th>
                                        <th class="dt-no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($hospital->isNotEmpty())
                                    @foreach($hospital as $key => $value)
                                    <tr>
                                        {{-- <td>{{ $key+1 }}</td> --}}
                                        <td style="text-transform: capitalize">{{ $value->name }}</td>
                                        <td>{{ $value->contact }}</td>
                                        <td>{{$value->address}}</td>
                                        <td>{{ $value->city}}</td>
                                        <td>{{ $value->district}}</td>

                                        {{-- <td><img src="{{ asset($value->image) }}" class="img-fluid" width="100" height="100"></td> --}}
                                        
                                        <td><a href="{{ url('/hospital/'.$value->id.'/edit') }}"><i data-feather="edit"></i></a>
                                           <a href="javascript:void(0)" class="delete_option" data-id="{{ $value->id }}"><i data-feather="trash"></i></a>
                                        
                                           {{-- <a href="{{ url('/employee/'.$value->id.'/view') }}"><i data-feather="eye"></i></a> --}}
                                            
                                         </td>
                                    </tr>
                                    @endforeach
                                    @else
                                     <td colspan="9" class="text-center">No Data Available</td>
                                    @endif 
            
                                </tbody>
                            </table>

                        </div>
                                <div class="widget-content widget-content-area mt-5">
                                 

                                </div>
                            </div>
                        </div>
</div>
</div>
</div>


 @foreach($hospital as $key => $value)
<div class="modal fade" id="delete-{{$value->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Modal</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
        <h5>Are you Sure?</h5>
        </div>
        <div class="modal-footer">
          <a class="btn text-primary" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Cancel</a>
                <a href="{{ url('/hospital/'.$value->id.'/delete') }}" class="btn btn-primary">Delete</a>
        </div>
      </div>
      
    </div>
  </div>
  @endforeach

@endsection