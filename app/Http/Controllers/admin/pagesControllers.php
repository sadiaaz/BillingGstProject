<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\addparty;
use App\Models\addBill;
use Illuminate\Support\Facades\Validator;

class pagesControllers extends Controller
{
    //

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function add_Party()
    {
        return view('admin.addParty');
    }



    public function createParty(request $request){
   $parameter = $request->all();
    // echo  "<pre>";
     // print_r ($parameter);
    
   

   $request->validate([
'Party_name' => 'required',
'full_name' => 'required|string',
'phone'=> 'required',
'address'=> 'required|string',
'Account_holder_name'=> 'required|string',
'account_no'=> 'required',
'bank_name'=> 'required|string|max:10',
'ifcs_code'=> 'required',
'branch_address'=> 'required|string',
   ]);
   unset($parameter['_token']);
   unset($parameter['_method']);
        addparty::create($parameter);
       return  redirect(route('admin.addParty'))->withStatus("Party added Sucessfully"); 
    }

    public function deleteParty($id){
        $parties = addparty::find($id);
        $parties->delete();
        return redirect()->back()->withStatus('Party Deleted Sucessfully');
    }


    public function edit_Party($id){
        $data['pera'] = addparty::Find($id);
            return  view('admin.editparty',compact('data')); 
         }

    public function manage_Party()
    {
       
       // $parties = addparty::all();
       $parties = addparty::select('id','full_name','phone','address','Account_holder_name','account_no','bank_name','ifcs_code','branch_address','created_at')->get();
        return view('admin.manageParty',compact('parties'));
    }

    
    public function updateParty($id, request $request){
        $request->validate([
            'Party_name' => 'required',
            'full_name' => 'required|string',
            'phone'=> 'required',
            'address'=> 'required|string',
            'Account_holder_name'=> 'required|string',
            'account_no'=> 'required',
            'bank_name'=> 'required|string|max:10',
            'ifcs_code'=> 'required',
            'branch_address'=> 'required|string',
               ]);
        echo $id;
        $parameter = $request->all();
        unset($parameter['_token']);
        addparty::where('id',$id)->update($parameter);
        return  redirect(route('admin.manageParty'))->withStatus("Party updated Sucessfully");
         
    }     

    public function add_bill()
    { 
        // only for client select method
        $parties = addparty::where('Party_name','Client')->orderBy('full_name','desc')->get();


        return view('admin.add-gst-bill',compact('parties'));
    }
    public function create_bill(request $request){
        $parties = addparty::where('Party_name','Client')->orderBy('full_name','desc')->get();

        $param = $request->all();
         // echo  "<pre>";
          // print_r ($param);
         
        
          $request->validate([
            'party_id' => 'required',
            'invoiceDate' => 'required|string',
          ]);
        unset($param['_token']);
        unset($param['_method']);
             addbill::create($param);
            return  redirect(route('admin.manage-gst-bill',compact('parties')))->withStatus("bill added Sucessfully"); 
         }
 
   
    public function manage_gst_bill()
    {
        $manageBill = addBill::where('is_deleted',0)->with('party')->get();
       
        return view('admin.manage-gst-bill',compact('manageBill'));
    }
    public function print_gst_bill()
    {
        return view('admin.print-gst-bill');
    }


    public function vendor()
    {
        return view('admin.vendor');
    }


}
