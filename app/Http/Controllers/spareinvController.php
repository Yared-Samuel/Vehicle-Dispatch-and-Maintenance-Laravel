<?php

namespace App\Http\Controllers;

use App\Exports\SpareInvExport;
use App\Models\Spareinv;
use Illuminate\Http\Request;
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
        $spareInv = Spareinv::get();
        //return Spareinv::download(new SpareInvExport, 'spareinv.xlsx' );
        return view('admin.spareinv.index')->with(['spareInv'=>$spareInv]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.spareinv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spareinv =  Spareinv::create([            
            'date_in' => $request->date_in,
            'serial' => $request->serial,
            'spare_name' => $request->spare_name,
            'spare_model' => $request->spare_model,
            'spare_type' => $request->spare_type,
            'qty_in' => $request->qty_in,
            'unit' => $request->unit,
            'price_in' => $request->price_in,
        ]);

        if ($spareinv) {
            toast('Your Product has been submited!','success')->timerProgressBar();
        }else {
            Alert::error('Error', 'Something went wrong')->width('500px')->padding('5px');
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
