<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use App\Models\Mtn_cost;
use App\Models\Requester;
use App\Models\Vcl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class maintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mtn_aprroveds= Requester::select('id','vcl_id','start_date','status','mtn_type','description',
                                                        'request_date')
                                    ->whereBetween('status',[2,3])
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

        
        
        // $costs = Cost::with('cost_blgto_rqsts')
        //                 ->where('requester_id','=',null)
        //                 ->get();
        return view('admin.maintenance.edit')
        ->with(['rqst_approved'=>$rqst_approved
        // ,'costs'=>$costs
    ]);

        return to_route('admin.cost.create',compact('id'));
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
        $request->validate([
            
            'end_date'=>'required',
            'kilometer'=>'required'
        ]);

        $mtn_complete = Requester::find($id);
        $mtn_completed =  $mtn_complete->update([
            
            'end_date'=>$request->end_date,
            'kilometer'=>$request->kilometer,
            'status'=>3,
            'timestamps'=>now(),
        ]);
        $mtn_cost = Mtn_cost::where('requester_id',$id);
       $mtn_cost_tbl = $mtn_cost->update([
            'status'=>3,
        ]);


        if ($mtn_completed && $mtn_cost_tbl) {
            toast('Maintenance completed!','success');
        }else{
            Alert()->error('Something Went Wrong!','warning');
        }




        return to_route('admin.maintenance.index');
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
