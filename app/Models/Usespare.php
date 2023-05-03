<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usespare extends Model
{
    use HasFactory;
    protected $fillable= [
        'use_date','use_qty','spareinv_id','vcl_id','mileage','driver_id',
        'desc','issue_serial','status','created_by','GIV_ref','item_id'
    ];

    public function uses_blgto_invs()
    {
        return $this->belongsTo(Spareinv::class,'spareinv_id','id');
    }

    public function use_blgtomny_vcls()
    {
        return $this->belongsTo(Vcl::class,'vcl_id','id');
    }

    public function spareUseItem()
    {
        return $this->belongsTo(Item::class,'item_id','id');
    }
}
