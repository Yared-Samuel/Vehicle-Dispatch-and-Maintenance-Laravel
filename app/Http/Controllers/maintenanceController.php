<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use App\Models\Maintenance;
use App\Models\Requester;
use App\Models\Vcl;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class maintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mtn_aprroveds= Requester::select('id','vcl_id','status','maintenancetype_id',
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
        
        
       $rqsts = Requester::with('rqst_hasone_mnts','rqst_blgto_vcls')
                    ->where('status','=','2')
                    // ->where('id','<>','$mainten')
                    ->get();
       $mtn_costs = Cost::all();
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
