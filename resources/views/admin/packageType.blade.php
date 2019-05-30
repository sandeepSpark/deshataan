@extends('admin.templates.layout')
@section('content')

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
                <div class="container-fluid">
                    <div class="row page-titles">
                        <div class="col p-md-0">
                            <h4>Add Package Type</h4>
                        </div>
                        <div class="col p-md-0">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                <a href="{{url('/adminn/packagetype')}}">Add Package Type</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                    </div>


                </div>
            
            <!--**********************************
                Content body end
            ***********************************-->

    <div class="content-body" style="margin-top: -1052px;">

        <div class="container-fluid">

 <div class="row">
     <!-- /# column -->
   
    <!-- /# column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="mb-4">Edit Packages Type</h4>
                </div>

                <div class="card-upload" style="float:right">
                <a href="{{url('/adminn/addpackage')}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Add Package"><i class="fas fa-upload"></i></a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" style="min-width: 500px;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Package Type</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                           $i = 1;
                        ?>
                        @foreach ($packages as $package)
                            
                        {{--  --}}
                        <tbody>
                            <tr>
                                <th>{{ $i }}</th>
                                <td>{{$package->p_name}}</td>
                                <td><span>{{$package->p_desc}}</span> </td>
                                <td><span><a href="{{url("/adminn/editPackageType/$package->p_id")}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                <a href="{{url("/adminn/deletePackageType/$package->p_id")}}" class="mr-4" data-toggle="tooltip" data-placement="top" title="Delete"  onclick="del()"><i class="fa fa-trash color-danger" aria-hidden="true"  id="deletePackage"></i></a>

                                </span>
                                </td>
                            </tr>
                            
                        </tbody>
                        <?php 
                            $i++;
                        ?>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /# column -->

    {{ $packages->links() }}

</div>
<!-- row -->

</div>


@endsection