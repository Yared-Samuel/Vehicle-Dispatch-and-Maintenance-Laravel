<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use App\Http\Requests\FuelStoreRequest;
use App\Models\Fuel;
use App\Models\Vcl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class fuelchartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



     public function index()
     {

        $fuels =Vcl::with('vcl_hasmny_fuels')->get();
            
            
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
        Fuel::create([            
            'fuel_date' => $request->fuel_date,
            'vcl_id' => $request->vcl_id,
            'cash' => $request->cash,
            'litre' => $request->litre,
            'kilometre' => $request->kilometre,
            'created_by'=>$userId,
            
        ]);
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
        if (count($request->all()) > 0 & count($request->input('vcl')) > 0) {        
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
        //
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
