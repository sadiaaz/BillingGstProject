@extends('layouts.admin')
@section('title')
@section('content')

<div class="card">
    @if(session('status'))
    <div class="div alert alert-success">{{session('status')}}</div>
    @endif

@if(count($errors))
       
    
        <div class="alert alert-danger">
            <stron>Please Fix the following issues</strong>
            <ul>
            @foreach($errors->all() as $errors)
        <li>
        {{$errors}}
</li>

@endforeach
</ul>
        </div>

@endif

<div class="col-sm-12">

<div class="form-group text-center">
<h5 class="text-danger bg-dark"><b>Add Clients</b></h5  >
</div>
</div>
<form method="post" action="{{route('createparty')}}">    
@csrf
<div class="row">

        <div class="col-sm-2">
   
            <div class="form-group">
            <label>Type</label>
</br>
            <select name="Party_name">
            <option value="Client">Please Select</option>
<option value="Client">Client</option>
<option value="Vendor">Vendor</option>
<option value="Employee">Employee</option>
</select>
            </div>
            </div>

        <div class="col-sm-3">
        <div class="form-group">
        <label>Full name</label>
        <input type="text" name="full_name"class="form-control" placeholder="Enter ..." >
        </div>
        </div>


    <div class="col-sm-3">
    <div class="form-group">
    <label>Phone/mobile number</label>
    <input type="number" name="phone" class="form-control" placeholder="Enter ..." >
    </div>
    </div>

    <div class="col-sm-3">
    <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control" placeholder="Enter ..." >
    </div>
    </div>

    <div class="col-sm-12">

<div class="form-group text-center">
<h5 class="text-danger bg-dark"><b>Bank Details</b></h5  >
</div>
</div>


<div class="col-sm-4">

<div class="form-group">
<label>Account Holder Name</label>
<input type="text" name="Account_holder_name" class="form-control" placeholder="Enter ...">
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Account Number</label>
<input type="number" name="account_no" class="form-control" placeholder="Enter ..." >
</div>
</div>


<div class="col-sm-4">
<div class="form-group">
<label>Bank Name</label>
<input type="text"  name="bank_name" class="form-control" placeholder="Enter ..." >
</div>
</div>

<div class="col-sm-4">

<div class="form-group">
<label>IFCS Code</label>
<input type="text"  name="ifcs_code" class="form-control" placeholder="Enter ...">
</div>
</div>



<div class="col-sm-8 ">
<div class="form-group">
<label>Branch Address</label>
<input type="text"  name="branch_address" class="form-control" placeholder="Enter ..." >
</div>
</div>
</div>



<button class="btn btn-primary">Submit</button>
 
</form>
</div>


@endsection

