<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    use HasFactory;

    protected $fillable= [
        'fuel_date','vcl_id','cash','litre','kilometre','prev_km','created_by',
        
    ];

    public function fuel_blgto_vcls()
    {
        return $this->belongsTo(Vcl::class,'vcl_id','id');
    }
    


}
