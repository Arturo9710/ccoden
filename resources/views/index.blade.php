@extends('layout.plantilla')

@section('content')
 <!-- Main Content -->
 <div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
      </button>

      <!-- Topbar Search -->
      <form
          class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
          <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                  aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                      <i class="fas fa-search fa-sm"></i>
                  </button>
              </div>
          </div>
      </form>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

          <!-- Nav Item - Search Dropdown (Visible Only XS) -->
          <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                      <div class="input-group">
                          <input type="text" class="form-control bg-light border-0 small"
                              placeholder="Search for..." aria-label="Search"
                              aria-describedby="basic-addon2">
                          <div class="input-group-append">
                              <button class="btn btn-primary" type="button">
                                  <i class="fas fa-search fa-sm"></i>
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </li>

          <!-- Nav Item - Alerts -->
          <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="alertsDropdown">
                  <h6 class="dropdown-header">
                      Alerts Center
                  </h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                          <div class="icon-circle bg-primary">
                              <i class="fas fa-file-alt text-white"></i>
                          </div>
                      </div>
                      <div>
                          <div class="small text-gray-500">December 12, 2019</div>
                          <span class="font-weight-bold">A new monthly report is ready to download!</span>
                      </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                          <div class="icon-circle bg-success">
                              <i class="fas fa-donate text-white"></i>
                          </div>
                      </div>
                      <div>
                          <div class="small text-gray-500">December 7, 2019</div>
                          $290.29 has been deposited into your account!
                      </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="mr-3">
                          <div class="icon-circle bg-warning">
                              <i class="fas fa-exclamation-triangle text-white"></i>
                          </div>
                      </div>
                      <div>
                          <div class="small text-gray-500">December 2, 2019</div>
                          Spending Alert: We've noticed unusually high spending for your account.
                      </div>
                  </a>
                  <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
          </li>

          <!-- Nav Item - Messages -->
          <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-envelope fa-fw"></i>
                  <!-- Counter - Messages -->
                  <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="messagesDropdown">
                  <h6 class="dropdown-header">
                      Message Center
                  </h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="img/undraw_profile_1.svg"
                              alt="...">
                          <div class="status-indicator bg-success"></div>
                      </div>
                      <div class="font-weight-bold">
                          <div class="text-truncate">Hi there! I am wondering if you can help me with a
                              problem I've been having.</div>
                          <div class="small text-gray-500">Emily Fowler · 58m</div>
                      </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="img/undraw_profile_2.svg"
                              alt="...">
                          <div class="status-indicator"></div>
                      </div>
                      <div>
                          <div class="text-truncate">I have the photos that you ordered last month, how
                              would you like them sent to you?</div>
                          <div class="small text-gray-500">Jae Chun · 1d</div>
                      </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="img/undraw_profile_3.svg"
                              alt="...">
                          <div class="status-indicator bg-warning"></div>
                      </div>
                      <div>
                          <div class="text-truncate">Last month's report looks great, I am very happy with
                              the progress so far, keep up the good work!</div>
                          <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                      </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                      <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                              alt="...">
                          <div class="status-indicator bg-success"></div>
                      </div>
                      <div>
                          <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                              told me that people say this to all dogs, even if they aren't good...</div>
                          <div class="small text-gray-500">Chicken the Dog · 2w</div>
                      </div>
                  </a>
                  <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
          </li>

          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
          @if(\Illuminate\Support\Facades\Auth::user())
        <li class="dropdown">
            <a href="#" data-toggle="dropdown"
               class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('img/logo.png') }}"
                     class="rounded-circle mr-1 thumbnail-rounded user-thumbnail ">
                <div class="d-sm-none d-lg-inline-block">
                    Hi, {{\Illuminate\Support\Facades\Auth::user()->first_name}}</div>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">
                    Welcome, {{\Illuminate\Support\Facades\Auth::user()->name}}</div>
                <a class="dropdown-item has-icon edit-profile" href="#" data-id="{{ \Auth::id() }}">
                    <i class="fa fa-user"></i>Edit Profile</a>
                <a class="dropdown-item has-icon" data-toggle="modal" data-target="#changePasswordModal" href="#" data-id="{{ \Auth::id() }}"><i
                            class="fa fa-lock"> </i>Change Password</a>
                <a href="{{ url('logout') }}" class="dropdown-item has-icon text-danger"
                   onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
    @else
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                {{--                <img alt="image" src="#" class="rounded-circle mr-1">--}}
                <div class="d-sm-none d-lg-inline-block">{{ __('messages.common.hello') }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">{{ __('messages.common.login') }}
                    / {{ __('messages.common.register') }}</div>
                <a href="{{ route('login') }}" class="dropdown-item has-icon">
                    <i class="fas fa-sign-in-alt"></i> {{ __('messages.common.login') }}
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('register') }}" class="dropdown-item has-icon">
                    <i class="fas fa-user-plus"></i> {{ __('messages.common.register') }}
                </a>
            </div>
        </li>
    @endif
          </li>

      </ul>

  </nav>
  <!-- End of Topbar -->

  <!-- Begin Page Content -->

  <div class="container-fluid">

      <!-- Page Heading 
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">@yield('title','Dashboard')</h1>
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
      </div> 
      -->

      <!-- Content Row -->
      <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                  Usuarios</div>
                                  @php 
                                use App\Models\User;
                                $cant_usuarios = User::count();
                                @endphp
                              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$cant_usuarios}}</div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-calendar fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                  Earnings (Annual)</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                              </div>
                              <div class="row no-gutters align-items-center">
                                  <div class="col-auto">
                                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                  </div>
                                  <div class="col">
                                      <div class="progress progress-sm mr-2">
                                          <div class="progress-bar bg-info" role="progressbar"
                                              style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                              aria-valuemax="100"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Pending Requests Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                  Pending Requests</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-comments fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      

  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection