@extends('adminlte::page')
@section('title','View Product')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    View Product
                </div>
            </div>
            <div class="box-body">
               <table class="table-primary table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>name</th>
                            <th>Description</th>
                            <th>Product code</th>
                            <th>Vendor</th>
                            <th>Brand</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->code}}</td>
                            <td>{{$product->vendor}}</td>
                            <td>{{$product->brand}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->stock}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{date('M.d.Y',strtotime($product->created_at))}}</td>
                            <td><a href="{{route('product.edit',[$product->id])}}" class="btn btn-primary btn-sm pull-right">Edit</a></td>

                        </tr>
                    </body>
               </table>
            </div>
        </div>
    </div>
</div>
@endsection