<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
use App\Models\Inventory;
use App\Models\Item;
use App\Models\Spareinv;
use App\Models\Usespare;
use App\Models\Vcl;
use Illuminate\Http\Request;

class repController extends Controller
{
    public function index(Request $request)
    {
        // $count = ;
        $fuel_vcls = Vcl::get();
        if (count($request->all()) > 0 && $request->input('start') > 0 & $request->input('end') > 0) {        
            $id = $request->input('vcl');
        
        $fuels =Vcl::where('id',$id)->with('vcl_hasmny_fuels', function($query) use ($request){
            $str_date =  $request->input('start');            
            $end_date = $request->input('end');
            $query->whereBetween('fuel_date',[$str_date, $end_date]);
            return $query;
        })->get();
        }
        elseif(count($request->all()) > 0 && count($request->vcl) == 0)
        {
            $str_date =  $request->input('start');            
                $end_date = $request->input('end');
            $fuels =Fuel::whereBetween('fuel_date',[$str_date, $end_date])->get()->orderBy('fuel_date','DESC');
                
        }       
        else{
            $fuels =Vcl::with('vcl_hasmny_fuels')->get();
            
        }

        // dd($fuels);

       return view('admin.reports.fuel')->with(['fuels'=>$fuels,'fuel_vcls'=>$fuel_vcls]);
    }

   
        public function stock(){
            // $stock = Inventory::with('INVItem')->get()->groupBy('item_id');
            // dd($stock);
            $rems = Item::with('vcl_hasmny_INV')->get();
            
            // $rems = Inventory::with('inv_blgto_items')->get();
            // dd($rems);
            // foreach ($rems as $key => $value) {
            //     dd($value);
            // }
            //     dd($rems);
            return view('admin.reports.stock')->with(['rems'=>$rems]);
        }
    
    
}
