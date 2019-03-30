@extends('adminlte::page')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{__('Show all Categories')}}
                </div>
                <div class="box-body">
                    <table class="table-primary table table table-bordered">
                        <thead>
                            <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Slug</th>
                                    <th>Keywords</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                             </tr>
                        </thead>  
                         <tbody>
                        
                            <tr>
                                 <td>{{$categories->id}}</td>
                                 <td>{{$categories->name}}</td>
                                 <td>{{$categories->description}}</td>
                                 <td>{{$categories->status}}</td>
                                <td>{{$categories->slug}}</td>
                                 <td>{{$categories->keywords}}</td>
                                 <td>{{$categories->created_at}}</td>
                                <td><a href="{{route('categories.edit',[$categories->id])}}" class="btn btn-primary btn-sm pull-right">Edit</a></td>
                                         

                             </tr>
                                         
                        
                         </tbody>
                </div>

            </div>
        </div>

    </div>
</div>
    
@endsection