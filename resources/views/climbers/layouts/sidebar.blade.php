<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'dashboard') @else collapsed @endif "
        href="{{ url('climbers/dashboard')}}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'test') @else collapsed @endif " href="{{ url('climbers/test')}}">
        <i class="bi bi-person-x-fill"></i>
        <span>Take Test</span>
      </a>
    </li><!-- End Test Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'portfolio') @else collapsed @endif " href="{{ url('climbers/portfolio/add')}}">
        <i class="bi bi-person-x-fill"></i>
        <span>Make Portfolio</span>
      </a>
    </li><!-- End Portfolio Nav -->
    

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'logout') @else collapsed @endif " href="{{ url('logout')}}">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </li><!-- End My Account Nav -->







</aside><!-- End Sidebar-->