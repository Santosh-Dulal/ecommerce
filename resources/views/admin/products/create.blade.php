@extends('adminlte::page')
@section('title','Create Products')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{__("Create Products")}}
                </div>
            </div>
            <div class="box-body">
                <form action="{{route('product.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name*</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name of product" required="required">
                    </div>
                    <div class="form-group">
                        <label for="name">Description*</label>
                        <textarea type="text" name="description" id="description" class="form-control" placeholder="Enter description of product" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="code">Product code*</label>
                        <input type="text" name="code" id="code" class="form-control" placeholder="Enter code of product" required="required">
                    </div>
                    <div class="form-group">
                        <label for="vendor">Vendor*</label>
                        <input type="text" name="vendor" id="vendor" class="form-control" placeholder="Enter vendor of product" required="required">
                    </div>
                    <div class="form-group">
                        <label for="brand">Brand*</label>
                        <input type="text" name="brand" id="brand" class="form-control" placeholder="Enter brand of product" required="required">
                    </div>
                    <div class="form-group">
                        <label for="category">Category*</label>
                        <input type="text" name="category" id="category" class="form-control" placeholder="Enter category of product" required="required">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock*</label>
                        <input type="text" name="stock" id="stock" class="form-control" placeholder="Enter stock of product" required="required">
                    </div>
                    <div class="form-group">
                        <label for="price">Price*</label>
                        <input type="text" name="price" id="price" class="form-control" placeholder="Enter price of product" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md pull-right">Create</button>
                    </div>
                   
                </form>
               
            </div>
        </div>
    </div>
</div>
    
@endsection