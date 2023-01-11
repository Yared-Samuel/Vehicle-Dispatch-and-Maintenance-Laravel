<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;


    protected $fillable= [
        'status','start_date','end_date','kilometer','mech_work_desc','mech_cost',
        'spare_description','sparepart_id','purch_sparepart','spare_qty','price',
    ];
}
