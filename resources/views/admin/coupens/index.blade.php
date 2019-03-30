@extends('adminlte::page')
@section('content')
<div class="row">
    <div class="col-md-20">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    View all Coupens
                </div>
            </div>
            <div class="box-body">
                <p></p>
                <div class="table-responseive">
                    <table table-responsive table table-primary table-stripped>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>title</th>
                                <th>descr</th>
                                <th>Cpn Code</th>
                                <th>Expirity</th>
                                <th>Cash</th>
                                <th>Percent</th>
                                <th>Coupen Amt</th>
                                <th>Type</th>
                                <th>Deli Cost</th>
                                <th>Cat_ID</th>
                                <th>Prod_ID</th>
                                <th>Occa</th>
                                <th>New_Cust</th>
                                <th>Min_Expense</th>
                                <th>Created at</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coupens as $coupen)
                            <tr>
                                <td>{{$coupen->id}}</td>
                                <td>{{$coupen->title}}</td>
                                <td>{{$coupen->description}}</td>
                                <td>{{$coupen->code}}</td>
                                <td>{{$coupen->expires_on}}</td>
                                <td>{{$coupen->cash}}</td>
                                <td>{{$coupen->percentage}}</td>
                                <td>{{$coupen->coupen_amt}}</td>
                                <td>{{$coupen->type}}</td>
                                <td>{{$coupen->delivery_cost?'Applicable':'Free'}}</td>
                                <td>{{$coupen->category_id}}</td>
                                <td>{{$coupen->occassion?'Yes':'No'}} </td>
                                <td>{{$coupen->new_customer?'Yes':'No'}}</td>
                                <td>{{$coupen->minimum_expense}}</td>
                                <td>{{date('m.d.Y',strtotime($coupen->created_at))}}</td>
                                <td>
                                        <div class="btn-group">
                                                <button type="submit" class="btn btn-default ">Action</button>
                                                <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                 <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                        <li><a href="{{route('coupen.edit',[$coupen->id])}}">Edit</a></li>
                                                        <li><a href="{{route('coupen.show',[$coupen->id])}}">View</a></li>
                                                       <li class="divider"></li>
                                                        <li><a href=""></a></li>

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
</div>
@endsection
