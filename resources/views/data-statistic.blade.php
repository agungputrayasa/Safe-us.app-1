 <?php
    // ====- REST API DATA PROVINSI
    //     $data = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi/");
    //     $data = json_decode($data, TRUE);
    // ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safe Us | Data Statistic COVID-19</title>
    

    {{-- ====- GOOGLE FONTS -===
====================================--}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- ====- CDN STYLE -===
====================================--}}
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    {{-- ====- LOCAL STYLE -===
====================================--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Style/style.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('assets/Dist/Icon/logo.png')}}">
    <script src="{{asset('assets/Js/main.js')}}" type="text/javascript"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white" id="navbar">
        <div class="container">
                <a href="/Home" class="btn btn2b btn-navbar2b"><i class="fas fa-sign-out-alt"></i> &nbsp;Back To Home</a>
                <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active hidden-none" href="#"><span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#"></a>
                    <a class="nav-item nav-link" href="#"></a>
                    <a class="nav-item nav-link" href="#"></a>
                    <a class="nav-item nav-link" href="#"></a>
                    <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
                    <button class="btn btnme btn-navbar" id="clock"></button>
                </div>
            </div>
        </div>
    </nav>

{{-- == Data Table Covid == --}}

    <div class="container area-data-covid">

        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
        
        
        {{-- <div class="card">
            <div class="card-header bg-danger text-white">
                <h6>Data Kasus COVID-19 di Indonesia Berdasarkan Provinsi</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Provinsi</th>
                            <th>Nama Provinsi</th>
                            <th>Positif</th>
                            <th>Sembuh</th>
                            <th>Meninggal</th>
                        </tr>
                    </thead>
                    <tbody id="table-data">
                        {{-- @php
                            $i=1;

                        @endphp
                        @foreach ($data as $me)
                        
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{ $me['attributes']['Kode_Provi']}}</td>
                            <td>{{ $me['attributes']['Provinsi']}}</td>
                            <td>{{ $me['attributes']['Kasus_Posi']}}</td>
                            <td>{{ $me['attributes']['Kasus_Semb']}}</td>
                            <td>{{ $me['attributes']['Kasus_Meni']}}</td>
                        </tr>
                        
                            @php
                                $i++;
                            @endphp
                        @endforeach --}}
                    {{-- </tbody>
                </table>
            </div>
        </div> --}}
    </div>
        
   <?php

    // echo "<pre>";
    //     print_r($data);
    // echo "</pre>";

    ?>


    <script src="https://kit.fontawesome.com/0ef25f29a7.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>