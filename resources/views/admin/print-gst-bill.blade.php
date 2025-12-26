@extends('layouts.admin')
@section('title')
@section('content')
<h1>Print Gst Bill</h1>
<div class="card">

<div class="col-sm-12">

<div class="form-group text-center">
<h5 class="text-danger bg-dark"><b>Add Clients</b></h5  >
</div>
</div>

<div class="row">
        <div class="col-sm-4">

            <div class="form-group">
            <label>Type</label>
            <input type="text" class="form-control" placeholder="Enter ...">
            </div>
            </div>

        <div class="col-sm-4">
        <div class="form-group">
        <label>Full name</label>
        <input type="text" class="form-control" placeholder="Enter ..." >
        </div>
        </div>


    <div class="col-sm-4">
    <div class="form-group">
    <label>Phone/mobile number</label>
    <input type="text" class="form-control" placeholder="Enter ..." >
    </div>
    </div>

    <div class="col-sm-12">
    <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" placeholder="Enter ..." >
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
<input type="text" class="form-control" placeholder="Enter ...">
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Account Number</label>
<input type="text" class="form-control" placeholder="Enter ..." >
</div>
</div>


<div class="col-sm-4">
<div class="form-group">
<label>Bank Name</label>
<input type="text" class="form-control" placeholder="Enter ..." >
</div>
</div>

<div class="col-sm-4">

<div class="form-group">
<label>IFCS Code</label>
<input type="text" class="form-control" placeholder="Enter ...">
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Zip Code</label>
<input type="text" class="form-control" placeholder="Enter ..." >
</div>
</div>


<div class="col-sm-4">
<div class="form-group">
<label>State</label>
<input type="text" class="form-control" placeholder="Enter ..." >
</div>
</div>

<div class="col-sm-12">
<div class="form-group">
<label>Branch</label>
<input type="text" class="form-control" placeholder="Enter ..." >
</div>
</div>
</div>

<div class="form-group text-center">
<h5 class="text-danger bg-dark"><b>Bank Details</b></h5  >
</div>
</div>

<button class="btn btn-primary">Submit</button>
<button class="btn btn-dark">Reset</button>

</div>


@endsection

