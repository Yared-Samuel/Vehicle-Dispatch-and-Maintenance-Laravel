<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable =  ['driver_name'];

    public function drvr_hasm_tires()
    {
        return $this->hasMany(Tirechart::class);
    }
}
