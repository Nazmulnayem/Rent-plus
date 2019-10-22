
@extends('frontEnd.master')

@section('title')
    Rentplus
@endsection

@section('mainContent')
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
@endsection