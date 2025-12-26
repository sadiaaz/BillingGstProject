<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// complex functionality easy to use 
// conencted to  service containers 

class pagesController extends Controller
{
    public function home()
    {
        return 'Data base Operations';
    }



    // for soft Deleting
    public function deletesoft($table, $id){
        $prama = array('is_deleted' => 1);
        DB::table($table)->where('id',$id)->update($prama);
        return  redirect()->back()->withStatus("bill deleted Sucessfully"); 

    }




}
