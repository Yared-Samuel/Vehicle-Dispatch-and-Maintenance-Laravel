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
        $mtn_aprroveds= Requester::select('id','vcl_id','schedule','start_date','end_date','status','mtn_type','description',
                                                        'request_date')
                                    ->where('status',2)
                                    ->get();
        $mtn_started= Requester::select('id','vcl_id','schedule','start_date','end_date','status','mtn_type','description',
                                                        'request_date')
                                    ->where('status',3)
                                    ->get();
        $mtn_completed= Requester::select('id','vcl_id','schedule','start_date','end_date','status','mtn_type','description',
                                                        'request_date')
                                    ->where('status',4)
                                    ->get();
        
        return view('admin.maintenance.index',compact('mtn_aprroveds','mtn_started','mtn_completed'));
        
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
        foreach ($rqst_approved as $key => $rqst_approves) {
            $start_date_check = $rqst_approves->start_date ?? null;
        $end_date_check = $rqst_approves->end_date ?? null;
        $status_check = $rqst_approves->status;
        }
        
        
        
        return view('admin.maintenance.edit',compact('rqst_approved','start_date_check','end_date_check','status_check'));

        // return to_route('admin.cost.create',compact('id','start_date_check','end_date_check','status_check'));
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
        $start = $request->start_date ?? null;
        $end = $request->end_date ?? null;
        

        // 1 requested 2 Acepted or in maintenance 3 maintenance started 4 maintenance completed 5 cost applied

        $mtn_complete = Requester::find($id);
        $check_start = $mtn_complete->start_date;
        $check_end = $mtn_complete->end_date;
        $check_kilometer = $mtn_complete->kilometer;

        if ($start != null && $end != null) {
            $mtn_completed =  $mtn_complete->update([
            
                'start_date'=>$start,
                'end_date'=>$end,
                'kilometer'=>$request->kilometer,
                'status'=>4,
                'timestamps'=>now(),
            ]);
            toast('Maintenance completed!','success');

        }elseif (is_null($start) && $end != null) {
            $mtn_completed =  $mtn_complete->update([
            
                // 'start_date'=>$start,
                'end_date'=>$end,
                'kilometer'=>$request->kilometer,
                'status'=>4,
                'timestamps'=>now(),
            ]);

            toast('Maintenance completed!','success');
        }elseif ($start <> null && is_null($end)) {
            $mtn_completed =  $mtn_complete->update([
            
                'start_date'=>$start,
                // 'end_date'=>$end,
                'kilometer'=>$request->kilometer,
                'status'=>3,
                'timestamps'=>now(),
            ]);
            toast('Vehicle maintenance started!','success');

        }else {
            Alert()->error('Something Went Wrong!','warning');
        }


        
        


        // if ($mtn_completed) {
        //     toast('Maintenance completed!','success');
        // }else{
        //     Alert()->error('Something Went Wrong!','warning');
        // }




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
