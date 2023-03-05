<?php

namespace App\Http\Controllers;

use App\Models\Spareinv;
use App\Models\Usespare;
use Illuminate\Http\Request;

class printController extends Controller
{
    public function export_inv_grn($id)
    {
        
        $inv_grns = Spareinv::where('id',$id)->get();
        
        return view('admin.print.spareinvexp')->with(['inv_grns'=>$inv_grns]);

    }

    public function export_use_grn($id)
    {
        $inv_use_grns = Usespare::where('id',$id)->with('uses_blgto_invs','use_blgtomny_vcls')->get();
        

        return view('admin.print.spareuseexp',compact('inv_use_grns'));
    }
}
