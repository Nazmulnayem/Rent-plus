@extends('frontEnd.master')

@section('title')
    Rentplus
@endsection

@section('mainContent')

    <section id="banner" class="position-relative">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">


                <div class="carousel-item active" style="background:#00B1D2FF;">
                    <div class="carousel-caption">
                        <h1 class="bounceIn mb-3">Rent a house got more easier now!</h1>
                        <p>You don't have to wast your time to search a Rent , Rentplus already solve your all problem bae</p>

                        <button type="button" class="btn btn-info mt-5 shadow-lg"><a href="{{route('login')}}">Get start</a></button>

                    </div>


                </div>
                <div class="carousel-item" style="background:#bd2130;">
                    <div class="carousel-caption">
                        <h1 class="bounceIn mb-3">Rent a house got more easier now!</h1>
                        <p>You don't have to wast your time to search a Rent , Rentplus already solve your all problem bae</p>

                        <button type="button" class="btn btn-info mt-5 shadow-lg"><a href="{{route('login')}}">Get start</a></button>

                    </div>


                </div>
        </div>
        </div>


    </section>
    <section id="Title_ad">
        <div class="container">
            <div class="row align-content-center text-center">
                <div class="col-lg-12">

                    <h4 class="mt-5 postadd_h4">Give a Rent post Top rents All rents SearchPost With just one account.</h4>



                </div>
            </div>
        </div>

    </section>
    <section id="Title_ad">
        <div class="container mt-5 mb-5">
            <div class="row align-content-center text-center ">

                    <div class="col-lg-4">
                        <h5 class=" postadd_h5">Top Rants</h5>
                        <p class="side_p">Only 21tk</p>

                        <img class="img-fluid" src="/frontend/image/top.PNG" style="width:500px;height: 500px ">

                    </div>
                    <div class="col-lg-4">
                        <h5 class=" postadd_h5">All Rants</h5>
                        <p class="side_p">Totally free</p>
                        <img class="img-fluid" src="/frontend/image/all.PNG" style="width:500px;height: 500px ">

                    </div>
                <div class="col-lg-4">
                    <h5 class=" postadd_h5">Rent post form</h5>
                    <p class="side_p">Rentername must be username</p>
                    <img class="img-fluid" src="/frontend/image/postarent.PNG" style="width:500px;height: 500px ">

                </div>


            </div>
        </div>

    </section>
    <section id="Title_ad">
        <div class="container mt-5 mb-5">
            <div class="row align-content-center justify-content-cente text-center">

                <div class="col-lg-12">
                    <h5 class="title_h mt-5">User Guideline</h5>
                </div>

            </div>
        </div>

    </section>
    <section id="Title_ad">
        <div class="container mt-5 mb-5">
            <div class="row align-content-center justify-content-cente ">

                <div class="col-lg-4">
                    <h5 class="title_h mt-5 text-center"><i class="fas fa-user"></i></h5>
                    <p class="text-center">Please put uniqe username and use this name when you post an ad for rent</p>
                </div>
                <div class="col-lg-4">
                    <h5 class="title_h mt-5 text-center"><i class="fas fa-money-bill-alt"></i></h5>
                    <p class="text-center">For Top Rents you have to pay only 21tk All rents are totally free</p>
                </div>
                <div class="col-lg-4">
                    <h5 class="title_h mt-5 text-center"><i class="far fa-bell"></i></h5>
                    <p class="text-center">Please delete your post after its become unnecessary</p>
                </div>

            </div>
        </div>

    </section>
    <section class="post_add">
        <div class="jumbotron ">
            <div class="container ">
                <div class="row align-content-center text-center">
                    <div class="col-lg-12">

                        <h2 class="postadd_h1">Lets try new process of renting a house.</h2>
                        <button type="button" class="btn btn-info mt-3 shadow-lg"><a href="{{route('register')}}">Sign Up for free</a></button>


                    </div>
                </div>

            </div>
        </div>

    </section>




@endsection