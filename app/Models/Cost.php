<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;

    protected $fillable= [
        'cost_desc','Spare_cost','mech_cost','other_cost'
    ];

    public function cost_blgto_maintenances()
    {
        return $this->belongsTo(Maintenance::class);
    }
}
