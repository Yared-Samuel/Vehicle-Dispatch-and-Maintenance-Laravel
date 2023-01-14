<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','part_number','spare_price','spare_qty','vclcat_id'];

        public function spr_blgto_cats()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    }
