@extends('adminlte::page')
@section('title','Create coupens')
@section('content')
<div class="row">
    <div class="col-md-8">
     @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                        @foreach ($errors->all as $error)
                            <li>$error</li>
                        @endforeach
                </ul>
                    
             
            </div>
        @endif
        <div class="box-header with-border">
            <div class="box-title">
                {{__('Create Coupens')}}
            </div>
        </div>
        <div class="box-body">
           
            <form action="{{route('coupen.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="title">Title*</label>
                      <input type="text" name="title " id="title" class="form-control" placeholder="Enter title" required="required" >
                    </div>
                       <div class="form-group">
                           <label for="description">Description*</label>
                           <textarea type="text" name="description" id="description" class="form-control" placeholder="Enter description " required="required"></textarea>
                       </div>
                    <div class= "form-group">
                         <label for="code">Coupens Code*</label>
                        <input type="text" name="code" id="code" class="form-control" placeholder="Enter Coupens Code" required="required">
                    </div>
                    <div class= "form-group">
                            <label for="expires">Expires On*</label>
                           <input type="text" name="expires_on" id="expires_on" class="form-control" placeholder="Enter " required="required">
                    </div>
                    <div class= "form-group">
                            <label for="cash">Cash*</label>
                           <input type="text" name="cash" id="cash" class="form-control" placeholder="Enter Cash" required="required">
                     </div>
                     <div class= "form-group">
                            <label for="percentage">Percentage*</label>
                           <input type="text" name="percentage" id="percentage" class="form-control" placeholder="Enter percentage" required="required">
                       </div>
                       <div class= "form-group">
                            <label for="coupens">Coupens Amount*</label>
                           <input type="text" name="coupen_amt" id="coupen_amt" class="form-control" placeholder="Enter Coupens amount" required="required">
                       </div>
                       <div class="checkbox">
                           <strong>Type*</strong><br>
                           <input type="radio" name="type" value="1" checked="checked":null>Cash
                           <input type="radio" name="type" value="0" checked="checked":null>Percentage
                       </div>
                       <div class="checkbox">
                            <strong>Delivery Cost*</strong><br>
                            <input type="radio" name="delivery_cost" value="1" checked="checked":null>Free
                            <input type="radio" name="delivery_cost" value="0" checked="checked":null>Applicable
                        </div>
                        <div class= "form-group">
                                <label for="category_id">Category Id*</label>
                               <input type="text" name="category_id" id="category_id" class="form-control" placeholder="Enter category id" required="required">
                        </div>
                        <div class= "form-group">
                                <label for="product_id">Product Id*</label>
                               <input type="text" name="product_id" id="product_id" class="form-control" placeholder="Enter product id" required="required">
                        </div>
                        <div class="checkbox">
                           <strong> Occassion*</strong></br>
                             <input type="radio" name="occassion" value="1" checked="checked":null>Yes
                            <input type="radio" name="occassion" value="0" checked="checked":null>No
                        </div>
                        <div class="checkbox">
                           <strong>New Customer*</strong></br>
                            <input type="radio" name="new_customer" value="1" checked="checked":null>Yes
                            <input type="radio" name="new_customer" value="0" checked="checked":null>No
                            </div>
                            <div class= "form-group">
                                <label for="minimum_expense">Minimum Expense*</label>
                                <input type="text" name="minimum_expense" id="minimum_expense" class="form-control" placeholder="Enter product id" required="required">
                            </div>
                            <div class="form-gorup">
                                <button type="submit" class="btn btn-primary btn-md pull-right">Create</button>
                            </div>


            </form>
        </div>
    </div>
</div>
    
@endsection
    