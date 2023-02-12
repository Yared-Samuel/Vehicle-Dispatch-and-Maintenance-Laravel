<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usespare extends Model
{
    use HasFactory;
    protected $fillable= [
        'use_date','use_qty','sparecharts_id','vcl_id','driver_id',
        'desc'
    ];
}
