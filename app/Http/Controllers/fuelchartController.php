<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuelStoreRequest;
use App\Models\Fuel;
use App\Models\Vcl;
use Illuminate\Http\Request;

class fuelchartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



     public function index()
     {
        // $fuels = Fuel::select('fuel_date','kilometre','litre','cash','vcl_id','created_at')
        //     ->with('fuel_blgto_vcls') 
        //     ->orderBy('fuel_date', 'desc')
        //     ->orderBy('vcl_id', 'desc')                   
        //     ->get();

        $fuels =Vcl::
                    with('vcl_hasmny_fuels')
                    ->Latest()                    
                    ->get();
            
            
                // foreach ($fuels as $value) {
                //    dd($value->vcl_hasmny_fuels->kilometre);
                // }
            
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
        Fuel::create([            
            'fuel_date' => $request->fuel_date,
            'vcl_id' => $request->vcl_id,
            'cash' => $request->cash,
            'litre' => $request->litre,
            'kilometre' => $request->kilometre,
            
        ]);
        return to_route('admin.fuel.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
