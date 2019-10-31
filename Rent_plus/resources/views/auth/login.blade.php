@extends('frontEnd.master')

@section('title')
    Rentplus
@endsection

@section('mainContent')
    <section class="login_form">
        <div class="container ">
            <div class="row">
                <div class="col-lg-6 bg-white form_class shadow-lg">
                    <div class="text-center mt-4">
                        <h1 >Login</h1>
                    </div>
                    <div class="text-center mt-4 loginfacebook">
                        <button ><a href="{{url('/login/facebook')}}">Login with <i class="fab fa-facebook-f"></i></a></button>
                    </div>
                    <form role="form" method="POST" action="{{url('/login')}}">
                        {{ csrf_field() }}
                        <div class="form-row align-items-center username_margin">

                            <div class="col-lg-10">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-user-circle"></i></div>
                                    </div>
                                    <input id="emil" name="email" type="email" class="form-control" placeholder="Email"  required>
                                </div>
                            </div>
                            <div class="col-lg-10 mt-3">
                                <label class="sr-only">


                                </label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text text-center"><i class="fa fa-lock"></i></div>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                            </div>
                            <div class="col-lg-10 mt-3">
                                <div class="submit_form">
                                    <button type="submit" class="form-control" class="btn btn-block">Submit</button>

                                </div>
                            </div>

                            <div class="col-lg-10 mt-3">
                                <div class="passcontrol">
                                    <a href="" class="fp mr-2" >Forgot password?</a>
                                    <a href="{{url('/register')}}" class="cr">Create an Account</a>

                                </div>
                            </div>

                        </div>
                    </form>
                </div>

            </div>



    </section>
@endsection