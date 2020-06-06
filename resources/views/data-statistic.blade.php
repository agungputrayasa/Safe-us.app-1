<?php
    // ====- REST API DATA PROVINSI
        // $data = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi/");
        // $data = json_decode($data, TRUE);

   // ====- REST API DATA INDONESIA
        $dataList = file_get_contents("https://api.kawalcorona.com/indonesia/");
        $dataList = json_decode($dataList, TRUE);
?>

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
    <header class="navbarController">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top scrolling-navbar" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/Dist/Icon/Safe-us.png') }}" width="160" height="52" class="d-inline-block align-top" alt="" loading="lazy">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Sticky-nav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="Sticky-nav">
                    <div class="navbar-nav nav-2 ml-auto">
                        <a class="nav-item nav-link active" href="/Home"><i class="fa fa-caret-left" aria-hidden="true"></i> Back to home</a>
                        <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
                        <a class="nav-item nav-link disabled" href="#" id="clock">|</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="view">
            <div class="flex-center">
                <a href="#scroll" class="btn btn-primary">scrollDown</a>
            </div>
        </div>
    </header>


{{-- == Data Table Covid == --}}

    <div class="container area-data-covid">
        <div class="row dataContentTitle">
            <div class="col-md-12 covidIndo text-center">
                <span class="badge badge-info"><i class="fas fa-info-circle"></i> Covid-19 Data-Statistic</span>
                <h5 class="covidTitle text-center">Coronavirus Indonesia Live Data</h5>
                <p class="covidMessage">** Data from <a href="">KawalCorona</a></p>
            </div>
        </div>
    </div>

    <section class="container dataCard mt-4">
        <div class="row cardWorking mt-5">
            <div class="col-md-3 listCard">
                <div class="cardReport col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <img src="{{asset('assets/Dist/Icon/Positif.svg')}}" height="50" alt="">
                        <p class="title-items">
                            Positif Cases
                        </p>
                        <p class="subtitle-items">
                            Data-Update
                        </p>
                        <p class="value-items">
                            <?php echo $dataList[0]['positif'] ?>
                        </p>
                        <p class="desc-items">
                            Person
                        </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 listCard">
                <div class="cardReport col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <img src="{{asset('assets/Dist/Icon/Recovered.svg')}}" height="50" alt="">
                        <p class="title-items">
                            Recovered Cases
                        </p>
                        <p class="subtitle-items">
                            Data-Update
                        </p>
                        <p class="value-items">
                            <?php echo $dataList[0]['sembuh'] ?>
                        </p>
                        <p class="desc-items">
                            Person
                        </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 listCard">
                <div class="cardReport col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <img src="{{asset('assets/Dist/Icon/Die.svg')}}" height="50" alt="">
                        <p class="title-items">
                            Death Cases
                        </p>
                        <p class="subtitle-items">
                            Data-Update
                        </p>
                        <p class="value-items">
                            <?php echo $dataList[0]['meninggal'] ?>
                        </p>
                        <p class="desc-items">
                            Person
                        </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 listCard">
                <div class="cardReport col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <img src="{{asset('assets/Dist/Icon/Personalization.svg')}}" height="50" alt="">
                        <p class="title-items">
                            Hospitalizations
                        </p>
                        <p class="subtitle-items">
                            Data-Update
                        </p>
                        <p class="value-items">
                            <?php echo $dataList[0]['dirawat'] ?>
                        </p>
                        <p class="desc-items">
                            Person
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-md-12 mt-5 cardContent2">
                <div class="card">
                    <div class="card-header bg-white">
                        Statistik Kasus Coronavirus di Indonesia
                    </div>
                    <div class="card-body">
                        {!! $chart->container() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header bg-white">
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
                            {{-- <tbody id="table-data">
                                @php
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
                                @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $chart->script() !!}
    <script src="https://kit.fontawesome.com/0ef25f29a7.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>