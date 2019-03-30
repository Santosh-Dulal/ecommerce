@extends('adminlte::page')
@section('title','Edit Products')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{__('Edit Products')}} : {{$product->name}}
                </div>
            </div>
            <div class="box-body">
                <form action="{{route('product.update',[$product->id])}}" method="POST">
                @csrf   
                @method('PATCH')
                   <div class="form-group">
                   <label for="name">Name*</label>
                    <input type="text" id="name" name="name" placeholder="Enter product name" class="form-control" required="required" value="{{$product->name}}">

                   </div>
                   <div class="form-group">
                        <label for="description">Description*</label>
                        <textarea type="text" id="description" name="description" placeholder="Enter product description" class="form-control" required="required" >{{$product->description}}</textarea>
                   </div>
                   <div class="form-group">
                        <label for="code">Product Code*</label>
                        <input type="text" id="code" name="code" placeholder="Enter product code" class="form-control" required="required" value="{{$product->code}}">
                   </div>
                   <div class="form-group">
                        <label for="vendor">Vendor*</label>
                        <input type="text" id="vendor" name="vendor" placeholder="Enter product vendor" class="form-control" required="required" value="{{$product->vendor}}">
                   </div>
                   <div class="form-group">
                        <label for="brand">Brand*</label>
                        <input type="text" id="brand" name="brand" placeholder="Enter product brand" class="form-control" value="{{$product->brand}}">
                   </div>
                   <div class="form-group">
                        <label for="category">Category*</label>
                        <input type="text" id="category" name="category" placeholder="Enter product stock" class="form-control" value="{{$product->category}}">
                   </div>
                   <div class="form-group">
                        <label for="stock">Stock*</label>
                        <input type="text" id="stock" name="stock" placeholder="Enter product stock" class="form-control" value="{{$product->stock}}">
                   </div>
                   <div class="form-group">
                        <label for="price">Price*</label>
                        <input type="text" id="price" name="price" placeholder="Enter product price" class="form-control" value="{{$product->price}}">
                   </div>
                   <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md pull-right">Update</button>
                   </div>

                </form>
            </div>
        </div>
    </div>
</div>
@stop