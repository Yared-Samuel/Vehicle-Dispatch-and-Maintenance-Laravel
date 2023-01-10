<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestStoreRequest;
use App\Models\Maintenancetype;
use App\Models\Request;
use App\Models\Vcl;


class requestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = Request::all();
        // dd($requests);
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
        $mttyps= Maintenancetype::with('mtn_hasm_rqsts')->get();
       
        return view('admin.request.create')->with(['vcls'=>$vcls,'mttyps'=>$mttyps]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestStoreRequest $request)
    {
        
       Request::create([
        'request_date'=> $request->request_date,
        'request_by'=>$request->request_by,
        'vcl_id'=>$request->vcl_id,
        'maintenancetype_id'=>$request->maintenancetype_id,
        'description'=>$request->description,
       ]);
       

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
