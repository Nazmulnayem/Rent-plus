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


    <title>Home</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light head_menu shadow-lg" id="header">
    <div class="container clearfix " >
        <a class="navbar-brand " href="index.php"><img src="public/frontend/image/rp.PNG" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fas fa-home"></i></a>
                </li>

                <li class="nav-item">

                    <a class="nav-link" data-toggle="tooltip" data-placement="top" title="Chat" href="#"><i class="far fa-comments"></i><span class="badge badge-light">2</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="Notification" href="#"><i class="fas fa-bell"></i><span class="badge badge-light">4</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/profile.html" data-toggle="tooltip" data-placement="top" title="Profile"><i class="fas fa-user-circle"></i></a>
                </li>
                <li class="nav-item postad_item">
                    <a class="nav-link post_ad" href="#" data-toggle="modal" data-target="#addmodel">Post RENT+ </a>
                </li>

                <li class="nav-item login">
                    <a class="" href="admin/login.html"  >Login </a>
                </li>
                <!-- Modal -->
                <div class="modal fade" id="addmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document" class="justify-content-center text-center">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title text-info text-center pl-5" id="exampleModalLongTitle">Choose your Plan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" id="modbod">
                                <div class="row text-center justify-content-center">
                                    <div class="col-lg-12">
                                        <ul>

                                            <li><a href="">Standard 50tk</a></li>
                                            <li><a href="">Premium 100tk</a></li>
                                        </ul>

                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>

                <li class="nav-item signin">
                    <a class="" href="admin/signin.html">Signin</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<section id="banner">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">


            <div class="carousel-item active" style="background:linear-gradient(to right,#0c5460,#4e555b);">
                <div class="carousel-caption">
                    <h1 class="bounceIn">Only for house rent</h1>
                    <p></p>
                    <form>

                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-4">
                                <label for="inputState"><h3 style="color:#a71d2a;font-family: 'Raleway', sans-serif;font-max-size: 15px; font-weight: 700">AREA</h3></label>
                                <select id="inputState" class="form-control">
                                    <option selected>Select your Area</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState" ><h3 style="color:#1c7430;font-family: 'Raleway', sans-serif;font-max-size: 15px; font-weight: 700">CITY</h3></label>
                                <select id="inputState" class="form-control">
                                    <option selected>Select your City</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState" ><h3  style="color:#ba8b00;font-family: 'Raleway', sans-serif;font-max-size: 15px; font-weight: 700; border: 1px #a71d2a">DIVISION</h3></label>
                                <select id="inputState" class="form-control">
                                    <option selected>Select your Division</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div  class="form-group btn_search">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>


                        </div>
                    </form>
                </div>

            </div>


        </div>
    </div>
    </div>


</section>
<section class="about_part" id="Toprents">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10 ">
                <div class="section_head pb-5 mb-5 shadow-sm">
                    <h2>Top Rents</h2>

                </div>
            </div>
        </div>

        <div class="row slick_top shadow-sm justify-content-center text-center" >
            <div class="col-lg-3  pb-4 ">
                <div class="about_inner">
                    <h4 class="ml-3 pt-3"><i class="fas fa-home"></i> HouseName: Nazmul villa </h4>
                    <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> HouseOwner: Nazmul Hasan</p>
                    <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> Avaiable floor: 3</p>
                    <p class="ml-3 pt-3 pb-3"><i class="fas fa-check-circle"></i> Area: kalshi</p>
                </div>
            </div>
            <div class="col-lg-3  pb-4 ">
                <div class="about_inner">
                    <h4 class="ml-3 pt-3"><i class="fas fa-home"></i> HouseName: Nazmul villa </h4>
                    <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> HouseOwner: Nazmul Hasan</p>
                    <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> Avaiable floor: 3</p>
                    <p class="ml-3 pt-3 pb-3"><i class="fas fa-check-circle"></i> Area: kalshi</p>
                </div>
            </div>
            <div class="col-lg-3  pb-4 ">
                <div class="about_inner">
                    <h4 class="ml-3 pt-3"><i class="fas fa-home"></i> HouseName: Nazmul villa </h4>
                    <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> HouseOwner: Nazmul Hasan</p>
                    <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> Avaiable floor: 3</p>
                    <p class="ml-3 pt-3 pb-3"><i class="fas fa-check-circle"></i> Area: kalshi</p>
                </div>
            </div>
            <div class="col-lg-3  pb-4 ">
                <div class="about_inner">
                    <h4 class="ml-3 pt-3"><i class="fas fa-home"></i> HouseName: Nazmul villa </h4>
                    <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> HouseOwner: Nazmul Hasan</p>
                    <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> Avaiable floor: 3</p>
                    <p class="ml-3 pt-3 pb-3"><i class="fas fa-check-circle"></i> Area: kalshi</p>
                </div>
            </div>

        </div>
    </div>
    <div class="row justify-content-center text-center">
        <div class="col-lg-10 ">
            <div class="section_head2 pt-3">
                <a href="">See More <i class="fas fa-external-link-square-alt"></i></a>

            </div>
        </div>
    </div>
    </div>
