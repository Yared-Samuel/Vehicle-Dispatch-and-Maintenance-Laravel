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



     public function index(FuelsDataTable $datatable)
     {

        $fuels =Vcl::with('vcl_hasmny_fuels')->get();
        // $fuels =Vcl::where('plate_id','Like','%')->with('vcl_hasmny_fuels')->get();
        // return $datatable->render('admin.fuel.index');
            
                return view('admin.fuel.index')->with(['fuels'=>$fuels]);
     } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vcls= Vcl::all();
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
        }else
        {
            Alert()->error('Pleas check your input!','warning');
            
        }


        
        return to_route('admin.fuel.create');
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
        $avg_fuel = Fuel::select('litre')->where('vcl_id',$id)->avg('litre');
        $total_cash = Fuel::select('cash')->where('vcl_id',$id)->sum('cash');
        // dd($avg_fuel);
        $vcl_plate = Vcl::where('id',$id)->first();
        
        $vcl_type = Vcl::where('id',$id)->first()->pluck('fuel_type');
        
        
        return view('admin.fuel.edit',compact('view_fuel','avg_fuel','vcl_plate','vcl_type','total_cash'));

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
