<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vcl;
use App\Models\Maintenancetype;

class Request extends Model
{
    use HasFactory;

    protected $fillable= [
        'request_date','description','request_by','maintenancetype_id','vcl_id',
        'status','start_date','end_date','kilometer','mech_work_desc','mech_cost',
        'spare_description','sparepart_id','purch_sparepart','spare_qty','price'
    ];

   
    public function rqst_blgto_vcls()
    {
        return $this->belongsTo(Vcl::class,'vcl_id','id');
    }


    public function rqst_blgto_mtns()
    {
        return $this->belongsTo(Maintenancetype::class,'maintenancetype_id','id');
    }
    
    






    
}
