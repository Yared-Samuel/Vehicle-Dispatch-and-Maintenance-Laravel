<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;

    protected $fillable= [
        'cost_date','cost_desc','cost_cash','qty','total_cost',
        'ref_no','garage_name','driver_id','requester_id','created_by',
    ];

    public function cost_blgto_rqsts()
    {
        return $this->belongsTo(Requester::class,'requester_id','id');
    }

}
