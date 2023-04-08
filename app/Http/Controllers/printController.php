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
        $Date = ($inv_grns[0]->date_in);
        $GRN = $id;
        return view('admin.print.spareinvexp')->
            with(['inv_grns'=>$inv_grns,'Date'=>$Date,'GRN'=>$GRN]);

    }

    public function export_use_grn($id)
    {
        $inv_use = Usespare::with('spareUseItem','use_blgtomny_vcls')->where('GIV_ref',$id)->get();
        // dd($inv_use);
        $dates = ($inv_use[0]->use_date);
        $doc_no = ($inv_use[0]->id);
        $created = ($inv_use[0]->created_at);
        // dd($created)->date();
        $total_use = $inv_use->sum('use_qty');
        // dd($total_use);
        // $inv_use_grns = Usespare::where('id',$id)->with('uses_blgto_invs','use_blgtomny_vcls')->get();
        

        return view('admin.print.spareuseexp',compact('inv_use','dates','total_use','doc_no','created'));
    }
}
