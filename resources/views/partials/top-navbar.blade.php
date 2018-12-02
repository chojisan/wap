<nav class="navbar header-navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow-sm">
    <div class="navbar-wrapper">
            <div class="navbar-logo">
                <a class="mobile-menu" id="mobile-collapse" href="#!">
                    <i class="feather icon-menu"></i>
                </a>
                <a class="nav-brand" href="#">
                    <img src={{ asset('assets/images/takada.png') }} class="img-logo" alt="" />
                </a>
                <a class="mobile-options">
                    <i class="feather icon-more-horizontal"></i>
                </a>
            </div>
            
            <div class="navbar-container container-fluid">
                <ul class="nav-left">
                    <li class="header-search">
                        <div class="main-search morphsearch-search">
                            <div class="input-group">
                                <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#!" class="fullscreen">
                            <i class="feather icon-maximize full-screen"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav-right">
                    <li class="header-notification">
                        <div class="dropdown-primary dropdown">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                <i class="feather icon-bell"></i>
                                <span class="badge badge-info">5</span>
                            </div>
                            <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <li>
                                    <h6>Notifications</h6>
                                    <label class="badge badge-danger">New</label>
                                </li>
                                            <li>
                                                <div class="media">
                                                    <img class="d-flex align-self-center img-radius" src="{{ asset('assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h5 class="notification-user">John Doe</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="d-flex align-self-center img-radius" src="{{ asset('assets/images/avatar-3.jpg') }}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h5 class="notification-user">Joseph William</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <img class="d-flex align-self-center img-radius" src="{{ asset('assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h5 class="notification-user">Sara Soudein</h5>
                                                        <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                        <span class="notification-time">30 minutes ago</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="header-notification">
                                    <div class="dropdown-primary dropdown">
                                        <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                            <i class="feather icon-message-square"></i>
                                            <span class="badge badge-warning">3</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="user-profile header-notification">
                                    <div class="dropdown-primary dropdown">
                                        <div class="dropdown-toggle" data-toggle="dropdown">
                                            <img src="{{ asset('assets/images/avatar-4.jpg') }}" class="img-radius" alt="User-Profile-Image">
                                            <span>John Doe</span>
                                            <i class="feather icon-chevron-down"></i>
                                        </div>
                                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <li>
                                                <a href="#!">
                                                    <i class="feather icon-settings"></i> Settings
                                                </a>
                                            </li>
                                            <li>
                                                <a href="user-profile.html">
                                                    <i class="feather icon-user"></i> Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="email-inbox.html">
                                                    <i class="feather icon-mail"></i> My Messages
                                                </a>
                                            </li>
                                            <li>
                                                <a href="auth-lock-screen.html">
                                                    <i class="feather icon-lock"></i> Lock Screen
                                                </a>
                                            </li>
                                            <li>
                                                <a href="auth-normal-sign-in.html">
                                                    <i class="feather icon-log-out"></i> Logout
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </li>
                            </ul>
        </div>
    </div>
</nav>