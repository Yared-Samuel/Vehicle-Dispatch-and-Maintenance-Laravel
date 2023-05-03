<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vcl extends Model
{
    use HasFactory;

    protected $table = 'vcls';


    protected $fillable = [
        'plate_id','plate_code','plate_city','chassis_number',
        'motor_number','vcl_model','fuel_type','category_name',
        'purchase_date','manufacture_date','created_by','image' ];

    // protected $primaryKey = 'plate_id';

    
    
    public function vcl_hasm_rqsts()
    {
        return $this->hasMany(Requester::class);
    }
    
    public function vcl_hasmny_fuels()
    {
        return $this->hasMany(Fuel::class);
    }

    public function vcl_blgtomny_uses()
    {
        return $this->belongsToMany(Usespare::class);
    }
    
    public function vcl_cost()
    {
        return $this->hasManyThrough(Cost::class, Requester::class);
    }

    public function vcl_hasmny_mtnCost()
    {
        return $this->hasMany(Mtn_cost::class);
    }
    









    

}
