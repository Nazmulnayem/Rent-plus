<nav class="navbar navbar-expand-lg navbar-light head_menu shadow-lg" id="header">
    <div class="container clearfix " >
        <a class="navbar-brand " href="{{url('/home')}}"><img src="public/frontend/image/rp.PNG" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/home')}}"><i class="fas fa-home"></i></a>
                </li>

                <li class="nav-item">

                    <a class="nav-link" data-toggle="tooltip" data-placement="top" title="Chat" href="#"><i class="far fa-comments"></i><span class="badge badge-light">2</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="tooltip" data-placement="top" title="Notification" href="#"><i class="fas fa-bell"></i><span class="badge badge-light">4</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin/profile.html" data-toggle="tooltip" data-placement="top" title="Profile"><i class="fas fa-user-circle"></i></a>
                </li>
                <li class="nav-item postad_item">
                    <a class="nav-link post_ad" href="#" data-toggle="modal" data-target="#addmodel">Post RENT+ </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#"><i class="fas fa-user-tie"></i> Hi {{ Auth::user()->name }}</a>
                </li>

                <li class="nav-item login">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
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

                                            <li><a href="{{url('/postad')}}">Standard 50tk</a></li>
                                            <li><a href="{{url('/postad')}}">Premium 100tk</a></li>
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


            </ul>

        </div>
    </div>
</nav>
