<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mtn_cost extends Model
{
    use HasFactory;

    protected $fillable= [
        'requester_id','vcl_id','status','created_by',
        'cost_id','cost_date','spare_cost_desc','spare_cost',
        'spare_qty','total_cost','ref_no','garage_name',
        
        
    ];


    public function mtnnCost_blgto_vcls()
    {
        return $this->belongsTo(Vcl::class,'vcl_id','id');
    }
    
}
