@extends('frontEnd.master')

@section('title')
    Rentplus
@endsection

@section('mainContent')
    <section id="banner" class="position-relative">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">


                <div class="carousel-item active" style="background:linear-gradient(to right,#0c5460,#4e555b);">
                    <div class="carousel-caption">
                        <h1 class="bounceIn mb-5">Only for House rent</h1>
                        <p></p>

                    </div>


                </div>
                <div class="carousel-item" style="background:linear-gradient(to right,#0c5460,#4e555b);">
                    <div class="carousel-caption">
                        <h1 class="bounceIn mb-5">LogIn for better experience</h1>
                        <p></p>


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

            <div class="row slick_top shadow-sm justify-content-center" style="background:linear-gradient(to right,#d3ca27,rgba(43,43,43,0.43));">
                <div class="col-lg-3  pb-4 ">
                    <div class="about_inner">
                        <h4 class="ml-3 pt-3"><i class="fas fa-home"></i> HouseName: Nazmul villa </h4>
                        <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> HouseOwner: Nazmul Hasan</p>
                        <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> Avaiable floor: 3</p>
                        <p class="ml-3 pt-3 pb-3"><i class="fas fa-check-circle"></i> Area: kalshi</p>
                        <p class="ml-3 pt-3"><i class="fas fa-check-circle"></i> Type: Family</p>
                        <p class="ml-3 pt-3"><i class="fas fa-check-circle"></i> budget: 20k</p>
                        <p class="ml-3 pt-3"><i class="fas fa-check-circle"></i> click here for details</p>
                    </div>
                </div>
                <div class="col-lg-3  pb-4 ">
                    <div class="about_inner">
                        <h4 class="ml-3 pt-3"><i class="fas fa-home"></i> HouseName: Nazmul villa </h4>
                        <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> HouseOwner: Nazmul Hasan</p>
                        <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> Avaiable floor: 3</p>
                        <p class="ml-3 pt-3 pb-3"><i class="fas fa-check-circle"></i> Area: kalshi</p>
                        <p class="ml-3 pt-3"><i class="fas fa-check-circle"></i> Type: Family</p>
                        <p class="ml-3 pt-3"><i class="fas fa-check-circle"></i> budget: 20k</p>
                        <p class="ml-3 pt-3"><i class="fas fa-check-circle"></i> click here for details</p>
                    </div>
                </div>
                <div class="col-lg-3  pb-4 ">
                    <div class="about_inner">
                        <h4 class="ml-3 pt-3"><i class="fas fa-home"></i> HouseName: Nazmul villa </h4>
                        <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> HouseOwner: Nazmul Hasan</p>
                        <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> Avaiable floor: 3</p>
                        <p class="ml-3 pt-3 pb-3"><i class="fas fa-check-circle"></i> Area: kalshi</p>
                        <p class="ml-3 pt-3"><i class="fas fa-check-circle"></i> Type: Family</p>
                        <p class="ml-3 pt-3"><i class="fas fa-check-circle"></i> budget: 20k</p>
                        <p class="ml-3 pt-3"><i class="fas fa-check-circle"></i> click here for details</p>
                    </div>
                </div>
                <div class="col-lg-3  pb-4 ">
                    <div class="about_inner">
                        <h4 class="ml-3 pt-3"><i class="fas fa-home"></i> HouseName: Nazmul villa </h4>
                        <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> HouseOwner: Nazmul Hasan</p>
                        <p class="ml-3 pt-3"><i class="fas fa-user-tie"></i> Avaiable floor: 3</p>
                        <p class="ml-3 pt-3 pb-3"><i class="fas fa-check-circle"></i> Area: kalshi</p>
                        <p class="ml-3 pt-3"><i class="fas fa-check-circle"></i> Type: Family</p>
                        <p class="ml-3 pt-3"><i class="fas fa-check-circle"></i> budget: 20k</p>
                        <p class="ml-3 pt-3"><i class="fas fa-check-circle"></i> click here for details</p>
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
    <section class="All_rents position-relative" id="Allrents" >
        <div class="container pb-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <div class="section_head1 pb-5 mb-5">
                        <h2 class="shadow-lg">All Rents</h2>
                        <h2>Totall = {{$postads->total()}} posts</h2>
                        <h2>In this page = {{$postads->count()}} posts</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                @foreach($postads as $postad)
                    <div class="col-lg-4 col-sm-6 pt-3 pb-3 allrentsshad">
                        <div class="about_inner1 pl-5 pr-5 pt-5 pb-5">
                            <h4 ><i class="fas fa-home mr-3"></i> HouseName: <a href="">{{$postad->Housename}}</a></h4>
                            <p ><i class="fas fa-user-tie"></i> HouseOwner: <a href="">{{$postad->RenterUsername}}</a></p>
                            <p ><i class="fas fa-user-tie"></i> Avaiable floor: {{$postad->availablefloor}}</p>
                            <p ><i class="fas fa-check-circle"></i> Type: {{$postad->type_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> budget: {{$postad->budget_rent}}</p>
                            <p ><i class="fas fa-check-circle"></i> Area: {{$postad->Areaselect}}</p>
                            <p ><i class="fas fa-check-circle"></i> City: {{$postad->Cityselect}}</p>
                            <p ><i class="fas fa-check-circle"></i> Division: {{$postad->Divisionselect}}</p>
                            <p ><i class="fas fa-user-tie"></i> Phone number: {{$postad->phonenumber}}</p>
                            <p ><i class="fas fa-check-circle"></i> click here for details</p>
                            <div class="">
                                <a href="{{url('/login')}}" class="mr-5" role="button" title="Send A  Rent Request" style="font-size: 26px;"><i class="fa fa-user"></i></a>
                                <a href="{{url('/login')}}" class="mr-5" role="button" title="Send Message" style="font-size: 26px;"><i class="far fa-comments"></i></a>
                                <a href="{{url('/login')}}" class="" role="button" title="See Details" style="font-size: 26px;"><i class="fa fa-reply"></i></a>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
            <div class="row justify-content-center text-center">
                <div class="col-lg-10 ">
                    <div class="section_head2 pt-3 text-center">
                        {{$postads->links()}}

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
@endsection