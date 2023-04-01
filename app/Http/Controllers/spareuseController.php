<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpareUseRequest;
use App\Models\Driver;
use App\Models\Inventory;
use App\Models\Item;
use App\Models\Spareinv;
use App\Models\Usespare;
use App\Models\Vcl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class spareuseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spare_use = Usespare::with('use_blgtomny_vcls','spareUseItem')->get();     
        
        return view('admin.spareuse.index',compact('spare_use'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vcls = Vcl::all();
        $items = Item::all();
        $drivers = Driver::all();
        
        return view('admin.spareuse.create',compact('vcls','items','drivers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $start_no = 100;
        $G = 'GIV_';
        $today = today()->toDateString();
       

        // genetaing GRN ID If not Exist
        $GIV_last = Usespare::max('GIV_ref');
        if ($GIV_last) {
            $GIV_last_No = substr($GIV_last , strlen($G));
            $GIV_last_new = $GIV_last_No + 1;
            $GIV = $G.$GIV_last_new;
        }else {
            
            $GIV = $G.$start_no;
        }
            // number only from DRN reference
        // $GIV_No_only = substr($GIV , strlen($G));
        




        // $id = $request->item_id;
        // $qty_delv = $request->use_qty;
        // $spare_inv = Spareinv::where('id', $id)->first()->qty_in;      
        // $spare_used = Usespare::where('spareinv_id', $id)->sum('use_qty');
        // $spare_use = $spare_used + $qty_delv;
        
        

        $userId = Auth::id();


        // check if the product is available
        foreach ($request->item_id as $key => $insert) {
            $qty_issue = $request->use_qty[$key];
            $item_issue = $request->item_id[$key];
            $item_inv = Inventory::where('item_id',$item_issue)->sum('quantity_inv');
            if ($item_inv < $qty_issue) {
                
                Alert::error('Pleas Check', 'Check Your Stock')->width('500px')->padding('5px');
                return to_route('admin.reports.stock');
                
                break;
            }

        }



        foreach ($request->item_id as $key => $insert) {
            
       
            $spareuse =  [     
                'GIV_ref'=> $GIV,       
                'use_date' => $today,
                'item_id' => $request->item_id[$key],
                'use_qty' => $request->use_qty[$key],
                'vcl_id' => $request->vcl_id[$key],
                'driver_id' => $request->driver_id[$key],
                'mileage' => $request->mileage[$key],
                'status' => 1, // spare on truck
                'created_by'=>$userId,
                'created_at'=> now(),
        ];
        $spareinv_created = DB::table('usespares')->insert($spareuse); 
        
        

        $inventory = [
            'GIV_ref_inv' =>$GIV,
            'use_date' => $today,
            'mileage' => $request->mileage[$key],
            'vcl_id' => $request->vcl_id[$key],
            'driver_id' => $request->driver_id[$key],
            'type' => 'issued',
            'quantity_inv' => $request->use_qty[$key] * -1,
            'item_id' => $request->item_id[$key],
            'created_by'=>$userId,

        ];
        $inv = DB::table('inventories')->insert($inventory);

        // if ($spare_inv > $spare_use) {
        //     $usespare=Usespare::create([            
        //         'use_date' => $request->use_date,
        //         'use_qty' => $request->use_qty,
        //         'spareinv_id' => $request->spareinv_id,
        //         'vcl_id' => $request->vcl_id,
        //         'mileage' => $request->mileage,
        //         'driver_name' => $request->driver_name,
        //         'desc' => $request->desc,    
        //         'created_by'=>$userId,           

        //     ]);

            
        //         $usespare->use_blgtomny_vcls()->attach($request->spareinv_id);
            
            
            
        //     toast('Your Product has been submited!','success')->timerProgressBar();
            
        // } else {
        //     Alert::error('Low stock', 'Check Your Stock')->width('500px')->padding('5px');

        // }
        
        } 
        return to_route('admin.spareuse.create');
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
