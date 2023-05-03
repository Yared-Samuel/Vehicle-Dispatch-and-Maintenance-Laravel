<?php

namespace App\Http\Controllers;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
// ...


use Illuminate\Http\Request;

class dashController extends Controller
{
    public function index()
    {

        $chart_options = [
            'chart_title' => 'Vehicle',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Vcl',
            // 'relationship_name' => 'vcl_hasmny_fuels',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];
        $chart1 = new LaravelChart($chart_options);
        
        return view('dashboard', compact('chart1'));
    }
}
