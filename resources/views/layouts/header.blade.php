    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{url('/')}}">
            <span>
              Med Plus
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('doctors')}}">Doctors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('clinics') }}">Clinics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              <!-- <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form> -->


              @if (Route::has('login'))
                @auth
                  <li class="nav-item">
                    <div class="dropdown show">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->first_name}}
                      </a>
                      
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{route('user.profile')}}">Account</a>
                        <a class="dropdown-item" href="{{ route('user.logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('user.logout') }}" method="get" class="d-none">
                            @csrf
                        </form>
                      </div>
                    </div>
                  </li>

                @else

                  <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                  @if (Route::has('register'))
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                  @endif

                @endauth
              @endif


            </ul>
          </div>
        </nav>
      </div>

    </header>
    <!-- end header section -->