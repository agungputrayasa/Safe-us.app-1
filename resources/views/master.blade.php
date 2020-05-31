<?php
    // $url = file_get_contents('https://api.kawalcorona.com/indonesia/');
    // $data = json_decode($url,true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safe Us | Safe Yourself and Others</title>
    

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- Added Style --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{ asset('assets/Dist/Icon/logo.png')}}">
</head>
<body>

        {{--=== Navbar Website ===--}}
        <nav class="navbar navbar-expand-lg navbar-light bg-white" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/Dist/Icon/Safe-us.png') }}" width="160" height="52" class="d-inline-block align-top" alt="" loading="lazy">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Symptoms</a>
                        <a class="nav-item nav-link" href="#">Contagion</a>
                        <a class="nav-item nav-link" href="#">Prevention</a>
                        <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
                        <button class="btn btnme btn-navbar"><i class="fas fa-phone-alt"></i> Emergency Call</button>
                    </div>
                </div>
            </div>
        </nav>

        {{--=== Content 1 ===--}}
        <div class="container">
            <div class="working-area">
                <div class="row content-area">
                    <div class="col-md-6 area-left">
                        <span class="badge badge-info"><i class="fas fa-info-circle"></i> Covid-19 Alert</span>
                        <h3 class="message-covid-1">Stay At Home Quarantine<br>To Stop Corona Virus</h3>
                        <p class="desc-covid-1">There Is No Spesific Medicine To Prevent Or Treat Coronovirus<br>
                        Disease <a href="">(COVID-19)</a>.People May Need Supportive Care To.</p>
                        <button type="button" class="btn btnme2 btn-symptoms">Check Symptoms</button>
                    </div>
                    <div class="col-md-6 area-right">
                        <img src="{{ asset('assets/Dist/Design/Art-1.png')}}" width="574px" height="660px" alt="Symptoms Covid-19">
                    </div>
                </div>
            </div>

            {{--=== Data Human Infection ===--}}
            <div class="data-working">
                <div class="row data-content">
                    <div class="col md-12 area-centre">
                        <div class="data-statistic">
                            <img src="{{asset('assets/Dist/Icon/Box-Data.png')}}" width="1160px" height="220px" alt="">
                        </div>
                        <div class="data-source">
                            <div class="source-value">
                                <h6 class="source">*** Data statistic COVID-19 in Indonesia, Source : <a href="https://kawalcorona.com/">KawalCorona</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row list-data">
                    <div class="col-md-3 data-center">
                        <div class="counter">
                            <span class="data-value-1" style="color: #7A7A8F">INDONESIA</span>
                            <p class="data-desc"  style="color: #7A7A8F">Country</p>
                        </div>
                    </div>
                    <div class="col-md-3 data-center">
                        <div class="counter">
                            <span class="data-value" id="value-1" style="color: black">25.216</span>
                            <p class="data-desc" style="color: black">Confirmed Cases</p>
                        </div>
                    </div>
                    <div class="col-md-3 data-center">
                        <div class="counter">
                            <span class="data-value" id="value-2" style="color:#4CD137">6.492</span>
                            <p class="data-desc" style="color:#4CD137">Recovered Cases</p>
                        </div>
                    </div>
                    <div class="col-md-3 data-center">
                        <div class="counter">
                            <span class="data-value" id="value-3" style="color: #E84118">1.520</span>
                            <p class="data-desc" style="color: #E84118">Death Cases</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        {{--=== Content 2 ===--}}
        <div class="container">
            <div class="area-working2nd">
                <div class="row content2nd">
                    <div class="col-md-5 dist2nd">
                        <img src="{{asset('assets/Dist/Design/Art-3.png')}}" width="510" height="480" alt="">
                    </div>
                    <div class="col-md-6 dist2nd-right">
                        <span class="badge badge-info"><i class="fas fa-info-circle"></i> About Covid-19</span>
                        <h5 class="message-covid-2">What is Covid-19</h5>
                        <h3 class="title-covid-2">Coronavirus</h3>
                        <p class="desc-covid-2">Coronavirus are a large family of viruses<br>
                        that cause illness ranging from the common cold to more severe<br>
                        diseases such as Middle East Respiratory Syndrome and Severe Acute<br>
                        Respiratory Syndrome. 2019-nCov is a new strain that has not<br>
                        been previously identified in Humans.</p>
                        <p class="desc-covid-2nd">You can protect yourself by washing your hands frequently,<br>
                        avoiding touching your face, and avoiding close contact<br>
                        (1 meter or 3 feet) distances with people who are unwell</p>
                        <button type="button" class="btn btnme3 btn-symptoms2">See More <i class="fas fa-chevron-right" style="margin-left: 5px"></i></button>
                    </div>
                </div>
            </div>
        </div>

        {{-- == Content 3 == --}}
        <div class="container">
            <div class="area-working3rd" style="margin-top: 50px;">
                <div class="row content3rd">
                    <div class="col-md-6 dist3rd-left">
                        <span class="badge badge-info"><i class="fas fa-info-circle"></i> Covid-19 Symptoms</span>
                        <h5 class="title-covid-3">What are the Symptoms ?</h5>
                        <p class="desc-covid-3">COVID-19 symptoms range from mild to severe. It takes 2-14 days<br>
                        after exposure for symptoms to develop. Symptoms<br>
                        may include :</p>
                        <br>
                        
                        <div class="list-symptoms">
                            <h6 class="symptoms"><i class="fas fa-check-circle"></i>&nbsp;&nbsp;&nbsp; Hard Cough</h6>
                            <h6 class="symptoms"><i class="fas fa-check-circle"></i>&nbsp;&nbsp;&nbsp; Hard Fever</h6>
                            <h6 class="symptoms"><i class="fas fa-check-circle"></i>&nbsp;&nbsp;&nbsp; Headache</h6>
                        </div>
                        <div class="list-symptoms2" style="margin-left: 250px;margin-top:-110px">
                            <h6 class="symptoms2"><i class="fas fa-check-circle"></i>&nbsp;&nbsp;&nbsp; Respiratory Distress</h6>
                            <h6 class="symptoms2"><i class="fas fa-check-circle"></i>&nbsp;&nbsp;&nbsp; Shortness of Breath</h6>
                            <h6 class="symptoms2"><i class="fas fa-check-circle"></i>&nbsp;&nbsp;&nbsp; Kidney Failure</h6>
                        </div>
                    </div>
                    <div class="col-md-6 dist3rd-right">
                        <img src="{{asset('assets/Dist/Design/Art-2.png')}}" width="650" height="510" alt="Symptoms">
                    </div>
                </div>
            </div>
        </div>

        {{-- == Content 4 CARD-Animation == --}}

        <section class="jumbotron">
            <div class="container card-content">
                <div class="row area-working4th">
                    <div class="col-md-5 content1-4th">
                        <div class="row card-area1">
                            {{-- CARD 1 --}}
                            <div class="col-6 p-1 card1st" style="margin-top: -20px">
                                <div class="card grey lighten-2">
                                    <div class="card-body pb-0" style="margin-left: 18px">
                                        <img src="{{asset('assets/Dist/Icon/Pontagion.png')}}" width="160px" alt="">
                                    <div class="d-flex justify-content-between">
                                        
                                    </div>
                                    </div>
                                    <hr style="width: 50px;border: 1px solid black">
                                    <div class="card-body pt-0">
                                        <h6 class="font-weight-600 mb-1">Air Transmission by Cough or Sneeze</h6>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>
                            {{-- CARD 2 --}}
                            <div class="col-6 p-1 card1st">
                                <div class="card grey lighten-2">
                                    <div class="card-body pb-0" style="margin-left: 18px">
                                        <img src="{{asset('assets/Dist/Icon/Pontagion 2.png')}}" width="160px" alt="">
                                    <div class="d-flex justify-content-between">
                                        
                                    </div>
                                    </div>
                                    <hr style="width: 50px;border: 1px solid black">
                                    <div class="card-body pt-0">
                                        <h6 class="font-weight-600 mb-1">Direct contact with others or friends</h6>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row card-area2">
                            {{-- CARD 3 --}}
                            <div class="col-6 p-1 card2nd" style="margin-top: -20px">
                                <div class="card grey lighten-2">
                                    <div class="card-body pb-0" style="margin-left: 18px">
                                        <img src="{{asset('assets/Dist/Icon/Pontagion 3.png')}}" width="160px" alt="">
                                    <div class="d-flex justify-content-between">
                                        
                                    </div>
                                    </div>
                                    <hr style="width: 50px;border: 1px solid black">
                                    <div class="card-body pt-0">
                                        <h6 class="font-weight-600 mb-1">Contaminated objects such as food or gadget</h6>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>
                            {{-- CARD 4 --}}
                            <div class="col-6 p-1 card2nd">
                                <div class="card grey lighten-2">
                                    <div class="card-body pb-0" style="margin-left: 18px">
                                        <img src="{{asset('assets/Dist/Icon/pet.png')}}" width="160px" alt="">
                                    <div class="d-flex justify-content-between">
                                        
                                    </div>
                                    </div>
                                    <hr style="width: 50px;border: 1px solid black">
                                    <div class="card-body pt-0">
                                        <h6 class="font-weight-600 mb-1">Direct contact with pets</h6>
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 content2-4th" style="margin-left: 70px">
                        <span class="badge badge-info"><i class="fas fa-info-circle"></i> Covid-19 Contagion</span>
                        <h3 class="title-covid-4">How does coronavirus<br>
                        spread ?</h3>
                        <p class="desc-covid-4">Health experts are still learning the details. Currently, it's<br>
                        thought to spread :</p>
                        <div class="list-pontagion">
                            <h6 class="pontagion"><i class="fas fa-check-circle"></i>&nbsp;&nbsp;&nbsp; Via Respiratory droplets produced when an<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;infected person Cough or Sneeze.</h6>
                            <h6 class="pontagion"><i class="fas fa-check-circle"></i>&nbsp;&nbsp;&nbsp; Between people who are in close contact<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with another (within about 6 feet).</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br><br>

        <section class="container">
            <div class="area-working5th">
                <div class="row content-area-5th">
                    <div class="col-md-12 content-backup d-flex justify-content-center">
                        <span class="badge badge-info"><i class="fas fa-info-circle"></i> Covid-19 Prevention</span>
                    </div>
                    <div class="col-md-12 content5th">
                        <h3 class="title-covid-5">How can I protect myself from Covid-19 ?</h3>
                        <p class="desc-covid-5">If you are travelling overseas (to China or other Country Places)<br>
                        Follow the CDC's guidance :</p>
                    </div>
                </div>

                {{-- == Card 1 == --}}
                <div class="row card-content">
                    <div class="col-md-6 mb-4 card-long">
                        <div class="card-image">
                            <img src="{{asset('assets/Dist/Icon/Prevention 1.png')}}" width="87px" alt="">
                            <div class="card-content" style="margin-left: 140px;margin-top:-90px">
                                <h3 class="card-title">Cover Face When Coughing</h3>
                                <p class="card-desc">Cover your mouth/nose with a tissue or<br>
                                sleeve when coughing and sneezing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 card-long">
                        <div class="card-image">
                            <img src="{{asset('assets/Dist/Icon/cat.png')}}" width="87px" alt="">
                            <div class="card-content" style="margin-left: 140px;margin-top:-90px">
                                <h3 class="card-title">Avoid Animal Contact</h3>
                                <p class="card-desc">Always avoid direct contact with both<br>
                                pets and animal in the wild.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- == Card 2 == --}}
                <div class="row card-content2">
                    <div class="col-md-6 mb-4 card-long2">
                        <div class="card-image">
                            <img src="{{asset('assets/Dist/Icon/Prevention 2.png')}}" width="87px" alt="">
                            <div class="card-content" style="margin-left: 140px;margin-top:-90px">
                                <h3 class="card-title">Wear Face Mask</h3>
                                <p class="card-desc">Always use your mask when wou want travel<br>
                                suddenly and when buying food.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 card-long2">
                        <div class="card-image">
                            <img src="{{asset('assets/Dist/Icon/supermarket.png')}}" width="87px" alt="">
                            <div class="card-content" style="margin-left: 140px;margin-top:-90px">
                                <h3 class="card-title">Avoid Market and Crowd</h3>
                                <p class="card-desc">Always avoid crowds and crowded places to <br>
                                avoid direct transmission.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- == Card 3 == --}}
                <div class="row card-content3">
                    <div class="col-md-6 mb-4 card-long3">
                        <div class="card-image">
                            <img src="{{asset('assets/Dist/Icon/Prevention 3.png')}}" width="87px" alt="">
                            <div class="card-content" style="margin-left: 140px;margin-top:-90px">
                                <h3 class="card-title">Wash Your Hand Frequently</h3>
                                <p class="card-desc">Wash hands often with soap and water. If<br>
                                not available, use hand sanitizer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 card-long3">
                        <div class="card-image">
                            <img src="{{asset('assets/Dist/Icon/doctor.png')}}" width="87px" alt="">
                            <div class="card-content" style="margin-left: 140px;margin-top:-90px">
                                <h3 class="card-title">Seek Medical Care</h3>
                                <p class="card-desc">Always medical checking to check whether we are <br>
                                healthy or we have been infected.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br><br><br><br><br><br>







    {{-- Added Script --}}
    {{-- <script>
        document.addEventListener("DOMContentLoaded", () => {
 function counter(id, start, end, duration) {
  let obj = document.getElementById(id),
   current = start,
   range = end - start,
   increment = end > start ? 1 : -1,
   step = Math.abs(Math.floor(duration / range)),
   timer = setInterval(() => {
    current += increment;
    obj.textContent = current;
    if (current == end) {
     clearInterval(timer);
    }
   }, step);
 }
 counter("value-1", 0, 25216, 4000);
 counter("value-2", 100, 6492, 3000);
 counter("value-3", 0, 1520, 3000);
});
    </script> --}}
    <script src="https://kit.fontawesome.com/0ef25f29a7.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>