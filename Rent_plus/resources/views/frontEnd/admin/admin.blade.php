<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rentplus-AdminHome') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <section>
        <div class="container-fluid">
            <div class="col-lg-12">


            <div class="row">
                <a href="{{route('home')}}">home</a>
                <a class="ml-3" href="{{route('payment')}}">payment</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">RenterUsername</th>
                        <th scope="col">Housename</th>
                        <th scope="col">phonenumber</th>
                        <th scope="col">availablefrom</th>
                        <th scope="col">availablefloor</th>
                        <th scope="col">type_rent</th>
                        <th scope="col">budget_rent</th>
                        <th scope="col">Divisionselect</th>
                        <th scope="col">Cityselect</th>
                        <th scope="col">Areaselect</th>
                        <th scope="col">full_address</th>
                        <th scope="col">About_rent</th>
                        <th scope="col">image_name</th>
                        <th scope="col">user_type</th>
                        <th scope="col">publication_status</th>
                        <th scope="col">manage</th>


                    </tr>
                    </thead>
                    @foreach($postads as $postad)
                        <tbody>
                        <tr>
                            <th scope="row">{{$postad->id}}</th>
                            <th scope="row">{{$postad->RenterUsername}}</th>
                            <th scope="row">{{$postad->Housename}}</th>
                            <th scope="row">{{$postad->phonenumber}}</th>
                            <th scope="row">{{$postad->availablefrom}}</th>
                            <th scope="row">{{$postad->availablefloor}}</th>
                            <th scope="row">{{$postad->type_rent}}</th>
                            <th scope="row">{{$postad->budget_rent}}</th>
                            <th scope="row">{{$postad->Divisionselect}}</th>
                            <th scope="row">{{$postad->Cityselect}}</th>
                            <th scope="row">{{$postad->Areaselect}}</th>
                            <th scope="row">{{$postad->full_address}}</th>
                            <th scope="row">{{$postad->About_rent}}</th>
                            <th scope="row">{{$postad->image_name}}</th>
                            <th scope="row">{{$postad->user_type}}</th>
                            <th scope="row">{{$postad->publication_status}}</th>


                            <td><a href="{{url('/edit/'.$postad->id)}}">Edit</a></td>
                            <td><a href="">Delete</a></td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>

            </div>

        </div>
        </div>
    </section>


</div>
</body>
</html>

