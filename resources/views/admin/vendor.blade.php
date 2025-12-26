<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/pages/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 14:03:35 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Widgets</title>

<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback ' )}}">

<link rel="stylesheet" href="{{asset('../plugins/fontawesome-free/css/all.min.css' )}}">

<link rel="stylesheet" href="{{asset('../../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' )}}">

<link rel="stylesheet" href="{{asset('../dist/css/adminlte.min2167.css?v=3.2.0' )}}">
<script nonce="13e1e272-370f-45f3-aa27-12cac8f36a68">try{(function(w,d){!function(bb,bc,bd,be){bb[bd]=bb[bd]||{};bb[bd].executed=[];bb.zaraz={deferred:[],listeners:[]};bb.zaraz.q=[];bb.zaraz._f=function(bf){return async function(){var bg=Array.prototype.slice.call(arguments);bb.zaraz.q.push({m:bf,a:bg})}};for(const bh of["track","set","debug"])bb.zaraz[bh]=bb.zaraz._f(bh);bb.zaraz.init=()=>{var bi=bc.getElementsByTagName(be)[0],bj=bc.createElement(be),bk=bc.getElementsByTagName("title")[0];bk&&(bb[bd].t=bc.getElementsByTagName("title")[0].text);bb[bd].x=Math.random();bb[bd].w=bb.screen.width;bb[bd].h=bb.screen.height;bb[bd].j=bb.innerHeight;bb[bd].e=bb.innerWidth;bb[bd].l=bb.location.href;bb[bd].r=bc.referrer;bb[bd].k=bb.screen.colorDepth;bb[bd].n=bc.characterSet;bb[bd].o=(new Date).getTimezoneOffset();if(bb.dataLayer)for(const bo of Object.entries(Object.entries(dataLayer).reduce(((bp,bq)=>({...bp[1],...bq[1]})),{})))zaraz.set(bo[0],bo[1],{scope:"page"});bb[bd].q=[];for(;bb.zaraz.q.length;){const br=bb.zaraz.q.shift();bb[bd].q.push(br)}bj.defer=!0;for(const bs of[localStorage,sessionStorage])Object.keys(bs||{}).filter((bu=>bu.startsWith("_zaraz_"))).forEach((bt=>{try{bb[bd]["z_"+bt.slice(7)]=JSON.parse(bs.getItem(bt))}catch{bb[bd]["z_"+bt.slice(7)]=bs.getItem(bt)}}));bj.referrerPolicy="origin";bj.src="../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(bb[bd])));bi.parentNode.insertBefore(bj,bi)};["complete","interactive"].includes(bc.readyState)?zaraz.init():bb.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body class="hold-transition sidebar-mini">

<div class="card">
    @if(session('status'))
    <div class="div alert alert-success">{{session('status')}}</div>
    @endif
<div class="col-sm-10">
<div class="form-group text-center">
<h5 class="text-danger bg-dark"><b>Vendor invoices</b></h5  >
</div>
</div>
<form method="post" action="{{route('vendor.store')}}">
@csrf
<div class="row">
        <div class="col-sm-3">

            <div class="form-group">
            <label>name</label>
            <input type="text" name="full_name" class="form-control" placeholder="Existing Client">
            </div>
            </div>

    


    <div class="col-sm-3">
    <div class="form-group">
    <label>phone Number</label>
    <input type="text" class="form-control" name="phone" placeholder="Enter Phone Mobile Number" >
    </div>
    </div>

    <div class="col-sm-3">
    <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter Phone Mobile Number" >
    </div>
    </div>

    
    <div class="col-sm-3">
    <div class="form-group">
    <label>Invoice Date</label>
    <input type="Date" class="form-control" name="invoiceDate" placeholder="Enter Phone Mobile Number" >
    </div>
    </div>

    <div class="col-sm-12">
    <div class="form-group text-center">
<h5 class="text-danger bg-dark"><b>Bank Detail</b></h5  >
</div>
</div>

    <div class="col-sm-4">
    <div class="form-group">
    <label>Account Number</label>
    <input type="text"  name="account_no" class="form-control" placeholder="Enter ..." >
    </div>
    </div>  

    <div class="col-sm-8">
    <div class="form-group">
    <label>Account Holder Nam</label>
    <input type="text"  name="Account_holder_name" class="form-control" placeholder="Enter ..." >
    </div>
    </div>
    

    <div class="col-sm-4">

<div class="form-group">
<label>Bank Name</label>
<input type="text"  name="bank_name" class="form-control" placeholder="Enter ...">
</div>
</div>


<div class="col-sm-4">

<div class="form-group">
<label>IFSC Code</label>
<input type="text"  name="ifcs_code" class="form-control" placeholder="Enter ...">
</div>
</div>

<div class="col-sm-4">
<div class="form-group">
<label>Bank Address</label>
<input type="text" name="branch_address" class="form-control" placeholder="Enter ..." >
</div>
</div>
 






<div class="col-sm-12">
<div class="form-group text-center">
<h5 class="text-danger bg-dark"><b>Product  Details</b></h5  >
</div>
</div>

<div class="col-sm-6">
    <div class="form-group">
    <label>Description</label>
    <input type="text" name="itemDescription"  class="form-control" placeholder="Enter ..." >
    </div>
    </div>
    <div class="col-sm-6">
<div class="col-sm-4">
    <div class="form-group">
    <label>Total Amount</label>
    <input type="text"  name="totalAmount" class="form-control" placeholder="Enter ..." >
    </div>
    </div>

<button class="btn btn-primary">Submit</button>
</div>
</form>

</div>

<script src="{{asset('../plugins/jquery/jquery.min.js' )}}"></script>

<script src="{{asset('../plugins/bootstrap/js/bootstrap.bundle.min.js' )}}"></script>

<script src="{{asset('../dist/js/adminlte.min2167.js?v=3.2.0' )}}"></script>

<script src="{{asset('../dist/js/demo.js' )}}"></script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2024 14:04:27 GMT -->
</html>


