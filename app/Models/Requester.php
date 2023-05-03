<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vcl;
use App\Models\Maintenancetype;

class Requester extends Model
{
    use HasFactory;
    // create custom primary key // not the default one
        // protected $primaryKey = 'id';
    // preven the id from autoIncrementing
        // public $incrementing = false;

    protected $fillable= [
        'status','request_date','request_by','description','mtn_type','vcl_id','status','schedule',

        'start_date','end_date','kilometer','created_by',
        
    ];

   
    public function rqst_blgto_vcls()
    {
        return $this->belongsTo(Vcl::class,'vcl_id','id');
    }

    
    public function rqst_hasmny_cost()
    {
        return $this->hasMany(Cost::class);
    }


    
}
