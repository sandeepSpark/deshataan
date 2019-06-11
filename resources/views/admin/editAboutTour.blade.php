@php
use App\Http\Controllers\PagesController;
@endphp
@extends('admin.templates.layout')
@section('content')

<div class="content-body">


    <div class="container-fluid">
        {{-- --}}
        <div class="col-xl-12">
            <form method="POST" action="{{ url("adminn/aboutTour/$iaboutTour->id") }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit About Tour</h4>
                        <div class="basic-form">


                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Places Covered</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername1"
                                            placeholder="Enter places covered" name="placesCovered"
                                            value="{{$iaboutTour->places_covered}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Inclusions</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername2"
                                            placeholder="Enter inclusions" name="inclusions"
                                            value="{{$iaboutTour->inclusions}}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Exclusions</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationDefaultUsername2"
                                            placeholder="Enter exclusions" name="exclusions"
                                            value="{{$iaboutTour->exclusions}}">
                                    </div>
                                </div>
                            </div>





                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Event Date</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="datePicker1"
                                            placeholder="Enter event date" name="eventDate"
                                            value="{{$iaboutTour->event_date}}">
                                    </div>
                                </div>
                            </div>





                            <div class="form-group row align-items-center">
                                <label class="col-sm-3 col-form-label text-label">Package Type</label>
                                <div class="col-sm-9">
                                    <select name="packageType" class="form-control">
                                        <option value="{{PagesController::showPackageType($iaboutTour->p_id)}}">Choose
                                            Package Type</option>
                                        @foreach ($packages as $package)
                                        <option value="{{$package->p_id}}">{{$package->p_name}}</option>
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
                                        <option value="{{$individualPkg->p_id}}">{{$individualPkg->title}}</option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>



                            <input type="submit" class="btn btn-success " value="Update" name="Edit"
                                style="margin:0 auto; width:112px;">





                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</div>


@endsection
