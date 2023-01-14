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
        'status','request_date','request_by','description','maintenancetype_id','vcl_id','status'
        
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
