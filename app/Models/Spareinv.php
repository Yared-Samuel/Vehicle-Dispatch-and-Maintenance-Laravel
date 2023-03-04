<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spareinv extends Model
{
    use HasFactory;

    protected $fillable= [
        'date_in','serial','spare_name','spare_model','spare_type','qty_in',
        'unit','created_by','price_in'
        
    ];

    public function inv_hasmny_uses()
    {
        return $this->hasMany(Usespare::class);
    }
}
