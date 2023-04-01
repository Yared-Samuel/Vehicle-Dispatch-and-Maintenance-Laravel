<?php

namespace App\Http\Controllers;

use App\Http\Requests\CostStoreRequest;
use App\Models\Cost;
use App\Models\Driver;
use App\Models\Mtn_cost;
use App\Models\Requester;
use App\Models\Vcl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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



        $cost_vcls = Mtn_cost::with('mtnnCost_blgto_vcls')->orderBy('cost_date','desc')->get()->groupBy('requester_id');
        
        
        // $costs = Mtn_cost::with('mtnnCost_blgto_vcls')->get();

        

        // if (count($request->all()) > 0) {
        //     $vcl = $request->input('vcl');
            
            
        //     $cost_vcls = Vcl::where('id','=',$vcl)->with('vcl_hasmny_mtnCost',function ($date_range) use ($request){
        //                         $str_date =  $request->input('start');            
        //                         $end_date = $request->input('end');
        //                          $date_range->whereBetween('cost_date',[$str_date, $end_date])->get()
        //                         ->groupBy('requester_id ')
        //                          ;
        //                                  return $date_range;
        //                                          })->get();  
        //         dd($cost_vcls);
                                                 
        // }else{
        //     $cost_vcls = Vcl::with('vcl_hasmny_mtnCost')->get()->groupBy('requester_id ');
        //     dd($cost_vcls);

            
        // }
        return view('admin.cost.index',compact('cost_vcls'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.cost.create');      
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $url = $request->url();
        // dd($url);

        // $userId = Auth::id();

        // $cash = $request->cost_cash;
        // $qty_in = $request->qty;
        // $totalCost = $cash + $qty_in;
        // // store cost data of the recent maintained vehicle
        // $cost_submit = Cost::create([
        //     'cost_date'=> $request->cost_date,
        //     'cost_desc'=> $request->cost_desc,
        //     'cost_cash'=>$request->cost_cash,
        //     'qty'=>$request->qty,
        //     'total_cost'=>$totalCost,
        //     'ref_no'=>$request->ref_no,
        //     'garage_name'=>$request->garage_name,
        //     'driver_id'=>$request->driver_id,
        //     'requester_id'=>$request->requester_id,
        //     'created_by'=>$userId,
            
        //    ]);


        //    $lastId = Cost::select('id')->orderBy('id','desc')->first() ?? 0;
        //     $mtn_cost = Mtn_cost::create([
        //     'cost_id'=>$lastId,
        //     'cost_date'=> $request->cost_date,
        //     'cost_desc'=> $request->cost_desc,
        //     'cost_cash'=>$request->cost_cash,
        //     'qty'=>$request->qty,
        //     'total_cost'=>$totalCost,
        //     'ref_no'=>$request->ref_no,
        //     'garage_name'=>$request->garage_name,
            
            
        //    ]);

           




        // if ($cost_submit && $mtn_cost) {            
        //        toast('Your Cost has been submited!','success');

               
        // }elseif(!$cost_submit || !$mtn_cost){

        //     Alert()->error('Not Submited!','warning');
            
        // }

        // return to_route('admin.cost.create');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $cost = Mtn_cost::where('requester_id',$id)->with('mtnnCost_blgto_vcls')->get();
        // dd($cost);
        
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
        
        // dd($rqst_id);
        return view('admin.cost.edit',['id'=>$id]);
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
        
        $mtn_cost = Requester::find($id);
        $userId = Auth::id();
        DB::table('requesters')->where('id', $id)->update(['status' => 4]);
        
        foreach ($request->cost_date as $key => $insert) {
            $saveCost = [
                'cost_date' =>$request->cost_date[$key],
                'cost_desc' =>$request->cost_desc[$key],
                'cost_cash' =>$request->cost_cash[$key],
                'qty' =>$request->qty[$key],
                'total_cost'=> $request->qty[$key] * $request->cost_cash[$key],                
                'ref_no' =>$request->ref_no[$key],
                'created_by' => $userId,
            ];
            
          $cost_id = DB::table('costs')->insertGetId($saveCost);

          $saveMtnCost = [
                // insert mtnCost Table with cost data
                'cost_date' =>$request->cost_date[$key],
                'cost_desc' =>$request->cost_desc[$key],
                'cost_cash' =>$request->cost_cash[$key],
                'qty' =>$request->qty[$key],
                'total_cost'=> $request->qty[$key] * $request->cost_cash[$key],                
                'ref_no' =>$request->ref_no[$key],

                // insert mtnCost Table with request
                'cost_id'=> $cost_id,
                'requester_id' =>$mtn_cost->id,
                'vcl_id' =>$mtn_cost->vcl_id,
                // status = 3 -> Costed but Not replanished  
                'status' => 3,       
                
                'created_by' => $userId,
                
          ];

          DB::table('mtn_costs')->insert($saveMtnCost);

          
        }
        
        

        
        return to_route('admin.cost.index');
        
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */

    
}
