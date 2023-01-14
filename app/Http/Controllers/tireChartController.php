<?php

namespace App\Http\Controllers;

use App\Http\Requests\TirestoreRequest;
use App\Models\Category;
use App\Models\Driver;
use App\Models\Tirechart;
use App\Models\Vcl;
use Illuminate\Http\Request;

class tireChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tires_vcl = Tirechart::whereNotNull('vcl_id')->get();
        $tires_in_stores = Tirechart::whereNull('vcl_id')->get();

        return view('admin.tires.index',compact('tires_vcl','tires_in_stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vcls= Vcl::all();
        $drvrs= Driver::all();
        $vcl_cats = Category::all();
        
        return view('admin.tires.create',compact('vcls','drvrs','vcl_cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TirestoreRequest $request)
    {
        
        Tirechart::create([
            'serial_num' => $request->serial_num,
            'tire_type'=>$request->tire_type,
            'tire_price'=>$request->tire_price,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'start' => $request->start,
            'vcl_id' => $request->vcl_id,
            'driver_id' => $request->driver_id,
            
        ]);
        return to_route('admin.tires.index');
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
    public function edit( $id)
    {        
        $tirechart = Tirechart::find($id);
        $vcls= Vcl::all();
        $drvrs= Driver::all();
        return view('admin.tires.edit',compact('tirechart','vcls','drvrs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$tirechart)
    {
        $request->validate([
            'start'=>'required',
            'vcl_id'=>'required',
            'driver_id'=>'required'
        ]);
        $tirechart = Tirechart::find($tirechart);
        $tirechart->update([
            'vcl_id'=>$request->vcl_id,
            'start'=>$request->start,
            'driver_id'=>$request->driver_id
        ]);
        return to_route('admin.tires.index');
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
