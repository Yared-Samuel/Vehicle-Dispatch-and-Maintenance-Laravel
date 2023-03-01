<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usespare extends Model
{
    use HasFactory;
    protected $fillable= [
        'use_date','use_qty','spareinv_id','vcl_id','mileage','driver_name',
        'desc','status'
    ];

    public function uses_blgto_invs()
    {
        return $this->belongsTo(Spareinv::class,'spareinv_id','id');
    }

    public function use_blgtomny_vcls()
    {
        return $this->belongsToMany(Vcl::class);
    }
}
