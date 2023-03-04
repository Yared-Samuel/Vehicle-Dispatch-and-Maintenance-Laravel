<?php

namespace App\Http\Controllers;

use App\Http\Requests\CostStoreRequest;
use App\Models\Cost;
use App\Models\Driver;
use App\Models\Requester;
use App\Models\Vcl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class costController extends Controller
{


    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        
        $costs = Cost::with('cost_blgto_rqsts')->get();

        // dd($costs);

        if (count($request->all()) > 0) {
            $vcl = $request->input('vcl');
            
            
            $cost_vcls = Vcl::where('id','=',$vcl)->with('vcl_cost',function ($date_range) use ($request){
                                $str_date =  $request->input('start');            
                                $end_date = $request->input('end');
                                 $date_range->whereBetween('cost_date',[$str_date, $end_date])->get();
                                         return $date_range;
                                                 })->get();  
                                                 
        }else{
            $cost_vcls = Vcl::with('vcl_cost')->get();
            
        }
        return view('admin.cost.index',compact('costs','cost_vcls'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // After maintenance select the latest vcl maintained with relation to request_id
        $cost = Cost::select('requester_id')->get();       
        $vcls=Requester::with('rqst_blgto_vcls')
                ->where('status','=',3)
                ->where('updated_at',now())
                ->orderBy('updated_at', 'DESC')
                ->get()->first();
        $drvrs = Driver::all();
        

        
        if ($vcls) {
            
            return view('admin.cost.create',compact('vcls','drvrs'));
        } else {
            
            $vcls=Requester::with('rqst_blgto_vcls')
                ->where('status','=',3)
                ->orderBy('updated_at', 'DESC')
                ->get();
            // dd($vcls);
                return view('admin.cost.create',compact('vcls','drvrs'));
        }
        
        
        
    
               
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CostStoreRequest $request)
    {

        $userId = Auth::id();
        // store cost data of the recent maintained vehicle
        $cost_submit = Cost::create([
            'cost_date'=> $request->cost_date,
            'spare_cost_desc'=> $request->spare_cost_desc,
            'spare_cost'=>$request->spare_cost,
            'spare_qty'=>$request->spare_qty,
            'mech_cost_desc'=>$request->mech_cost_desc,
            'mech_cost'=>$request->mech_cost,
            'other_cost_desc'=>$request->other_cost_desc,
            'other_cost'=>$request->other_cost,
            'ref_no'=>$request->ref_no,
            'garage_name'=>$request->garage_name,
            'driver_id'=>$request->driver_id,
            'requester_id'=>$request->requester_id,
            'created_by'=>$userId,
            
           ]);
        if ($cost_submit) {            
               toast('Your Cost has been submited!','success');

               
        }elseif(!$cost_submit){

            alert()->error('Not Submited!','warning');
            
        }

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
         $cost = Cost::with('cost_blgto_rqsts')->where('id',$id)->get();
       
        
        // $cost_detail = Cost::where('id',$id)->->get();
        
          
        return view('admin.cost.show',compact('cost'));

           
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
