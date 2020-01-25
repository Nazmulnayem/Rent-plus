
<nav class="navbar navbar-expand-lg navbar-light head_menu shadow-sm " id="header" >
    <div class="container clearfix " >
        <a class="navbar-brand " href="{{url('/')}}"><img src="/frontend/image/rp.PNG" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}"><i class="fas fa-home"></i></a>
                </li>

                <li class="nav-item">

                    <a class="nav-link" data-toggle="tooltip" data-placement="top" title="Chat" href="#"><i class="far fa-comments"></i><span class="badge badge-light">2</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}" data-toggle="tooltip" data-placement="top" title="Notification" href="#"><i class="fas fa-bell"></i><span class="badge badge-light">4</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}" data-toggle="tooltip" data-placement="top" title="Profile"><i class="fas fa-user-circle"></i></a>
                </li>
                <li class="nav-item postad_item">
                    <a class="nav-link post_ad" href="{{route('login')}}" >Post RENT+ </a>
                </li>


                <li class="nav-item login">
                    <a class="" href="{{route('login')}}"  >Login </a>
                </li>
                <!-- Modal -->


                <li class="nav-item signin">
                    <a class="" href="{{route('register')}}">Signin</a>
                </li>
            </ul>

        </div>
    </div>
</nav>