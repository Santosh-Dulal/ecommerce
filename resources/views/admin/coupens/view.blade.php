@extends('adminlte::page')
@section('title','View Coupens')
@section('content')
<div class="row">
    <div class="col-md-16">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{('List of Coupnes')}}
                </div>
            </div>
            <div class="box-body">
                <table class="table-primary table tabel table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>title</th>
                            <th>descr</th>
                            <th>Coupen Code</th>
                            <th>Expirity</th>
                            <th>Cash</th>
                            <th>Percent</th>
                            <th>Type</th>
                            <th>Deli_Cost</th>
                            <th>Cat_ID</th>
                            <th>Prod_ID</th>
                            <th>Occassion</th>
                            <th>New_Cust</th>
                            <th>Min Expense</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td>>{{$coupen->id}}</td>
                            <td>{{$coupen->title}}</td>
                            <td>{{$coupen->description}}</td>
                            <td>{{$coupen->code}}</td>
                            <td>{{$coupen->expires_on}}</td>
                            <td>{{$coupen->cash}}</td>
                            <td>{{$coupen->percentage}}</td>
                             <td>{{$coupen->type}}</td>
                            <td>{{$coupen->delivery_cost}}</td>
                            <td>{{$coupen->category_id}}</td>
                            <td>{{$coupen->product_id}}</td>
                            <td>{{$coupen->occassion}}</td>
                            <td>{{$coupen->new_customer}}</td>
                            <td>{{$coupen->minimum_expense}}</td>
                            <td>{{date('M,d,Y',strtotime($coupen->created_at))}}</td>
                            <td><a href="{{route('coupen.edit',[$coupen->id])}}" class="btn btn-primary btn-sm pull-right">Edit</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
