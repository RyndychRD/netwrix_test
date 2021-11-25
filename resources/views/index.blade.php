<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">


</head>
<body class="bg-light">

{{--<div id="app">--}}
{{--    <app></app>--}}


<div class="container d-flex justify-content-md-start justify-content-sm-center my-4">
    <img src="/img/netwrix_logo.png">
</div>
<div class="d-flex flex-column justify-content-center"
     style="background-image:url('/img/background_image.jpg') ">
    <div class="container text-white col-6 py-5 ">
        <h2 style="font-family: Open Sans;display: block;
text-align: center; font-weight: bold">
            Netwrix Partner Locator</h2>
        <br>
        <label style="font-family: Open Sans;
font-style: normal;
font-weight: normal;
font-size: 16px;
line-height: 32px;
/* or 200% */

display: block;
text-align: center;">
            Hundreds of Netwrix partners around the world are
            standing by to help you. With our Partner Locator you can easily find the
            list of authorized partners in your area.</label>
    </div>
    <div class="container col-5">
        <div>
            <input class="form-control" placeholder="Search by company name or adress..">
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-md-4 col-sm-12 mb-sm-1">
                <select class="form-select ">
                    <option selected>Type</option>
                </select>
            </div>
            <div class="col-md-8 col-sm-12">
                {{--                TODO при помощи postcss убирать input-group--}}
                <div class="input-group col-sm-12 ">
                    <select class="form-select mb-sm-1">
                        <option selected>State</option>
                    </select>
                    <select class="form-select mb-sm-1">
                        <option selected>State</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container col">
    <div class="card mt-3">
        <div class="card-body row">
            <div class="col-md-3 col-sm-12 mb-sm-5 mb-md-1 d-flex justify-content-md-center justify-content-sm-start">
                <img src="/img/standard-logo-distributor-new.png">
            </div>
            <div class="col-md-5 col-sm-12  mb-sm-5 mb-md-1 d-flex flex-column justify-content-center">
                    <h2 class="fw-bold" style="font-family: OpenSans;"> Tango Technology </h2>
                    <label>Sydney, Level 7, 171 Clarence Street</label>
            </div>
            <div class="col-md-2 col-sm-12  mb-sm-5 mb-md-1 d-flex flex-column justify-content-around border-end">
                    <a href="#">Website</a>
                    <label>+61 2 8001 0250</label>
            </div>
            <div class="col-md-2 col-sm-12 ">
                <label>Distributor</label>
            </div>
        </div>

    </div>
    <div class="card mt-3">
        <div class="card-body row">
            <div class="col-md-3 col-sm-12 mb-sm-5 mb-md-1 d-flex justify-content-md-center justify-content-sm-start">
                <img src="/img/standard-logo-distributor-new.png">
            </div>
            <div class="col-md-5 col-sm-12  mb-sm-5 mb-md-1 d-flex flex-column justify-content-center">
                    <h2 class="fw-bold" style="font-family: OpenSans;"> Tango Technology </h2>
                    <label>Sydney, Level 7, 171 Clarence Street</label>
            </div>
            <div class="col-md-2 col-sm-12  mb-sm-5 mb-md-1 d-flex flex-column justify-content-around">
                    <a href="#">Website</a>
                    <label>+61 2 8001 0250</label>
            </div>
            <div class="col-md-2 col-sm-12 ">
                <label>Distributor</label>
            </div>
        </div>

    </div>
    {{--</div>--}}

</div>

</body>

<script src="{{mix('js/app.js')}}"></script>

</html>
