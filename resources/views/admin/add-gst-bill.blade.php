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
<div class="card">
    @if(session('status'))
    <div class="div alert alert-success">{{session('status')}}</div>
    @endif


<div class="col-sm-12">
<div class="form-group text-center">
<h3 class="text-danger bg-warning "><b>Add GST Bill</b></h3  >
<h5 class="text-danger bg-dark"><b>Create Invoice BAsic Info</b></h5  >
</div>
</div>

<form method="post" action="{{route('admin.createbill')}}">    
@csrf
<div class="row">
        <div class="col-sm-4">

            <div class="form-group">
            <label>Type</label>
            <select name="party_id">
            <option value="Client">Please Select</option>

    @foreach($parties as $parties)
                <option value=" {{$parties->id}}">{{$parties->full_name}}</option>
   
    @endforeach
                </div>
            </div>

        <div class="col-sm-4">
        <div class="form-group">
        <label>Invoice Date</label>
        <input type="Date" name="invoiceDate" class="form-control"  >
        </div>
        </div>


    <div class="col-sm-4">
    <div class="form-group">
    <label>Invoice Number</label>
    <input type="number" name="invocieNo" class="form-control" placeholder="Enter Phone Mobile Number" >
    </div>
    </div>

    <div class="col-sm-12">
    <div class="form-group text-center">
<h5 class="text-danger bg-dark"><b>Items Detail</b></h5>
</div>
</div>

    <div class="col-sm-4">
    <div class="form-group">
    <label>Description</label>
    <input type="text" name="itemDescription" class="form-control" placeholder="Enter ..." >
    </div>
    </div>

    <div class="col-sm-8">
    <div class="form-group">
    <label>Total Amount</label>
    <input type="number" name="totalAmount" class="form-control" placeholder="Enter ..." >
    </div>
    </div>
    




<div class="col-sm-4">

<div class="form-group">
<label>CGST Rate</label>
<input type="number" name="cgstRate" class="form-control" placeholder="Enter ...">
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>SGST Rate</label>
<input type="number" name="sgstRate" class="form-control" placeholder="Enter ..." >
</div>
</div>


<div class="col-sm-4">
<div class="form-group">
<label>IGST Rate</label>
<input type="number" name="igstRate" class="form-control" placeholder="Enter ..." >
</div>
</div>


<div class="col-sm-4">

<div class="form-group">
<label>CGST amount</label>
<input type="number" name="cgstAmount" class="form-control" placeholder="Enter ...">
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>SGST amount</label>
<input type="number" name="sgstAmount" class="form-control" placeholder="Enter ..." >
</div>
</div>


<div class="col-sm-4">
<div class="form-group">
<label>IGST amount</label>
<input type="number" name="igstAmount" class="form-control" placeholder="Enter ..." >
</div>
</div>


</div>
<div class="col-sm-12">
<div class="form-group text-center">
<h5 class="text-danger bg-dark"><b>NetAmount Details</b></h5  >
</div>
</div>



<div class="col-sm-4">
    <div class="form-group">
    <label>Tax Amount</label>
    <input type="number" name="taxAmount" class="form-control" placeholder="Enter ..." >
    </div>
    </div>

    <div class="col-sm-4">
    <div class="form-group">
    <label>Net Amount</label>
    <input type="number" name="netAmount" class="form-control" placeholder="Enter ..." >
    </div>
    </div>
    <div class="col-sm-4">
    <div class="form-group">
    <label>Declaration</label>
    <input type="text" name="Declaration" class="form-control" placeholder="Enter ..." >
    </div>
    </div>

<button class="btn btn-primary">Submit</button>


</div>
</form>


@endsection

