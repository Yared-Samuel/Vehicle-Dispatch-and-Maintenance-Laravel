<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparelist extends Model
{
    use HasFactory;

    protected $fillable = [
        'part_name','spare_measure','spare_state'];

}
