<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Request;

class Vcl extends Model
{
    use HasFactory;

    protected $table = 'vcls';


    protected $fillable = [
        'plate_id','plate_code','plate_city','chassis_number','motor_number','vcl_model','fuel_type','category_id','purchase_date','manufacture_date' ];

    // protected $primaryKey = 'plate_id';

    public function vcl_hasm_tires(){
        return $this->hasMany(Tirechart::class);
    }

    public function vcl_blgto_cats()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    
    public function vcl_hasm_rqsts()
    {
        return $this->hasMany(Requester::class);
    }
    








    

}
