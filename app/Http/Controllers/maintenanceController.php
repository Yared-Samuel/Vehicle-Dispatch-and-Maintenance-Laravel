<?php

namespace App\Http\Controllers;

use App\Models\Cost;

use App\Models\Requester;
use App\Models\Vcl;
use Illuminate\Http\Request;


class maintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mtn_aprroveds= Requester::select('id','vcl_id','status','mtn_type','description',
                                                        'request_date')
                                    ->where('status','2')
                                    ->get();
        
        return view('admin.maintenance.index',compact('mtn_aprroveds'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
       $rqsts = Requester::with('rqst_blgto_vcls')
                    ->where('status','=','2')                    
                    ->get();                    
       $mtn_costs = Cost::all();

        // $costs_filtered = $mtn_costs->filter(function($mtn_costs){
        //     return $mtn_costs->;
        // });
        // dd($costs_filtered);

       return view('admin.maintenance.create')
                ->with(['rqsts'=>$rqsts,'mtn_costs'=>$mtn_costs]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
        //
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
        $rqst_approved = Requester::find($id)
                        ->with('rqst_blgto_vcls')
                        ->where('id','=',$id)
                        ->get();

        //dd($rqst_approved);
        
        $costs = Cost::with('cost_blgto_rqsts')
                        ->where('requester_id','=',null)
                        ->get();
        return view('admin.maintenance.edit')
        ->with(['rqst_approved'=>$rqst_approved,'costs'=>$costs]);
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
