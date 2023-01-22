<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;

    protected $fillable= [
        'cost_date','spare_cost_desc','spare_cost','spare_qty','mech_cost_desc','mech_cost','other_cost_desc','other_cost',
        'ref_no','requester_id'
    ];

    public function cost_blgto_rqsts()
    {
        return $this->belongsTo(Requester::class,'requester_id','id');
    }
}
