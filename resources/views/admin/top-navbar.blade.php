<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg"
          alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      {{-- <ul class="navbar-nav w-100">
        <li class="nav-item w-100">
          <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
            <input type="text" class="form-control" placeholder="Search products">
          </form>
        </li>
      </ul> --}}
      <ul class="navbar-nav navbar-nav-right">

        {{-- HERE WILL GO LOGOUT OPTION --}}
        <li>

          @if (Auth::check())

          <a href="{{url('logout')}}" class="btn btn-success"> Logout </a>


          @else

          {{-- <a href="{{url('register')}}" class="btn btn-success"> Register </a> --}}
          <a href="{{url('login')}}" class="btn btn-success"> Login </a>


          @endif

        </li>


      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
        data-toggle="offcanvas">
        <span class="mdi mdi-format-line-spacing"></span>
      </button>
    </div>
  </nav>