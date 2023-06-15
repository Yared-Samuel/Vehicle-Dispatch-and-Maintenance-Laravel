<?php

namespace App\Http\Controllers;

use App\DataTables\FuelsDataTable;
use Illuminate\Support\Collection;
use App\Http\Requests\FuelStoreRequest;
use App\Models\Fuel;
use App\Models\Vcl;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class fuelchartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



     public function index(Request $request)
     {

        // dd($request->input('vcl_id'));

        $vcls= Vcl::all();
        $start = $request->input('start');
        $end = $request->input('end');
        $vcl_id = $request->input('vcl_id');

        if ($start && !$vcl_id) {
            $fuels =Fuel::whereBetween('fuel_date',[$start, $end])->with('fuel_blgto_vcls')->orderBy('id','desc')->orderBy('fuel_date','desc')->get();
        }
        elseif ($vcl_id) {
            
            $fuels =Fuel::whereBetween('fuel_date',[$start, $end])->where('vcl_id',$vcl_id)->with('fuel_blgto_vcls')->orderBy('id','desc')->orderBy('fuel_date','desc')->get();            
            // dd($fuels);
        }
        else {
            $fuels =Fuel::with('fuel_blgto_vcls')->orderBy('id','desc')->orderBy('fuel_date','desc')->get();
        } 
        
        
        // return $datatable->render('admin.fuel.index');
            
                return view('admin.fuel.index',compact('fuels','vcls'));
     } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vcls= Vcl::all()->sortBy('plate_id');
        return view('admin.fuel.create')->with(['vcls'=>$vcls]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FuelStoreRequest $request)
    {
        $userId = Auth::id();
        $vcl_id = $request->vcl_id;
        $prev_km = Fuel::where('vcl_id',$vcl_id)->orderBy('id','Desc')->first();
        $prev_km = $prev_km->kilometre ?? null;
        if ($prev_km && $prev_km < $request->kilometre) {
            

            Fuel::create([            
                'fuel_date' => $request->fuel_date,
                'vcl_id' => $request->vcl_id,
                'cash' => $request->cash,
                'litre' => $request->litre,
                'kilometre' => $request->kilometre,
                'prev_km' => $prev_km,
                'created_by'=>$userId,
                
            ]);
            toast('Data Submited!','success');

        }elseif ($prev_km == null) {
            Fuel::create([            
                'fuel_date' => $request->fuel_date,
                'vcl_id' => $request->vcl_id,
                'cash' => $request->cash,
                'litre' => $request->litre,
                'kilometre' => $request->kilometre,
                'prev_km' => 0,
                'created_by'=>$userId,
                
            ]);
            toast('Data Submited!','success');
        }else
        {
            Alert()->error('Pleas check your input!','warning');
            
        }


        
        return to_route('admin.fuel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        
        $fuel_vcls = Vcl::get();
        if (($request) && $request->input('vcl')) {        
        $vcl = $request->input('vcl');
        $id = $vcl;
        $fuels =Vcl::where('id',$id)->with('vcl_hasmny_fuels', function($query) use ($request){
            $str_date =  $request->input('start');            
            $end_date = $request->input('end');
            $query->whereBetween('fuel_date',[$str_date, $end_date]);
            return $query->orderBy('fuel_date','DESC');
        })->get();
        }
        else{
            $fuels =Vcl::where('id',$id)->with('vcl_hasmny_fuels', function($query){
            $query;
        })->get();
        }
        
         return view('admin.fuel.show')->with(['fuels'=>$fuels,'fuel_vcls'=>$fuel_vcls]);
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $view_fuel = Fuel::where('vcl_id',$id)->orderBy('fuel_date','Desc')->get();
        $avg_fuel = Fuel::select('litre')->where('vcl_id',$id)->sum('litre');
        $avg_fuel = number_format($avg_fuel, 2); 
        $total_cash = Fuel::select('cash')->where('vcl_id',$id)->sum('cash');
        $total_cash = number_format($total_cash, 2);
        $vcl_plate = Vcl::where('id',$id)->first();        
        $vcl_type = Vcl::where('id',$id)->first()->pluck('fuel_type');


        // average fuel consumption calcullation

        $fuel_model = Fuel::where('vcl_id',$id)->get();
        $fuel_avg_consumption = 0;
        $fuel_consumtion = 0;
        $diff_km = 0;
        foreach ($fuel_model as $key => $q) {
            if ($q->prev_km > 0) {
                //Difference b/n current and previous distance
                $diff = $q->kilometre - $q->prev_km;
                // Litter
                $litter = $q->litre;
                // Fuel consumption ratio
                $fuel_consumtion = $diff / $litter; 
                // sum of the difference
                $diff_km = $diff_km + $diff;
            }
            
            $fuel_avg_consumption  = $fuel_avg_consumption + $fuel_consumtion;
            $key;
        }
        

        $average_fuel_counsumption = $fuel_avg_consumption / $key;
         $average_fuel_counsumption = number_format($average_fuel_counsumption, 2); 
        $km_average_deference = $diff_km;
        $km_average_deference = number_format($km_average_deference, 2); 

        
        
        return view('admin.fuel.edit',compact('view_fuel','km_average_deference','vcl_plate','vcl_type','total_cash','average_fuel_counsumption','avg_fuel'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
