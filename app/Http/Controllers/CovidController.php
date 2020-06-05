<?php

namespace App\Http\Controllers;

use App\Charts\CovidChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    public function chart()
    {
        $suspects = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi/')->json());
        $suspectData = $suspects->flatten(1);

        $provinsi = $suspectData->pluck('Provinsi');
        $confirmed = $suspectData->pluck('Kasus_Posi');

        $chart = new CovidChart;
        $chart->labels($provinsi);
        $chart->dataset('Data Kasus Positif di Indonesia', 'line', $confirmed);

        return view('data-statistic', [
            'chart' => $chart,
        ]);
    }
}
