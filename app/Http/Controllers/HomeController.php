<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function data_statistic()
    {
        return view('data-statistic');
    }

    public function form()
    {
        return view('form');
    }


    // public function http_request($url)
    // {

    //     // Mempersiapkan CURL
    //     $ch = curl_init();

    //     // set URL
    //     curl_setopt($ch, CURLOPT_URL, $url);

    //     // Aktifkan Fungsi Transfer Nilai yang Berupa String
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //     // Setting agar dapat dijalankan di Localhost
    //     // Mematikan SSL Verify(Https)
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    //     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    //     // Tampung Hasil ke dalam Variabel Ouput
    //     $output = curl_exec($ch);

    //     // Tutup Curl
    //     curl_close($ch);

    //     // Mengembalikan Hasil curl
    //     return $output;

    //     // Panggil Fungsi Http_request(url/API)
    //     $data = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi/");
    //     $data = json_decode($data, TRUE);
    // }

}
