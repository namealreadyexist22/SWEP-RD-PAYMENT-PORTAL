<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="index.html">
      <img src="{{asset('images/logo.png')}}" alt="logo" /> </a>
    <a class="navbar-brand brand-logo-mini" href="index.html">
      <img src="{{asset('template/staradmin/src/assets/images/logo-mini.svg')}}" alt="logo" /> </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <ul class="navbar-nav">
{{--      <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>--}}

    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <i class="mdi mdi-bell-outline"></i>
          <span class="count">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
          <a class="dropdown-item py-3">
            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
            <span class="badge badge-pill badge-primary float-right">View all</span>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="{{asset('template/staradmin/src/assets/images/faces/face10.jpg')}}" alt="image" class="img-sm profile-pic">
            </div>
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
              <p class="font-weight-light small-text"> The meeting is cancelled </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="{{asset('template/staradmin/src/assets/images/faces/face12.jpg')}}" alt="image" class="img-sm profile-pic">
            </div>
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
              <p class="font-weight-light small-text"> The meeting is cancelled </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="{{asset('template/staradmin/src/assets/images/faces/face1.jpg')}}" alt="image" class="img-sm profile-pic">
            </div>
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
              <p class="font-weight-light small-text"> The meeting is cancelled </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="mdi mdi-email-outline"></i>
          <span class="count bg-success">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
          <a class="dropdown-item py-3 border-bottom">
            <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
            <span class="badge badge-pill badge-primary float-right">View all</span>
          </a>
          <a class="dropdown-item preview-item py-3">
            <div class="preview-thumbnail">
              <i class="mdi mdi-alert m-auto text-primary"></i>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
              <p class="font-weight-light small-text mb-0"> Just now </p>
            </div>
          </a>
          <a class="dropdown-item preview-item py-3">
            <div class="preview-thumbnail">
              <i class="mdi mdi-settings m-auto text-primary"></i>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
              <p class="font-weight-light small-text mb-0"> Private message </p>
            </div>
          </a>
          <a class="dropdown-item preview-item py-3">
            <div class="preview-thumbnail">
              <i class="mdi mdi-airballoon m-auto text-primary"></i>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
              <p class="font-weight-light small-text mb-0"> 2 days ago </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <img class="img-xs rounded-circle" src="{{asset('template/staradmin/src/assets/images/faces/face8.jpg')}}" alt="Profile image"> </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <div class="dropdown-header text-center">
            <img class="img-md rounded-circle" src="{{asset('template/staradmin/src/assets/images/faces/face8.jpg')}}" alt="Profile image">
            <p class="mb-1 mt-3 font-weight-semibold">{{Auth::guard('web')->user()->first_name}} {{Auth::guard('web')->user()->last_name}}</p>
            <p class="font-weight-light text-muted mb-0">{{Auth::guard('web')->user()->email}}</p>
          </div>
          <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
          <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
          <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
          <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
          <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>

{{--<header class="main-header">--}}
{{--  <a href="#" class="logo">--}}
{{--    <span class="logo-mini">S</span>--}}
{{--    <span class="logo-lg"><b>SRA SWEP-OPP</b></span>--}}
{{--  </a>--}}
{{--  <nav class="navbar navbar-static-top">--}}
{{--    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">--}}
{{--      <span class="sr-only">Toggle navigation</span>--}}
{{--      <span class="icon-bar"></span>--}}
{{--      <span class="icon-bar"></span>--}}
{{--      <span class="icon-bar"></span>--}}
{{--    </a>--}}
{{--    <div class="navbar-custom-menu">--}}
{{--      <ul class="nav navbar-nav">--}}
{{--        <li class="dropdown user user-menu">--}}
{{--          <a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
{{--            <img src="{{asset('images/avatar.jpeg')}}" class="user-image" alt="User Image">--}}
{{--            @if(Auth::check())--}}
{{--              {{ __sanitize::html_encode(Auth::user()->firstname) }}--}}
{{--            @endif--}}
{{--          </a>--}}
{{--          <ul class="dropdown-menu">--}}
{{--            <li class="user-header">--}}
{{--              <img src="{{asset('images/avatar.jpeg')}}" class="img-circle" alt="User Image">--}}
{{--              <p>--}}
{{--                @if(Auth::check())--}}
{{--                  {{ __sanitize::html_encode(Auth::user()->firstname) .' '. __sanitize::html_encode(Auth::user()->lastname) }}--}}
{{--                  <small>{{ __sanitize::html_encode(Auth::user()->position) }}</small>--}}
{{--                @endif--}}

{{--              </p>--}}
{{--            </li>--}}
{{--            <li class="user-footer">--}}
{{--              <div class="pull-left">--}}
{{--                <a href="{{ route('dashboard.profile.details') }}" class="btn btn-default btn-flat">Profile</a>--}}
{{--              </div>--}}
{{--              <div class="pull-right">--}}
{{--                <a  href="{{ route('auth.logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="btn btn-default btn-flat">Sign out</a>--}}
{{--              </div>--}}
{{--              <form id="frm-logout" action="{{ route('auth.logout') }}" method="POST" style="display: none;">--}}
{{--                {{ csrf_field() }}--}}
{{--              </form>--}}
{{--            </li>--}}
{{--          </ul>--}}
{{--        </li>--}}
{{--      </ul>--}}
{{--    </div>--}}
{{--  </nav>--}}
{{--</header>--}}