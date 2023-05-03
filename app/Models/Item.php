<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable= [
        'name','category','item_code','unit'
        
    ];

    public function item_hasmny_INV()
    {
        return $this->hasMany(Inventory::class);
    }
    public function item_hasmny_use()
    {
        return $this->hasMany(Usespare::class);
    }
    public function vcl_hasmny_INV()
    {
        return $this->hasMany(Inventory::class);
    }
}
