<?php

namespace App\Http\Controllers;

use App\Exports\FuelExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class exportController extends Controller
{
    public function fuelExport() {
        return Excel::download(new FuelExport, 'fuel.xlsx');
    }
    
}
