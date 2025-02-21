<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'dashboard') @else collapsed @endif "
        href="{{ url('clients/dashboard')}}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'guides') @else collapsed @endif "
        href="{{ url('clients/guides')}}">
        <i class="bi bi-grid"></i>
        <span>Guides</span>
      </a>
    </li><!-- End Dashboard Nav -->

    

    <li class="nav-item">
      <a class="nav-link @if(Request::segment(2) == 'logout') @else collapsed @endif " href="{{ url('logout')}}">
        <i class="bi bi-box-arrow-right"></i>
        <span>Logout</span>
      </a>
    </li><!-- End My Account Nav -->







</aside><!-- End Sidebar-->