<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpareUseRequest;
use App\Models\Spareinv;
use App\Models\Usespare;
use App\Models\Vcl;
use Illuminate\Http\Request;
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
        $spare_use = Usespare::with('uses_blgto_invs','use_blgtomny_vcls')->get();
        //dd($spare_use);
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
        $items = Spareinv::all();

        return view('admin.spareuse.create',compact('vcls','items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SpareUseRequest $request)
    {
        $id = $request->spareinvs_id;
        $qty_delv = $request->use_qty;
        $spare_inv = Spareinv::where('id', $id)->first()->qty_in;      
        $spare_used = Usespare::where('spareinvs_id', $id)->sum('use_qty');
        $spare_use = $spare_used + $qty_delv;
        
        

        if ($spare_inv > $spare_use) {
            $usespare=Usespare::create([            
                'use_date' => $request->use_date,
                'use_qty' => $request->use_qty,
                'spareinvs_id' => $request->spareinvs_id,
                'vcl_id' => $request->vcl_id,
                'mileage' => $request->mileage,
                'driver_name' => $request->driver_name,
                'desc' => $request->desc,               

            ]);

            
                $usespare->use_blgtomny_vcls()->attach($request->spareinvs_id);
            
            
            
            toast('Your Product has been submited!','success')->timerProgressBar();
            
        } else {
            Alert::error('Low stock', 'Check Your Stock')->width('500px')->padding('5px');

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
