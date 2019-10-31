<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="public/frontend/assets/css/all.min.css">

    <link rel="stylesheet" href="public/frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/frontend/assets/css/animate.min.css">
    <link rel="stylesheet" href="public/frontend/assets/css/slick.css">
    <link rel="stylesheet" href="public/frontend/assets/css/slick-theme.css">


    <title> @yield('title') </title>

</head>
<body>
<!------------menu-------------->
@include('frontEnd.frontenduser.includes.menu')

@yield('mainContent')


@include('frontEnd.frontenduser.includes.footer')


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('public/js/app.js')}}"></script>
<script src="public/frontend/assets/js/jquery-3.4.1.min.js"></script>

<script src="public/frontend/assets/js/all.min.js"></script>
<script src="public/frontend/assets/js/myjs.js"></script>
<script src="public/frontend/assets/js/bootstrap.min.js"></script>
<script src="public/frontend/assets/js/slick.min.js"></script>




</body>
</html>
