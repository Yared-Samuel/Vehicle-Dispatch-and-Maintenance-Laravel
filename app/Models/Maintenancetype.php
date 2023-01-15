<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenancetype extends Model
{
    use HasFactory;

    protected $fillable= [
        'maintenance_name'
    ];

    public function mtn_hasm_rqsts()
    {
        return $this->hasMany(Requester::class);
    }
    
}
