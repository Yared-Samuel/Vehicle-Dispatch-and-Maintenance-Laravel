<?php

namespace App\Http\Controllers;

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
        $spare_inv = Spareinv::get();
        return view('admin.spareinv.index')->with(['spare_inv'=>$spare_inv]);
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
        Spareinv::create([            
            'date_in' => $request->date_in,
            'serial' => $request->serial,
            'spare_name' => $request->spare_name,
            'spare_type' => $request->spare_type,
            'qty_in' => $request->qty_in,
            'unit' => $request->unit,
            'price_in' => $request->price_in,
            
        ]);
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
