<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MurosChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $murosChart = new MurosChart;
        $murosChart->labels(['Jan', 'Feb', 'Mar']);
        $murosChart->dataset('Muros by trimester', 'line', [10, 25, 13])
            ->color("rgb(255, 99, 132)")
            ->backgroundcolor("rgb(255, 99, 132)");
        return view('murosChart', [ 'murosChart' => $murosChart ] );
    }
}
