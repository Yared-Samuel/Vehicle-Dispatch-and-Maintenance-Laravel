<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;


    protected $fillable= [
        'start_date','end_date','kilometer','mech_work_desc','mech_cost',
        'spare_desc','sparepart_id','requester_id',
    ];

    public function mtn_blgto_rqsts()
    {
        return $this->belongsTo(Requester::class,'request_id','id');
    }

    public function mtn_hasmny_cost()
    {
        return $this->hasMany(Cost::class,'cost_id','id');
    }
}
