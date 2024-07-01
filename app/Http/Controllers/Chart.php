<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class Chart extends Controller
{
    public function index()
    {
        $sales = Sensor::all();
        $data = [
            'labels' => $sales->pluck('suhu'),
            'datasets' => [
                [
                    'label' => 'Sales Data',
                    'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
                    'borderColor' => 'rgba(255, 99, 132, 1)',
                    'data' => $sales->pluck('suhu'),
                ],
            ],
        ];

        return view('admin.dashboard.index', compact('data'));
    }
}
