@extends('adminlte::page')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{__('View all Brands')}}
                </div>
                <div class="box-body">
                    <table class="table-primary table table table-bordered">
                        <thead>
                            <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Keywords</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                             </tr>
                        </thead>
                         <tbody>
                            <tr>
                                 <td>{{$brands->id}}</td>
                                 <td>{{$brands->name}}</td>
                                 <td>{{$brands->description}}</td>
                                 <td>{{$brands->status}}</td>
                                 <td>{{$brands->keywords}}</td>
                                 <td>{{$brands->created_at}}</td>
                                <td><a href="{{route('brands.edit',[$brands->id])}}" class="btn btn-primary btn-sm pull-right">Edit</a></td>


                             </tr>
                         </tbody>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
