<?php

namespace App\Http\Controllers;


use App\Http\Requests\RequestStoreRequest;

use App\Models\Maintenancetype;
use App\Models\Mtn_cost;
use App\Models\Requester;
use App\Models\Vcl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class requestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = Requester::where('status','=','1')
                                ->get();
        
        return view('admin.request.index',compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $vcls= Vcl::with('vcl_hasm_rqsts')->get();
        $rqst_approved = Requester::with('rqst_blgto_vcls')
                            ->where('status','<','3')
                                ->get()
                                    ->pluck('rqst_blgto_vcls');
        
        
        
        // dd($rqst_approved);
       
        return view('admin.request.create')->with(['vcls'=>$vcls,'rqst_approved'=>$rqst_approved]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreRequest $request)
    {
        $userId = Auth::id();

        
        
      $rqst = Requester::create([

        'request_date'=> $request->request_date,
        'request_by'=>$request->request_by,
        'vcl_id'=>$request->vcl_id,
        'mtn_type'=>$request->mtn_type,
        'description'=>$request->description,
        'created_by'=>$userId,
       ]);

       $lastId = Requester::select('id')->orderBy('id','desc')->first();
       
      $mtn_cost= Mtn_cost::create([
        'requester_id'=>$lastId->id,
        'vcl_id'=>$request->vcl_id,
        'created_by'=>$userId,

       ]);

       if ($rqst && $mtn_cost) {            
        toast('Maintenance Requested!','success');

        
        }elseif(!$rqst || !$mtn_cost){

            alert()->error('Not Submited!','warning');
            
        }

       
       
       return to_route('admin.request.index');
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
        $mtn = Requester::find($id);     
         
        
        return view('admin.request.edit', compact('mtn'));

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
        // 1 requested 2 Acepted or in maintenance 3 maintenance completed
        
        $req = Requester::find($id);
        
        $req_done= $req->update([
            'start_date'=>$request->start_date,
            'status'=>$request->status,
           
        ]);
        $mtn_cost = Mtn_cost::where('requester_id',$id);
        $mtn_cost_tbl = 
            $mtn_cost->update([
                'status'=>2,
            ]);



        if ($req_done && $mtn_cost_tbl) {
            toast('Maintenance Request Accepted!','success');
        }else{
            Alert()->error('Something Went Wrong!','warning');
        }



        return to_route('admin.request.index');
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
