<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaintenancetypeStoreRequest;
use App\Models\Maintenancetype;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class maintenanceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mnts = Maintenancetype::all();

        return view('admin.maintenancetype.index', compact('mnts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.maintenancetype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaintenancetypeStoreRequest $request)
    {
        
        Maintenancetype::create([
            'maintenance_name'=>$request->maintenance_name
        ]);

        return to_route('admin.maintenancetype.index');
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
    public function edit(Maintenancetype $maintenancetype)
    {
        return view('admin.maintenancetype.edit',compact('maintenancetype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maintenancetype $maintenancetype)
    {
        $request->validate([
            'maintenance_name'=>'required'
        ]);

        $maintenancetype->update([
            'maintenance_name'=>$request->maintenance_name
        ]);
        return to_route('admin.maintenancetype.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maintenancetype $maintenancetype)
    {
        $maintenancetype->delete();

        return to_route('admin.maintenancetype.index');
    }
}
