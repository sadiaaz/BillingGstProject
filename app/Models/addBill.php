<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addBill extends Model
{
    use HasFactory;
    protected $fillable = array('party_id','invoiceDate','invocieNo','itemDescription','totalAmount','cgstRate','sgstRate','igstRate','cgstAmount','sgstAmount','igstAmount','taxAmount','netAmount','Declaration');

    public function party(){
        return $this->belongsTo(addparty::class);
    }
    


}
