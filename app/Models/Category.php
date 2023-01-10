<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vcl;

class Category extends Model
{
    use HasFactory;

    protected $fillable =  ['category_name'];

    



    public function cat_hasm_vcls()
    {
        return $this->hasMany(Vcl::class);
    }
    public function cat_hasm_tires()
    {
        return $this->hasMany(Tirechart::class);
    }
}
