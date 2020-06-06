<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safe Us | Form Pelaporan</title>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    {{-- Added Style --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Style/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{ asset('assets/Dist/Icon/logo.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white" id="navbar">
        <div class="container">
                <a href="/Home" class="btn btn3c btn-navbar3c"><i class="fas fa-sign-out-alt"></i> &nbsp;Back To Home</a>
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

    {{-- [Form-Pelaporan] --}}
    
    <div class="container">
        <div class="row content-page3">
            <div class="col-md-12 page3 text-center mt-5">
                <span class="badge badge-info"><i class="fas fa-info-circle"></i> Covid-19 Contagion</span>
                <h3 class="title-covid-page3 mt-2">Reporting Form</h3>
                <p class="desc-covid-page3">Forms are created if there are infected in<br>
                your environment.</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <form action="/Home/Store" method="POST" class="main-form needs-validation" enctype="multipart/form-data" novalidate>
            {{ csrf_field() }}
            <div class="row field justify-content-center">
                <div class="col-md-4">
                    <label for="username" class="label">Username</label>
                    <input type="text" class="form-control rounded-pill" id="usernamekamu" name="usernamekamu" placeholder="Enter your name...">
                </div>
                <div class="col-md-4">
                    <label for="nik" class="label">NIK</label>
                    <input type="text" class="form-control rounded-pill" id="nikkamu" name="nikkamu" placeholder="Enter your NIK...">
                </div>
            </div>
            <div class="row block-field mt-4 justify-content-center">
                <div class="col-md-4">
                    <span class="fa fa-phone-alt" aria-hidden="true"></span>
                    <label for="phone"> Phone</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">+62</span>
                        </div>
                        <input type="tel" pattern="^\d{4}-\d{4}-\d{4}$" class="form-control" id="phone" aria-describedby="inputGroupPrepend" name="phonemu" required>
                        <div class="invalid-feedback">
                            Masukan Nomor yang Benar!
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="umur" class="label">Your Age</label>
                    <input type="text" class="form-control" id="umurkamu" name="umurkamu" placeholder="Enter your age...">
                </div>
                <div class="col-md-2">
                    <label for="choose" class="label">Your Job</label>
                    <select class="browser-default custom-select" name="choose">
                        <option selected>Click Button</option>
                        <option value="1">Private employees</option>
                        <option value="2">Businessman</option>
                        <option value="4">Government employees</option>
                        <option value="5">Teacher</option>
                        <option value="6">Lecturer</option>
                        <option value="7">Programmer</option>
                        <option value="8">Designer</option>
                        <option value="9">Contractior</option>
                        <option value="10">And More ...</option>
                    </select>
                </div>
            </div>
            <div class="row content-infected">
                <div class="col-md-6 users">
                    <h3 class="title-report-page3 mt-5 text-center">User Infected</h3>
                </div>
            </div>
            <div class="row field-low justify-content-center mt-4">
                <div class="col-md-4">
                    <label for="username" class="label">Username</label>
                    <input type="text" class="form-control rounded-pill" id="username" name="username" placeholder="Enter your name...">
                </div>
                <div class="col-md-4">
                    <label for="nik" class="label">NIK</label>
                    <input type="text" class="form-control rounded-pill" id="nik" name="nik" placeholder="Enter your NIK...">
                </div>
            </div>
            <div class="row field-low justify-content-center mt-4">
                <div class="col-md-4">
                    <label for="date" class="label">Please Choose a date</label>
                    <input type="date" class="form-control" id="datepicker" name="date" placeholder="date...">
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="region">Choose a Region</label>
                        <select name="region" class="custom-select">
                            <option selected>Your Region...</option>
                            <option value="region">Denpasar</option>
                            <option value="region">Badung</option>
                            <option value="region">Karangasem</option>
                            <option value="region">Klungkung</option>
                            <option value="region">Bangli</option>
                            <option value="region">Gianyar</option>
                            <option value="region">Jembrana</option>
                            <option value="region">Tabanan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="umur" class="label">Age</label>
                    <input type="text" class="form-control" id="umurkamu" name="umur" placeholder="Enter your age...">
                </div>
            </div>
            <div class="row field-address justify-content-center mt-4">
                <div class="col-md-8">
                    <label for="address">Address</label>
                    <textarea type="address" name="address" id="address" class="form-control" placeholder=""></textarea>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-custom btn-block font-weight-bold mt-5" name="register" value="Daftar">Kirim</button>
                </div>
            </div>
        </form>
    </div>
    <br><br><br>

    <section class="container">
        <div class="row area-footer">
            <div class="col-md-12 footer-content">
                <h5 class="title-covid-6">Want to call the Hospital ?</h5>
                <p class="desc-covid-6">Contact if the situation is very urgent.</p>
                <div class="row btn-footer">
                    <div class="col-md-6">
                        <h3 class="hospital-name text-center" style="font-size: 20px;color:#4f4f4f;font-weight:600">
                            RSUP Sanglah
                        </h3>
                        <p class="text-center">0361 - 227912</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="hospital-name2 text-center" style="font-size: 20px;color:#4f4f4f;font-weight:600">
                            RS UNUD
                        </h3>
                        <p class="text-center">0361 - 8953670</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="mt-5 text-center">
        <p>Copyright &copy2020 All rights reserved | Safe us | #AmanDiRumah</p>
    </div>









{{-- ======= Javascript CORE 
===================================--}}
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="{{asset('assets/Js/main.js')}}" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://kit.fontawesome.com/0ef25f29a7.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>