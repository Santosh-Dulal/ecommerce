@extends('adminlte::page')

@section('title', 'eCommerce')

@section('content_header')
    <h1>Dashboard</h1>
    <p>You are logged in!</p>

@stop

@section('content')
    <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-list"></i></span>
        
                        <div class="info-box-content">
                            <span class="info-box-text">Brands</span>
                            <span class="info-box-number"></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-list"></i></span>
        
                        <div class="info-box-content">
                            <span class="info-box-text">Categories</span>
                            <span class="info-box-number"></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-list"></i></span>
        
                        <div class="info-box-content">
                            <span class="info-box-text">Coupens</span>
                            <span class="info-box-number"></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-list"></i></span>
        
                        <div class="info-box-content">
                            <span class="info-box-text">Products</span>
                        <span class="info-box-number">{{}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-list"></i></span>
        
                        <div class="info-box-content">
                            <span class="info-box-text">Vendors</span>
                            <span class="info-box-number"></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
            </div>
 
    </div>
@stop