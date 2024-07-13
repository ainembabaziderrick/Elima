<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'dashboard') @else collapsed @endif "
        href="{{ url('admin/dashboard')}}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'appointments') @else collapsed @endif " href="{{ url('admin/appointments')}}">
        <i class="bi bi-window"></i>
        <span>Appointments</span>
      </a>
    </li><!-- End Appointments Nav -->


    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'tests') @else collapsed @endif " href="{{ url('admin/tests')}}">
        <i class="bi bi-person-x-fill"></i>
        <span>Mark Tests</span>
      </a>
    </li><!-- End Tests Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'portfolio') @else collapsed @endif " href="{{ url('admin/portfolio')}}">
        <i class="bi bi-person-x-fill"></i>
        <span>Portfolios</span>
      </a>
    </li><!-- End Portfolio Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'user') @else collapsed @endif " href="{{ url('admin/user')}}">
        <i class="bi bi-window"></i>
        <span>Users</span>
      </a>
    </li><!-- End Users Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'logout') @else collapsed @endif " href="{{ url('logout')}}">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </li><!-- End My Account Nav -->







</aside><!-- End Sidebar-->