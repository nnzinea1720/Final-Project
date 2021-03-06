




<header id="header" class="header-one">
    <div class="bg-white">
      <div class="container">
        <div class="logo-area">
            <div class="row align-items-center">
              <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                  <a>
                    <img loading="lazy"  Style="width:140px;height:80px;" src="https://i.pinimg.com/236x/b1/b5/b4/b1b5b4719333eeb29175945e1beb3445.jpg" alt="Image">
                  </a>
              </div><!-- logo end -->

              <div class="col-lg-9 header-right">
                  <ul class="top-info-box">
                    <li>
                      <div class="info-box">
                        <div class="info-box-content">
                            <p class="info-box-title">Call Us</p>
                            <p class="info-box-subtitle"><a href="phone:(+88)01774561211"> (+88)01774561211</a></p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="info-box">
                        <div class="info-box-content">
                            <p class="info-box-title">Email Us</p>
                            <p class="info-box-subtitle"><a href="mailto:office@Courier.com">office@Courier.com</a></p>
                        </div>
                      </div>
                    </li>
                    <li class="last">
                      <div class="info-box last">
                        <div class="info-box-content">
                        </div>
                      </div>
                    </li>
                  </ul><!-- Ul end -->
              </div><!-- header right end -->
            </div><!-- logo area end -->

        </div><!-- Row end -->
      </div><!-- Container end -->
    </div>

    <div class="site-navigation">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div id="navbar-collapse" class="collapse navbar-collapse">
                      <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">

                              <li class="active"><a href="{{route('user.home.one')}}">Home one</a></li>
                            </ul>
                        </li>

                        {{-- <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="about.html">About Us</a></li>

                            </ul>
                        </li> --}}

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Information <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                {{-- <li><a href="{{route('user.customer.information')}}"> Customer Information</a></li> --}}
                                <li><a href="{{route('user.information.branch.info')}}">Branch Information </a></li>
                              <li><a href="{{route('user.tracking')}}">Tracking </a></li>
                              <li><a href="{{route('user.tracking.information')}}">Payment Status </a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="{{route('user.our.services')}}">Our Services</a></li>
                              <li><a href="{{route('user.services.notice.list')}}">Notice </a></li>

                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav link" href="{{route('user.booking.parcel')}}">Booking Parcel</a></li>

                        <li class="nav-item"><a class="nav-link" href="{{route('user.profile')}}">Profile</a></li>


                        <li class="nav-item"><a class="nav-link" href="{{route('user.contact')}}">Contact</a></li>

                        <li class="nav-item"><a class="nav-link" href="{{route('about.us.create')}}"> About Us</a></li>

                    </ul>
                    @if(auth()->user())


                        <li class="nav-item"><a class="nav-link" style="color:white" href="{{route('user.logout')}}">logout</a></li>

                         @else

                        <li>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registration">
                        Registration
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
                        Login
                    </button>
                    </li>
                    @endif
                  </div>
                </nav>
            </div>
            <!--/ Col end -->
          </div>
          <!--/ Row end -->

        <!--/ search  Navigation end -->
    <!--/ Navigation end -->
  </header>

     <!-- Modal -->
  <div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('user.registration')}}" method="post">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Enter User Name:</label>
                    <input name="name" type="text" class="form-control" placeholder="Enter user name">
                </div>
                <div class="form-group">
                    <label for="">Enter User Email:</label>
                    <input name="email" type="email" class="form-control" placeholder="Enter user email">
                </div>
                <div class="form-group">
                    <label for="">Enter User Password:</label>
                    <input name="password" type="password" class="form-control" placeholder="Enter user password">
                </div>
                <div class="form-group">
                    <label for="">Enter User Mobile:</label>
                    <input name="mobile" type="text" class="form-control" placeholder="Enter user mobile">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Registration</button>
            </div>
        </div>
        </form>
    </div>
</div>




<!-- Login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('user.login')}}" method="post">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Enter User Email:</label>
                        <input name="email" type="email" class="form-control" placeholder="Enter user email">
                    </div>
                    <div class="form-group">
                        <label for="">Enter User Password:</label>
                        <input name="password" type="password" class="form-control" placeholder="Enter user password">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
