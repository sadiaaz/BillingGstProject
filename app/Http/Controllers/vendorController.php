<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class vendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
             return view('admin.vendor');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        // checking for Existing client
        $party = DB::table('addparties')
        ->where('Party_name','vendor')
        ->where(['full_name' => $request->full_name,'phone' => $request->phone])
        ->first();
        if(!empty($party)){
            $party_id= $party->id;
        }else{
            $param = array(
                'Party_name' =>'vendor',
                'full_name' =>$request->full_name,
                'phone'=> $request->phone,
                'address'=> $request->address,
                'Account_holder_name'=> $request->Account_holder_name,
                'account_no'=> $request->account_no,
                'bank_name'=> $request->bank_name,
                'ifcs_code'=> $request->ififcs_codescCode,
                'branch_address'=> $request->branch_address,

            );
            $party_id = DB::table('addparties')->insertGetId($param);
        }

        // creating Vendor Invoice
        $param = array(
            'party_id' => $party_id,
            'invocieNo'=> $request->invocieNo,
            'invoiceDate'=>$request->invoiceDate,
            'itemDescription'=> $request->itemDescription,
            'Account_holder_name'=> $request->Account_holder_name,
            'account_no'=> $request->account_no,
            'bank_name'=> $request->bank_name,
            'ifcs_code'=> $request->ifcs_code,
            'branch_address'=> $request->branch_address,
            'Declaration'=>$request->Declaration,
            'totalAmount'=>$request->totalAmount,
            'created_at'=> date("Y-m-d H:i:s")
        );
    $invoice_id = DB::table('vendors')->insertGetId($param);
    if($invoice_id){
        return redirect()->route('vendor.store',$invoice_id)->withStatus('Invoice Added Sucessfully');
    }
    return redirect()->back()->withError('something went wrong please Try again');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