</section>
<section class="All_rents" id="Allrents">
    <div class="container pb-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="section_head1 pb-5 mb-5">
                    <h2 class="shadow-lg">All Rents</h2>

                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-4 col-sm-6 pt-3 pb-3 allrentsshad">
                <div class="about_inner1 pl-5 pr-5 pt-5 pb-5">
                    <h4 ><i class="fas fa-home mr-3"></i> HouseName: <a href="">NAZMUL VILLA</a></h4>
                    <p ><i class="fas fa-user-tie"></i> HouseOwner: <a href="">NAZMUL</a></p>
                    <p ><i class="fas fa-user-tie"></i> Avaiable floor:</p>
                    <p ><i class="fas fa-check-circle"></i> Area: KALSHI</p>
                </div>

            </div>
            <div class="col-lg-4 col-sm-6 pt-3 pb-3 ">
                <div class="about_inner1 pl-5 pr-5 pt-5 pb-5">
                    <h4 ><i class="fas fa-home mr-3"></i> HouseName: <a href="">NAZMUL VILLA</a></h4>
                    <p ><i class="fas fa-user-tie"></i> HouseOwner: <a href="">NAZMUL</a></p>
                    <p ><i class="fas fa-user-tie"></i> Avaiable floor:</p>
                    <p ><i class="fas fa-check-circle"></i> Area: KALSHI</p>
                </div>

            </div>
            <div class="col-lg-4 col-sm-6 pt-3 pb-3">
                <div class="about_inner1 pl-5 pr-5 pt-5 pb-5">
                    <h4 ><i class="fas fa-home mr-3"></i> HouseName: <a href="">NAZMUL VILLA</a></h4>
                    <p ><i class="fas fa-user-tie"></i> HouseOwner: <a href=""> NAZMUL </a></p>
                    <p ><i class="fas fa-user-tie"></i> Avaiable floor:</p>
                    <p ><i class="fas fa-check-circle"></i> Area: KALSHI</p>
                </div>

            </div>

            <div class="col-lg-4 col-sm-6 pt-3 pb-3">
                <div class="about_inner1 pl-5 pr-5 pt-5 pb-5">
                    <h4 ><i class="fas fa-home mr-3"></i> HouseName: <a href="">NAZMUL VILLA</a></h4>
                    <p ><i class="fas fa-user-tie"></i> HouseOwner: <a href="">NAZMUL</a></p>
                    <p ><i class="fas fa-user-tie"></i> Avaiable floor:</p>
                    <p ><i class="fas fa-check-circle"></i> Area: KALSHI</p>
                </div>

            </div>
            <div class="col-lg-4 col-sm-6 pt-3 pb-3">
                <div class="about_inner1 pl-5 pr-5 pt-5 pb-5">
                    <h4 ><i class="fas fa-home mr-3"></i> HouseName: <a href="">NAZMUL VILLA</a></h4>
                    <p ><i class="fas fa-user-tie"></i> HouseOwner: <a href="">NAZMUL</a></p>
                    <p ><i class="fas fa-user-tie"></i> Avaiable floor:</p>
                    <p ><i class="fas fa-check-circle"></i> Area: KALSHI</p>
                </div>

            </div>
            <div class="col-lg-4 col-sm-6 pt-3 pb-3">
                <div class="about_inner1 pl-5 pr-5 pt-5 pb-5">
                    <h4 ><i class="fas fa-home mr-3"></i> HouseName: <a href="">NAZMUL VILLA</a></h4>
                    <p ><i class="fas fa-user-tie"></i> HouseOwner: <a href=""> NAZMUL </a></p>
                    <p ><i class="fas fa-user-tie"></i> Avaiable floor:</p>
                    <p ><i class="fas fa-check-circle"></i> Area: KALSHI</p>
                </div>

            </div>

        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-10 ">
                <div class="section_head2 pt-3">
                    <a href="">See More <i class="fas fa-external-link-square-alt"></i></a>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="post_add">
    <div class="jumbotron ">
        <div class="container">
            <div class="row align-content-center text-center">
                <div class="col-lg-12">

                    <h2 class="postadd_h1">Post your ads at free cost to reach more people in Online.</h2>
                    <button type="button" class="btn btn-info mt-3 shadow-lg"><a href="">Post Your Advertisement Here</a></button>


                </div>
            </div>

        </div>
    </div>

