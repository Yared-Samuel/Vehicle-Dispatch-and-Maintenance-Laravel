<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spareinv extends Model
{
    use HasFactory;

    protected $fillable= [
        'date_in','serial','item_id','model','qty_in','price_in','total_price',
        'unit','created_by','GRN_ref'
        
    ];


    public function spareInVcl()
    {
        return $this->belongsTo(Vcl::class,'vcl_id','id');
    }
    public function spareInItem()
    {
        return $this->belongsTo(Item::class,'item_id','id');
    }

    public function inv_hasmny_uses()
    {
        return $this->hasMany(Usespare::class);
    }
}
