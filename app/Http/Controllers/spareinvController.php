<?php

namespace App\Http\Controllers;

use App\Exports\SpareInvExport;
use App\Models\Item;
use App\Models\Spareinv;
use App\Models\Vcl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class spareinvController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spareInv = Spareinv::with('spareInItem')->orderBy('id','desc')->get();
        // dd($spareInv);
        return view('admin.spareinv.index')->with(['spareInv'=>$spareInv]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::orderBy('name')->get();
        $vcls = Vcl::all();
        return view('admin.spareinv.create',compact('items','vcls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $userId = Auth::id();
        $start_no = 100;
        $G = 'GRN_';
        $today = today()->toDateString();
       

        // genetaing GRN ID If not Exist
        $GRN_last = Spareinv::max('GRN_ref');
        if ($GRN_last) {
            $GRN_last_No = substr($GRN_last , strlen($G));
            $GRN_last_new = $GRN_last_No + 1;
            $GRN = $G.$GRN_last_new;
        }else {
            
            $GRN = $G.$start_no;
        }
            // number only from DRN reference
        // $GRN_No_only = substr($GRN , strlen($G));
        
    
            // dd($request->unit);
     foreach ($request->qty_in as $key => $insert) {
        
        $spareinv =  [     
            'GRN_ref'=> $GRN,       
            'date_in' => $today,
            'serial' => $request->serial[$key],
            'item_id' => $request->item_id[$key],
            'model' => $request->model[$key],
            'qty_in' => $request->qty_in[$key],
            'price_in' => $request->price_in[$key],
            'total_price' => $request->qty_in[$key] * $request->price_in[$key],
            'created_by'=>$userId,
            'created_at'=> now(),
    ];
    $spareinv_created = DB::table('spareinvs')->insert($spareinv); 
    
        $inventory = [
            'GRN_ref_inv'=> $GRN,
            'item_id' => $request->item_id[$key],
            'quantity_inv' => $request->qty_in[$key],            
            'type' => 'received',
            'created_at'=> now(),
            'created_by'=>$userId,

        ];
    $inventory_created = DB::table('inventories')->insert($inventory);  
        
    }

        
        return to_route('admin.spareinv.create');
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