</section>
<footer class="myfooter">
    <div class="container">


        <div class="row justify-content-center  ">
            <div class="col-lg-6">
                <div class="section_head3 pb-2 mb-3 pt-4 mt-4">
                    <h2>About Rentplus</h2>
                    <p>We are one of the best RENT HOUSE site in all over BANGLADESH. Post your ads at free cost to reach more people in Online. It's a RENT A HOUSE solution. We have more than 8000+ customers are there. Post Your free ads related to their business and get target customer in RENTPLUS. Customers can promote their business very fast and high traffic in online. We are providing highest SEO benefits.</p>

                </div>
                <div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="section_head3 pb-2 mb-3 pt-4 mt-4">
                    <h4>Valuable Link</h4>
                    <p><a href="#header"><i class="fas fa-caret-right"></i> signin</a></p>
                    <p><a href="#header"><i class="fas fa-caret-right"></i> login</a></p>
                    <p><a href="#Allrents"><i class="fas fa-caret-right"></i> All rent</a></p>
                    <p><a href="#Toprents"><i class="fas fa-caret-right"></i> Top rent</a></p>
                    <p><a href="#header"><i class="fas fa-caret-right"></i> Privacy Policy</a></p>
                    <p><a href="#header"><i class="fas fa-caret-right"></i> Tearms and Condition</a></p>



                </div>
                <div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="section_head3 pb-2 mb-4 pt-3 mt-4" id="app">
                    <h2>Contact us</h2>
                    <p>Mail : <i class="far fa-envelope"></i> Rentplusbd@gmail.com</p>
                    <p>Phone : <i class="fas fa-mobile-alt"></i> 01775641072</p>
                    <p> All rights reserve &copy; Rentplus 2019</p>
                    <a class="pr-3 pt-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="pr-3" href=""><i class="fab fa-instagram"></i></a>
                    <a class="pr-3" href=""><i class="fab fa-twitter"></i></i></a>

                </div>
                <div>

                </div>
            </div>

        </div>
    </div>


</footer>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="public/js/app.js"></script>
<script src="public/frontend/assets/js/jquery-3.4.1.min.js"></script>

<script src="public/frontend/assets/js/all.min.js"></script>
<script src="public/frontend/assets/js/myjs.js"></script>
<script src="public/frontend/assets/js/bootstrap.min.js"></script>
<script src="public/frontend/assets/js/slick.min.js"></script>




</body>
</html>