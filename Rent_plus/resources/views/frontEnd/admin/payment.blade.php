<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
                    <a href="{{route('admin')}}">admin</a>
                    <a class="ml-3" href="{{route('payment')}}">payment</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">payment_type</th>
                            <th scope="col">phone</th>
                            <th scope="col">TransectionID</th>
                            <th scope="col">manage</th>



                        </tr>
                        </thead>
                        @foreach($payments as $payment)
                            <tbody>
                            <tr>
                                <th scope="row">{{$payment->id}}</th>
                                <th scope="row">{{$payment->payment_type}}</th>
                                <th scope="row">{{$payment->phone}}</th>
                                <th scope="row">{{$payment->TransectionID}}</th>


                                <td><a href="">Edit</a></td>
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


