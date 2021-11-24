<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="{{mix('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">


</head>
<body style="font-family: 'Open Sans';">

{{--<div id="app">--}}
{{--    <app></app>--}}


<div class="container my-4">
    <img class="" src="/img/netwrix_logo.png">
</div>
<div class="m-auto d-flex flex-column justify-content-center align-content-center"
     style="background-image:url('/img/background_image.jpg') ">
    <div class="text-white w-100 my-5" >
        <h1 class=" d-flex justify-content-center ">Netwrix Partner Locator</h1>
        <h5 class="d-flex justify-content-center ">Hundreds of Netwrix partners around the world are
            standing by to help you.</h5>
        <h5 class="d-flex justify-content-center ">With our Partner Locator you can easily find the
            list of authorized partners in your area.</h5>
    </div>
    <div class="container col-5 ">
        <input class="form-control">
        <div class="d-flex flex-lg-row flex-sm-column">
            <div class="me-3 mt-3">
                <select class="form-select">
                    <option selected>Type</option>
                </select>
            </div>
            <div class="input-group m-3">
                <select class="form-select  mb-3">
                    <option selected>State</option>
                </select>
                <select class="form-select  mb-3">
                    <option selected>State</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-3">
                <a href="#" class="card-body">
                    <h5 class="card-title">Company name</h5>
                </a>
            </div>
        </div>
    </div>
</div>
{{--</div>--}}

</div>

</body>

<script src="{{mix('js/app.js')}}"></script>

<footer> TEST SUBJ</footer>
</html>
