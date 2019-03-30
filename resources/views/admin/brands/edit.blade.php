@extends('adminlte::page')
@section('title','Edit Brands')
@section('content')
<div class="row">
    @include('flash::message')
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{('Edit Brands')}} : {{$brands->name}}
                </div>
            </div>
            <div class="box-body">
                <form>
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Name*</label>
                         <input type="name" id="name" name="name" placeholder="Enter name" class="form-control" required="required" value="{{$brands->name}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description*</label>
                    <textarea type="text" name="description" id="description" placeholder="Enter Description" class="form-control" value="{{$brands->description}}" ></textarea>
                    </div>
                    <div class="checkbox">
                        <strong>Status*</strong><br>
                        <input type="radio" name="status" value="1"{{$brands->status ? "checked='checked'":null }} >Active
                        <input type="radio" name="status" value="0"{{$brands->status ? "checked='checked'":null}}>In-Active
                    </div>
                    <div class="form-group">
                        <label for="keywords">Keywords</label>
                        <input type="text" id="keywords" name="keywords" placeholder="Enter keywords" class="form-control" value="{{$brands->keywords}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md pull-right">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
    
