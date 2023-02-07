<?php

namespace App\Http\Controllers;

use App\Models\Vcl;
use Illuminate\Http\Request;

class repController extends Controller
{
    public function index(Request $request)
    {
        $fuel_vcls = Vcl::get();
        if (count($request->all()) > 0 & $request->input('start') > 0 & $request->input('end') > 0) {        
            $id = $request->input('vcl');
        
        $fuels =Vcl::where('id',$id)->with('vcl_hasmny_fuels', function($query) use ($request){
            $str_date =  $request->input('start');            
            $end_date = $request->input('end');
            $query->whereBetween('fuel_date',[$str_date, $end_date]);
            return $query;
        })->get();
        }
        // elseif($request->input('vcl') == null)
        // {           
        //     $fuels =Vcl::with('vcl_hasmny_fuels', function($query) use ($request){
        //         $str_date =  $request->input('start');            
        //         $end_date = $request->input('end');
        //         $query->whereBetween('fuel_date',[$str_date, $end_date]);
        //         return $query;
        //     })->get();
           
        // }
        else{
            $fuels =Vcl::with('vcl_hasmny_fuels')->get();
            
        }

       return view('admin.reports.fuel')->with(['fuels'=>$fuels,'fuel_vcls'=>$fuel_vcls]);
    }
}
