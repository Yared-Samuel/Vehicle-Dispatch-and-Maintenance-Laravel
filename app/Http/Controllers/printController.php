<?php

namespace App\Http\Controllers;

use App\Models\Spareinv;
use App\Models\Usespare;
use Illuminate\Http\Request;

class printController extends Controller
{
    public function export_inv_grn($id)
    {
        
        $inv_grns = Spareinv::with('spareInItem')->where('GRN_ref',$id)->get();
        $Date = ($inv_grns[1]->date_in);
        $GRN = $id;
        return view('admin.print.spareinvexp')->
            with(['inv_grns'=>$inv_grns,'Date'=>$Date,'GRN'=>$GRN]);

    }

    public function export_use_grn($id)
    {
        $inv_use_grns = Usespare::where('id',$id)->with('uses_blgto_invs','use_blgtomny_vcls')->get();
        

        return view('admin.print.spareuseexp',compact('inv_use_grns'));
    }
}
