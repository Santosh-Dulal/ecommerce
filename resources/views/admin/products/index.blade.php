@extends('adminlte::page')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    List All Product 
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-responsive table-primary table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Product Code</th>
                                <th>Vendor</th>
                                <th>Brand</th>
                                <th>Category</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $product)
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
                                <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">Action</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                              <span class="caret"></span>
                                              <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{route('product.edit',[$product->id])}}">Edit</a></li>
                                                <li><a href="{{route('product.show',[$product->id])}}">View</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div
@stop