<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span class="side-icon">
                  <i class="feather icon-home"></i>
                  </span>
                  
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('media') }}">
                <span class="side-icon">
                  <i class="feather icon-image"></i>
                  </span>
                  Media
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('menu.index') }}">
                <span class="side-icon">
                  <i class="feather icon-menu"></i>
                  </span>
                  Menu Manager
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('template.index') }}">
                <span class="side-icon">
                  <i class="feather icon-sidebar"></i>
                  </span>
                  Template Manager
                </a>
              </li>
              <li class="nav-item hasmenu">
                <a class="nav-link" href="#">
                <span class="side-icon">
                  <i class="feather icon-users"></i>
                  </span>
                  User Accounts
                </a>
                <ul class="menu submenu">
                    <li class="nav-item">
                      <a href="{{ route('user.index') }}" class="nav-link">Users List</a>
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
                <span class="side-icon">
                  <i class="feather icon-settings"></i>
                  </span>
                  Settings
                </a>
                
              </li>
              
            </ul>

            
          </div>
        </nav>