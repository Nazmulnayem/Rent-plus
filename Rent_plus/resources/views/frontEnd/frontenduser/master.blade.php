<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('/frontend/assets/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="/frontend/assets/css/all.min.css">

    <link rel="stylesheet" href="/frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/animate.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/slick.css">
    <link rel="stylesheet" href="/frontend/assets/css/slick-theme.css">


    <title> @yield('title') </title>

</head>
<body >
<!------------menu-------------->
<section id="app">
<nav class="navbar navbar-expand-lg navbar-light head_menu shadow-lg" id="header">

        <div class="container clearfix ">
            <router-link class="navbar-brand " to="/"><img src="/frontend/image/rp.PNG" alt=""></router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mynav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <router-link to="/"><a class="nav-link"><i class="fas fa-home"></i></a></router-link>
                    </li>

                    <li class="nav-item">

                        <router-link :to="`/chatlist/{{Auth::user()->name}}`"> <a to="/home" class="nav-link" data-toggle="tooltip" data-placement="top" title="My Chats" ><i class="far fa-comments"></i><span class="badge badge-light">2</span></a></router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/profile"> <a class="nav-link" data-toggle="tooltip" data-placement="top" title="My Notification"><i class="fas fa-bell"></i><span class="badge badge-light">4</span></a></router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="`profile/{{Auth::user()->name}}`"><a class="nav-link" title="My Profile"><i class="fas fa-user-circle"></i></a></router-link>
                    </li>
                    <li class="nav-item postad_item">
                        <router-link to="/postad"> <a  class="nav-link post_ad" >Post RENT+ </a></router-link>
                    </li>
                    <li class="nav-item ">
                        <router-link to="/"><a class="nav-link"><i class="fas fa-user-tie"></i> Hi {{ Auth::user()->name}}</a></router-link>
                    </li>

                    <li class="nav-item login">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                </ul>

            </div>
        </div>
</nav>



    <home-component></home-component>






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
    </div>


</footer>

</section>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('/js/app.js')}}"></script>
<script src="/frontend/assets/js/jquery-3.4.1.min.js"></script>

<script src="/frontend/assets/js/all.min.js"></script>
<script src="/frontend/assets/js/myjs.js"></script>
<script src="/frontend/assets/js/bootstrap.min.js"></script>
<script src="/frontend/assets/js/slick.min.js"></script>




</body>
</html>
