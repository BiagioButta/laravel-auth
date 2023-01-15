<header>
    {{-- <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white"> --}}
        <!-- Container wrapper -->
        <div class="container">

          <!-- Right links -->
          {{-- <ul>
            <!-- Notification dropdown -->
            <li class="nav-item">
              <a
                class="nav-link me-3 me-lg-0"
                href="#">
                <i class="fas fa-bell"></i>
                <span class="badge rounded-pill badge-notification bg-danger">1</span>
              </a>

            </li>

            <!-- Icon -->

            <!-- Icon -->
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="#">
                <i class="fab fa-github"></i>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="userProfile" role="button">
                    <span class="d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                    <img class="img-profile rounded-circle" src="{{asset('storage/profile_image/undraw_profile.svg')}}">
                </a>
              </ul>
            </li>

            <li class="nav-item list-unstyled">
              <a class="nav-link me-lg-0" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();" title="Logout">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
            </li>
          </ul> --}}
          <div class="row justify-between">
            <div class="col">
              <ul class="d-flex flex-row list-unstyled">
                <li> <a class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active-link' : '' }}" href="{{route('admin.dashboard')}}">Home</a>
                </li>
                <li>
                  <a class="nav-link {{ Route::currentRouteName() == 'admin.projects.index' ? 'active-link' : '' }}" href="{{route('admin.projects.index')}}">Projects</a>
                </li>
                @if(Auth::check() && Auth::user()->isAdmin())
                <li>
                    <a class="nav-link {{ Route::currentRouteName() == 'admin.categories.index' ? 'active-link' : '' }}" href="{{route('admin.categories.index')}}">Categories</a>
                </li>
                <li>
                    <a class="nav-link" href="#">Types</a>
                </li>
                @endif
              </ul>
            </div>
            <div class="col">
              <ul class="list-unstyled d-flex flex-row">
                <li>
                  <a class="nav-link" href="#" id="userProfile" role="button">
                  <span class="d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                  {{-- <img class="img-profile rounded-circle" src="{{asset('storage/profile_image/undraw_profile.svg')}}"> --}}
                  </a>
                </li>
                <li>
                    <a class="nav-link me-lg-0" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" title="Logout">
                      <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>  
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Container wrapper -->
      {{-- </nav> --}}

</header>
