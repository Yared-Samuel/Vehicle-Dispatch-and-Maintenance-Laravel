<?php

namespace App\Http\Controllers;

use App\Http\Requests\CostStoreRequest;
use App\Models\Cost;
use App\Models\Requester;
use App\Models\Vcl;
use Illuminate\Http\Request;

class costController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costs = Cost::with('cost_blgto_rqsts')->get();
        $cost_vcls = Vcl::with('vcl_cost')->get();
       
        
        return view('admin.cost.index',compact('costs','cost_vcls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cost = Cost::select('requester_id')->get();       
            $vcls=Requester::with('rqst_blgto_vcls')
                ->where('status','=',3)
                ->get();
        
    
               
        
        return view('admin.cost.create',compact('vcls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CostStoreRequest $request)
    {
        // dd($request);
        Cost::create([
            'cost_date'=> $request->cost_date,
            'spare_cost_desc'=> $request->spare_cost_desc,
            'spare_cost'=>$request->spare_cost,
            'spare_qty'=>$request->spare_qty,
            'mech_cost_desc'=>$request->mech_cost_desc,
            'mech_cost'=>$request->mech_cost,
            'other_cost_desc'=>$request->other_cost_desc,
            'other_cost'=>$request->other_cost,
            'ref_no'=>$request->ref_no,
            'requester_id'=>$request->requester_id,
            
           ]);

           return to_route('admin.cost.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

           
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
