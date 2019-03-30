@extends('adminlte::page')
@section('title','Edit Categories')
@include('flash::message')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{__("Edit Categories" )}}:{{$categories->name}}
                </div>
            </div>
                <div class="body">
                    <form action="{{route('categories.update',[$categories->id])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name"></label>
                            <input type="text" id="name" name="name" class="form-control" value="{{$categories->name}}" required="required">
                        </div>
                        <div class="form-group">
                            <label for="description">Description*</label>
                            <textarea type="text" id="description" name="description" class="form-control" required="required" >{{$categories->description}}</textarea>
   
                        </div>
                        <div class="checkbox">
                            <strong>Status</strong><br>
                            <input type="radio" value="0">Active
                            <input type="radio" value="1">In-Active
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug*</label>
                            <input type="slug" id="slug" name="slug" class="form-control" required="required" value="{{$categories->slug}}">
                        </div><div class="form-group">
                            <label for="keywords">Keywords*</label>
                            <input type="keywords" id="keywords" name="keywords" class="form-control" required="required" value="{{$categories->keywords}}">
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
    
