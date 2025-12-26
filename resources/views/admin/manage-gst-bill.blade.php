@extends('layouts.admin')
@section('title')
@section('content')


<div class="card">
    <div class="card-header">
        <h1 class="text-primary">Manage Bills
<a class="float-right badge badge-warning" href="{{route('admin.addParty')}}" >

<p>Add PArty</p>
</a>
</li></h1>
        
<div class="card">
    @if(session('status'))
    <div class="div alert alert-success">{{session('status')}}</div>
    @endif
    </div>
    <div class="card-body">


    <table class="table table-border table-striped  table-hoverd" border="2px">
<thead>
    <tr>
        <th>S.No</th>
        <th>Invoice Number</th>
        <th>Clients Info</th>
        <th>Billing Info</th>
        <th>Invoice Date</th>
        <th>Action</th>


    </tr>
</thead>

<tbody>
    @if(count($manageBill))
    @foreach($manageBill as $index => $manageBill)
    <tr>
   <td> {{$manageBill->id}}</td>
   <td> {{$manageBill->party_id}}</td>
        <td>
        <ul>
       <li><b class="badge badge-info">party Type : </b>{{$manageBill->party->Party_name}}</li>
        <li><b class="badge badge-info">NAME : </b>{{$manageBill->party->full_name}}</li>
        <li><b class="badge badge-info">phone : </b>{{$manageBill->party->phone}}</li>
        <li><b class="badge badge-info">Address : </b>{{$manageBill->party->address}}</li>

    
    </ul>
        
</td>
        <td>  <ul>
            <li><b class="badge badge-warning">Total Amount : </b>{{$manageBill->totalAmount}}</li>
        <li><b class="badge badge-warning">Net Amount : </b>{{$manageBill->netAmount }}</li>
        <li><b class="badge badge-warning">Tax : </b>{{$manageBill->taxAmount}}</li>



    
    </ul></td>
   
  <td><b class="badge badge-success">{{$manageBill->created_at->diffForHumans()}}</b></td>
 <td>
 <a href="{{route('admin.deletesoft',['add_bills',$manageBill->id])}}" class="btn btn-danger">deleted
</a>
            
<a href="">
   <button class="btn btn-info">update</button>
</a>
</td>
    </tr>
    @endforeach
    @else
    <tr>

    <td colspan="6"><b class="text-danger" >No Record found</b></td>
    </tr>
    @endif
</tbody>
    </table>
    </div>


</div>


@endsection

