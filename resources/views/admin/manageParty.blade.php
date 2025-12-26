@extends('layouts.admin')
@section('title')
@section('content')


<div class="card">
    <div class="card-header">
        <h1 class="text-primary">Manage Clients
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
        <th>Personal Detail</th>
        <th>Bank Details</th>
        <th>Created At</th>
        <th>Action</th>


    </tr>
</thead>

<tbody>
    @foreach($parties as $parties)
    <tr>
   <td> {{$parties->id}}</td>
        <td>
        <ul>
            <li><b class="badge badge-info">party Type : </b>{{$parties->Party_name}}</li>
        <li><b class="badge badge-info">NAME : </b>{{$parties->full_name}}</li>
        <li><b class="badge badge-info">phone : </b>{{$parties->phone}}</li>
        <li><b class="badge badge-info">Address : </b>{{$parties->address}}</li>

    
    </ul>
        
</td>
        <td>  <ul>
            <li><b class="badge badge-warning">ccount Holder Name : </b>{{$parties->Account_holder_name}}</li>
        <li><b class="badge badge-warning">Account No : </b>{{$parties->account_no}}</li>
        <li><b class="badge badge-warning">Bank Name : </b>{{$parties->bank_name}}</li>
        <li><b class="badge badge-warning">IFCS Code : </b>{{$parties->ifcs_code}}</li>
        <li><b class="badge badge-warning">Branch Address : </b>{{$parties->branch_address}}</li>


    
    </ul></td>
   
  <td><b class="badge badge-success">{{$parties->created_at->diffForHumans()}}</b></td>
 <td>
 <a href="{{route('admin.deleteParty',$parties->id)}}">
   <button class="btn btn-danger">deleted</button>
</a>
            
<a href="{{route('admin.editparty',$parties->id)}}">
   <button class="btn btn-info">update</button>
</a>
</td>



    </tr>
    @endforeach
</tbody>
    </table>
    </div>


</div>


@endsection

