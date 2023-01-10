<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tirechart extends Model
{
    use HasFactory;

    protected $table = 'tirecharts';

    protected $fillable = [
        'serial_num',
        'tire_type',
        'tire_price',
        'category_id',
        'status',
        'start',
        'vcl_id',
        'driver_id',
        ];

    
    public function tire_blgto_vcls()
    {
        return $this->belongsTo(Vcl::class,'vcl_id','id');
    }

    public function tire_blgto_drvrs()
    {
        return $this->belongsTo(Driver::class,'driver_id','id');
    }

    public function drvr_blgto_cats()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
