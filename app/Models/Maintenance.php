<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;


    protected $fillable= [
        'start_date','end_date','kilometer','mech_work_desc','mech_cost',
        'spare_desc','sparepart_id','request_id',
    ];
}
