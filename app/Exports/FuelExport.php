<?php

namespace App\Exports;

use App\Models\Vcl;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FuelExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
       
            return view('admin.fuel.index', [
                'fuels' => Vcl::query()->with('vcl_hasmny_fuels')
            ]);
        
    }
}
