<?php

namespace App\Http\Controllers;

use App\Models\Vcl;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function fuel()
    {
        // dd('data');
        // $fuel_vcls = Vcl::get();
        // if (count($request->all()) > 0) {        
        //     $vcl = $request->input('vcl');
        //     $id = $vcl;
        //     $fuels =Vcl::where('id',$id)->with('vcl_hasmny_fuels', function($query) use ($request){
        //         $str_date =  $request->input('start');            
        //         $end_date = $request->input('end');
        //         $query->whereBetween('fuel_date',[$str_date, $end_date]);
        //         return $query;
        //     })->get();
        // }else{
        //         $fuels=Vcl::with('vcl_hasmny_fuels', function($query){
        //             $query->whereMonth('fuel_date', Carbon::now()->month)->get();
                    
        //         });
        // }

            

        return view('admin.reports.fuel');
        
    }
    
    // public function cost($request)
    // {
    //     return view('admin.reports.cost');
    // }


    
    












    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reports.fuel');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
