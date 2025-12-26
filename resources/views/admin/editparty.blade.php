@extends('layouts.admin')
@section('title')
@section('content')


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
<h5 class="text-danger bg-dark"><b>Edit Clients</b></h5  >
</div>
</div>
@foreach($data as $data)

<form method="post" action="{{route('updateParty',$data->id)}}">    
@csrf

<div class="row"> 


        <div class="col-sm-2">
   
            <div class="form-group">
            <label>Type</label>
</br>
            <select name="Party_name">
            <option value="ss" 
            >Please Select</option>
<option value="Client" @if ($data->Party_name =='Client') selected @endif >Client</option>
<option value="Vendor"  @if ($data->Party_name =='Vendor') selected @endif >Vendor</option>
<option value="Employee" @if ($data->Party_name =='Employee') selected @endif >Employee</option>
</select>
            </div>
            </div>

        <div class="col-sm-3">
        <div class="form-group">
        <label>Full name</label>
        <input value="{{$data->full_name}}" type="text" name="full_name"class="form-control" placeholder="Enter ..." >
        </div>
        </div>


    <div class="col-sm-3">
    <div class="form-group">
    <label>Phone/mobile number</label>
    <input type="number"value="{{$data->phone}}" name="phone" class="form-control" placeholder="Enter ..." >
    </div>
    </div>

    <div class="col-sm-3">
    <div class="form-group">
    <label>Address</label>
    <input type="text" value="{{$data->address}}" name="address" class="form-control" placeholder="Enter ..." >
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
<input type="text" value="{{$data->Account_holder_name}}" name="Account_holder_name" class="form-control" placeholder="Enter ...">
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Account Number</label>
<input type="number" value="{{$data->account_no}}" name="account_no" class="form-control" placeholder="Enter ..." >
</div>
</div>


<div class="col-sm-4">
<div class="form-group">
<label>Bank Name</label>
<input type="text" value="{{$data->bank_name}}" name="bank_name" class="form-control" placeholder="Enter ..." >
</div>
</div>

<div class="col-sm-4">

<div class="form-group">
<label>IFCS Code</label>
<input type="text" value="{{$data->ifcs_code}}" name="ifcs_code" class="form-control" placeholder="Enter ...">
</div>
</div>



<div class="col-sm-8 ">
<div class="form-group">
<label>Branch Address</label>
<input type="text" value="{{$data->branch_address}}" name="branch_address" class="form-control" placeholder="Enter ..." >
</div>
</div>
</div>

@endforeach

<button class="btn btn-primary" type="submit">Submit</button>

<a href="{{route('admin.manageParty')}}" class="btn btn-danger">
cancel
</a>
</form>
</div>


@endsection

