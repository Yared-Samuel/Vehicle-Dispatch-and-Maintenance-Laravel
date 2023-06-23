<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable= [
        'use_date','use_qty','vcl_id','mileage','driver_id',
        'status','created_by','item_id','qty_in','GRN_ref','GIV_ref'
    ];

    public function INV_blgtomny_vcls()
    {
        return $this->belongsTo(Vcl::class,'vcl_id','id');
    }

    public function inv_blgto_items()
    {
        return $this->belongsTo(Item::class,'item_id','id');
    }
    
    public function INVhasItem()
    {
        return $this->hasMany(Item::class);
    }
}
