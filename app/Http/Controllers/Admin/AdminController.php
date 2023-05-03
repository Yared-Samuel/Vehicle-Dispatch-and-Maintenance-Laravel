<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fuel;
use App\Models\Item;
use App\Models\Spareinv;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $fuels =Fuel::with('fuel_blgto_vcls')->get();
        $rems = Item::has('vcl_hasmny_INV')->get();

        
        $spareInv = Spareinv::with('spareInItem')->get();

        return view('admin.index',compact('fuels','rems','spareInv'));
    }
}
