<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reporting form</title>

<!-- semua link disini -->
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/Css/style.css') }}">
    <!-- datepicker -->
    <link rel="stylesheet" href="{{asset('assets/Css/bootstrap-datepicker.css')}}">
    <!-- boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- fonstawesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- navbar button-->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
    <a class="navbar-brand" href="#"><i class="fa fa-sign-out" aria-hidden="true">back to home</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            <a class="navbar-brand" href="#"><i>ne jam</i></a>
        </div>
    </div>
    </div>
</nav>
<!-- akhir navbar button -->


<!-- text awal -->
<div class="container">
    <div class="row nue">
        <div class="col">
            <p><i class="fa fa-exclamation-circle" class="fa-text" aria-hidden="true">COVID-19 Report</i></p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2 class="text-satu"> <b>Reporting Form</b></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="area-text">Forms are created if there are infected in <br> your environment.</p>
        </div>
    </div>
</div>
<!-- akhir text awal -->


<!-- form -->
<div class="content">
    <form action="" method="POST" class="main-form needs-validation" enctype="multipart/form-data" novalidate>
        <div class="row field">
            <div class="col-md-4">
                <label for="username" class="label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your name...">
            </div>
            <div class="col-md-4">
                <label for="nik" class="label">NIK</label>
                <input type="text" class="form-control" id="nik" name="username" placeholder="Enter your NIK...">
            </div>
        </div>
        <div class="row block-field">
            <div class="col-md-4">
                <span class="fa fa-phone" aria-hidden="true"></span>
                <label for="phone">Phone</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">+62</span>
                    </div>
                    <input type="tel" pattern="^\d{4}-\d{4}-\d{4}$" class="form-control" id="phone" aria-describedby="inputGroupPrepend" name="phone" required>
                    <div class="invalid-feedback">
                        Masukan Nomor yang Benar!
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2 class="text-dua"><b>User Infected</b></h2>
            </div>
        </div>
        <div class="row field-low">
            <div class="col-md-4">
                <label for="username" class="label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your name...">
            </div>
            <div class="col-md-4">
                <label for="nik" class="label">NIK</label>
                <input type="text" class="form-control" id="nik" name="username" placeholder="Enter your NIK...">
            </div>
        </div>
        <div class="row field-low">
            <div class="col-md-4">
                <label for="date" class="label">Please Choose a date</label>
                <input type="date" class="form-control" id="datepicker" name="date" placeholder="date...">
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="region">Please Choose a Region</label>
                    <select name="region" class="custom-select">
                        <option selected>Your Region...</option>
                        <option value="region">Denpasar</option>
                        <option value="region">Badung</option>
                        <option value="region">Karangasem</option>
                        <option value="region">Klungkung</option>
                        <option value="region">Bangli</option>
                        <option value="region">Gianyar</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row block-field-low">
            <div class="col-md-4">
                <label for="umur" class="label">Umur</label>
                <input type="text" class="form-control" id="umur" name="umur" placeholder="Enter your age...">
            </div>
        </div>
        <div class="row field-address">
            <div class="col-md-4">
                <label for="address">Address</label>
                <textarea type="address" name="address" id="address" class="form-control" placeholder=""></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary"><b>Submit</b></button>
            </div>
        </div>
    </form>
</div>
<!-- akhir form-->






<!-- boostrap js dan jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="{{asset('assets/Js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript">
	$(function(){
	    $("#datepicker").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: tru,
        });
	});
</script>
</body>
</html>