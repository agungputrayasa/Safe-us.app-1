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
        $colors = $provinsi->map(function ($items) {
            return '#' . substr(md5(mt_rand()), 0, 6);
        });

        $chart = new CovidChart;
        $chart->labels($provinsi);
        $chart->dataset('Data Kasus Positif ', 'line', $confirmed)->backgroundColor($colors);

        return view('data-statistic', [
            'chart' => $chart,
        ]);
    }

    public function data()
    {
        return view('data-statistic');
    }
}
