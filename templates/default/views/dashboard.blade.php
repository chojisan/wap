  @if (Auth::check())
  {{ Auth::UserAccount()->first_name }}
  @endif
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="menu"></span>
                  Menu Manager
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="camera"></span>
                  Media Manager
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="box"></span>
                  Application Builder
                </a>
                <ul class="menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link">Lists</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Create App</a>
                    </li>
                  </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="aperture"></span>
                  Template Manager
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Module Manager
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  User Accounts
                </a>
                <ul class="menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link">Users</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Roles</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Groups</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Permissions</a>
                    </li>
                  </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="paperclip"></span>
                  Plugins
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="settings"></span>
                  Settings
                </a>
              </li>
            </ul>
            
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>


        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('bootstrap/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="{{ asset('bootstrap/assets/js/bootstrap.min.js') }}"></script>

    <!-- Icons -->
    <script src="{{ asset('bootstrap/assets/js/feather.min.js') }}"></script>
    <script>
      feather.replace()
    </script>
