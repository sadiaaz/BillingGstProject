<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class party extends Model
{
    use HasFactory;
    // Table Name
    protected $table = "parties";
    // Primary key
    protected $primaryKey = "id";
    // fillable columns
   // fillable null not none mendatory in db have to give any value;
   protected $fillable = array("full_name","phone_number");




}
