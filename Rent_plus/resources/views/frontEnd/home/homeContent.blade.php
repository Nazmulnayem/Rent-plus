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

                    <div class="col-lg-3">
                        <h5 class=" postadd_h5">Top Rants</h5>
                        <p>Hadiya Only 50tk</p>

                        <img class="img-fluid" src="/frontend/image/top.PNG" style="width:500px;height: 500px ">

                    </div>
                    <div class="col-lg-3 ml-5">
                        <h5 class=" postadd_h5">All Rants</h5>
                        <p>Totally free</p>
                        <img class="img-fluid" src="/frontend/image/all.PNG" style="width:500px;height: 500px ">

                    </div>
                <div class="col-lg-3 ml-5">
                    <h5 class=" postadd_h5">Rent post form</h5>
                    <p>Rentername must be username</p>
                    <img class="img-fluid" src="/frontend/image/postarent.PNG" style="width:500px;height: 500px ">

                </div>


            </div>
        </div>

    </section>
    <section class="post_add">
        <div class="jumbotron " style="background: #FF6F61FF">
            <div class="container ">
                <div class="row align-content-center text-center">
                    <div class="col-lg-12">

                        <h2 class="postadd_h1">Post your ads at free cost to reach more people in Online.</h2>
                        <button type="button" class="btn btn-info mt-3 shadow-lg"><a href="">Post Your Advertisement Here</a></button>


                    </div>
                </div>

            </div>
        </div>

    </section>




@endsection