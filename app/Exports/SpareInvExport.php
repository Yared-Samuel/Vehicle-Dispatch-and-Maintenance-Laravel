<?php

namespace App\Exports;

use App\Models\Spareinv;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;



class SpareInvExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        return view('admin.spareinv.index',[
            'spareinv' => Spareinv::all()
        ]);
    }

    
}
