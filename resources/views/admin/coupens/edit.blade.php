@extends('adminlte::page')
@section('title','Edit Coupens')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{__('Edit Coupens')}}:{{$coupen->name}}
                </div>
            </div>
            <div class="box-body">
                <form action="{{route('coupen.update',[$coupen->id])}}" method="POST">
                    @csrf
                    @method('PATCH')
                   <div class="form-group">
                     <label for="title">Title*</label>
                     <input type="text" value="{{$coupen->title}}" name="title" id="title" class="form-control" placeholder="Enter title" required="required">
                   </div>
                   <label for="title">Description</label>
                    <textarea type="text" id="description" name="description" class="form-control" placeholder="Enter description" required="required" >{{$coupen->description}}</textarea>
                   </div>
                   <div class="form-group">
                    <label for="title">Coupens Code*</label>
                    <input type="text" value="{{$coupen->code}}" name="code" id="code" class="form-control" placeholder="Enter coupen code" required="required">
                  </div>

                  <div class="form-group">
                    <label for="expires_on">Expires On*</label>
                    <input type="text" value="{{$coupen->expires_on}}" name="expires_on" id="expires_on" class="form-control" placeholder="Enter  expires on" required="required">
                  </div>
                  <div class="form-group">
                    <label for="cash">Cash*</label>
                    <input type="text" value="{{$coupen->cash}}" name="cash" id="cash" class="form-control" placeholder="Enter cash" required="required">
                  </div>
                  <div class="form-group">
                    <label for="percentage">Percentage*</label>
                    <input type="text" value="{{$coupen->percentage}}" name="percentage" id="percentage" class="form-control" placeholder="Enter percentage" required="required">
                  </div>
                  <div class="form-group">
                    <label for="title">Coupens Amount*</label>
                    <input type="text" value="{{$coupen->coupen_amt}}" name="coupen_amt" id="coupen_amt" class="form-control" placeholder="Enter coupen amount" required="required">
                  </div>
                  <div class="checkbox">
                        <strong>Type*</strong><br>
                        <input type="radio" value="1"{{$coupen->type ?"checked='checked'":null}}>Yes
                        <input type="radio" value="0"{{$coupen->type ?"checked='checked'":null}}>No
                  </div>
                  <div class="checkbox">
                    <strong>Delivery Cost*</strong><br>
                    <input type="radio" value="1"{{$coupen->delivery_cost ?"checked='checked'":null}}>Applicable
                    <input type="radio" value="0"{{$coupen->delivery_cost? "checked='checked'":null}}>No
              </div>
               <div class="form-group">
                   <label for="category_id">Category Id*</label>
                   <input type="text" id="category_id" name="category_name" value="{{$coupen->category_id}}" class="form-control" placeholder="Enter category_id">
               </div>
               <div class="form-group">
                   <label for="product_id">Product Id </label>
                   <input type="text" id="product_id" name="product_id" value="{{$coupen->product_id}}" class="form-control" placeholder="Enter product id" required="required">
               </div>
               <div class="checkbox">
                  <strong>Occassion</strong><br>
                   <input type="radio" value="1"{{$coupen->occassion ?"checked='checked'":null}}>Yes
                   <input type="radio" value="0"{{$coupen->occassion ? "checked='checked'":null}}>No
               </div>
               <div class="checkbox">
                   <strong>New Customer*</strong><br>
                   <input type="radio" value="1"{{$coupen->new_customer ? "checked='checked'":null}}>Yes
                   <input type="radio" value="0"{{$coupen->new_customer ? "checked='checked'":null}}>No
               </div>
               <div class= "form-group">
                <label for="minimum_expense">Minimum Expense*</label>
                <input type="text" name="minimum_expense" id="minimum_expense" class="form-control" placeholder="Enter product id" required="required">
            </div>

               <div class="form-gorup">
                <button type="submit" class="btn btn-primary btn-md pull-right">Update</button>
                 </div>
                   
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
    
