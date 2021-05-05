<div id="huro-app" class="app-wrapper">

    <div class="app-overlay"></div>

    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <nav class="navbar mobile-navbar no-shadow is-hidden-desktop is-hidden-tablet" aria-label="main navigation">
        <div class="container">
            <!-- Brand -->
            <div class="navbar-brand">
                <!-- Mobile menu toggler icon -->
                <div class="brand-start">
                    <div class="navbar-burger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <a class="navbar-item is-brand" href="index.html">
                    <img class="light-image" src="assets/img/logos/logo/logo.svg" alt="">
                    <img class="dark-image" src="assets/img/logos/logo/logo-light.svg" alt="">
                </a>

                <div class="brand-end">
                    <div class="navbar-item has-dropdown is-notification is-hidden-tablet is-hidden-desktop">
                        <a class="navbar-link is-arrowless" href="javascript:void(0);">
                            <i data-feather="bell"></i>
                            <span class="new-indicator pulsate"></span>
                        </a>
                        <div class="navbar-dropdown is-boxed is-right">
                            <div class="heading">
                                <div class="heading-left">
                                    <h6 class="heading-title">Notifications</h6>
                                </div>
                                <div class="heading-right">
                                    <a class="notification-link" href="#">See all</a>
                                </div>
                            </div>
                            <div class="inner has-slimscroll">

                                <ul class="notification-list">
                                    <li>
                                        <a class="notification-item">
                                            <div class="img-left">
                                                <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" />
                                            </div>
                                            <div class="user-content">
                                                <p class="user-info"><span class="name">Alice C.</span> left a comment.</p>
                                                <p class="time">1 hour ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="notification-item">
                                            <div class="img-left">
                                                <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" />
                                            </div>
                                            <div class="user-content">
                                                <p class="user-info"><span class="name">Joshua S.</span> uploaded a file.</p>
                                                <p class="time">2 hours ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="notification-item">
                                            <div class="img-left">
                                                <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" />
                                            </div>
                                            <div class="user-content">
                                                <p class="user-info"><span class="name">Tara S.</span> sent you a message.</p>
                                                <p class="time">2 hours ago</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="notification-item">
                                            <div class="img-left">
                                                <img class="user-photo" alt="" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" />
                                            </div>
                                            <div class="user-content">
                                                <p class="user-info"><span class="name">Melany W.</span> left a comment.</p>
                                                <p class="time">3 hours ago</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown is-right is-spaced dropdown-trigger user-dropdown">
                        <div class="is-trigger" aria-haspopup="true">
                            <div class="profile-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                            </div>
                        </div>
                        <div class="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <div class="dropdown-head">
                                    <div class="h-avatar is-large">
                                        <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                    </div>
                                    <div class="meta">
                                        <span>Erik Kovalsky</span>
                                        <span>Product Manager</span>
                                    </div>
                                </div>
                                <a href="#" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-user-alt"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Profile</span>
                                        <span>View your profile</span>
                                    </div>
                                </a>
                                <a class="dropdown-item is-media layout-switcher">
                                    <div class="icon">
                                        <i class="lnil lnil-layout"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Layout</span>
                                        <span>Switch to admin/webapp</span>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a href="#" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-briefcase"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Projects</span>
                                        <span>All my projects</span>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-users-alt"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Team</span>
                                        <span>Manage your team</span>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a href="#" class="dropdown-item is-media">
                                    <div class="icon">
                                        <i class="lnil lnil-cog"></i>
                                    </div>
                                    <div class="meta">
                                        <span>Settings</span>
                                        <span>Account settings</span>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <div class="dropdown-item is-button">
                                    <button class="button h-button is-primary is-raised is-fullwidth logout-button">
                                        <span class="icon is-small">
                                                <i data-feather="log-out"></i>
                                            </span>
                                        <span>Logout</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>
    