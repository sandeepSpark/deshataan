@extends('admin.templates.layout')
@section('content')

<div class="content-body">


<div class="container-fluid">
    
    
    <div class="col-xl-12">
    <form method="POST" action="{{url("/adminn/editTripInformation/$itripInformation->id")}}" enctype="multipart/form-data"  >
        {{ csrf_field() }}
        <div class="card forms-card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit Trip Information</h4>
                <div class="basic-form">
                  
                          
                        <div class="form-group row align-items-center">
                            <label class="col-sm-3 col-form-label text-label">Arrival Date</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                <input type="date" class="form-control" id="datePicker1" placeholder="Enter Arrival date" name="arrivalDate" value="{{$itripInformation->arrival_date}}">
                                </div>
                            </div>
                        </div>
                           
                        <div class="form-group row align-items-center">
                            <label class="col-sm-3 col-form-label text-label">Departure Date</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="date" class="form-control" id="datePicker1" placeholder="Enter Arrival date" name="departureDate" value="{{$itripInformation->departure_date}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-sm-3 col-form-label text-label">Inclusions</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationDefaultUsername2" placeholder="Enter inclusions"  name="inclusions" value="{{$itripInformation->inclusions}}">
                                </div>
                            </div>
                        </div>



                        <div class="form-group row align-items-center">
                            <label class="col-sm-3 col-form-label text-label">Package Type</label>
                            <div class="col-sm-9">
                                <select name="packageType" class="form-control">
                                     <option value="">Choose Package Type</option>
                                    @foreach ($packages as $package)
                                    <option value="{{$package->p_id}}" >{{$package->p_name}}</option>
                                    @endforeach
                                    
                                    
                                  </select>
                            </div>
                        </div>

                        
                        <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Individual Package</label>
                                <div class="col-sm-9">
                                    <select name="individualPackage" class="form-control">
                                         <option value="">Choose Individual Package Type</option>
                                        @foreach ($individualPkgs as $individualPkg)
                                        <option value="{{$individualPkg->p_id}}" >{{$individualPkg->title}}</option>
                                        @endforeach
                                        
                                        
                                      </select>
                                </div>
                            </div>
                        


                        <input type="submit" class="btn btn-success " value="Edit" name="add"  style="margin:0 auto; width:112px;">



                       
                   
                </div>
            </div>
        </div>

    </form>
    </div>


</div>
</div>

    
@endsection