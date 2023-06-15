<?php

namespace App\Http\Controllers;

use App\Http\Requests\VclStoreRequest;
use App\Models\Vcl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class vclController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vcls = Vcl::get();
        
        
               
        return view('admin.vcls.index',compact('vcls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.vcls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VclStoreRequest $request)
    {

        $userId = Auth::id();
        $image = $request->file('image');
       $image =  $image->store('public/images/Vcl_Image');
        
        // dd($image);
        
        Vcl::create([
            'plate_id' => $request->plate_id,
            'plate_code' => $request->plate_code,
            'plate_city' => $request->plate_city,
            'chassis_number' => $request->chassis_number,
            'motor_number' => $request->motor_number,
            'vcl_model' => $request->vcl_model,
            'fuel_type' => $request->fuel_type,
            'category_name' => $request->category_name,
            'purchase_date' => $request->purchase_date,
            'manufacture_date' => $request->manufacture_date,
            'created_by'=>$userId,
            'image' => $image
        ]);
        return to_route('admin.vcls.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vcl_detail = Vcl::where('id',$id)->get();
        // dd($vcl_detail);
        return view('admin.vcls.show',compact('vcl_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vcl_count = Vcl::get()->count();
        
        $vcl_diesel = Vcl::where('fuel_type','diesel')->get();
        
        $vcl_benzene = Vcl::where('fuel_type','benzene')->get();

        $vcl_category = Vcl::get()->groupBy('category_name');
        
        // dd($vcl_category);
        return view('admin.vcls.edit',compact('vcl_count','vcl_diesel','vcl_benzene','vcl_category'));
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
