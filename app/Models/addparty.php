<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addparty extends Model
{
    use HasFactory;

    protected $fillable = array("full_name","Party_name","phone","address","Account_holder_name","account_no","bank_name","ifcs_code","branch_address");


public function addparty(){
    return $this->hasMany(addBill::class);
}

}
 