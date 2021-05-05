<div class="mobile-main-sidebar">
    <div class="inner">
        <ul class="icon-side-menu">
            <li>
                <a href="admin-dashboards-personal-1.html" id="home-sidebar-menu-mobile">
                    <i data-feather="activity"></i>
                </a>
            </li>
            <li>
                <a href="admin-grid-users-1.html" id="layouts-sidebar-menu-mobile">
                    <i data-feather="grid"></i>
                </a>
            </li>
            <li>
                <a href="elements-hub.html" id="elements-sidebar-menu-mobile">
                    <i data-feather="box"></i>
                </a>
            </li>
            <li>
                <a href="components-hub.html" id="components-sidebar-menu-mobile">
                    <i data-feather="cpu"></i>
                </a>
            </li>
            <li>
                <a href="messaging-chat.html" id="open-messages-mobile">
                    <i data-feather="message-circle"></i>
                </a>
            </li>
        </ul>

        <ul class="bottom-icon-side-menu">
            <li>
                <a href="javascript:" class="right-panel-trigger" data-panel="search-panel">
                    <i data-feather="search"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i data-feather="settings"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<div id="circular-menu" class="circular-menu">

    <a class="floating-btn" onclick="document.getElementById('circular-menu').classList.toggle('active');">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
    </a>

    <div class="items-wrapper">
        <div class="menu-item is-flex">
            <label class="dark-mode">
                <input type="checkbox" checked>
                <span></span>
            </label>
        </div>
        <a class="menu-item is-flex right-panel-trigger" data-panel="languages-panel">
            <img src="assets/img/icons/flags/united-states-of-america.svg" alt="">
        </a>
        <a class="menu-item is-flex">
            <i data-feather="bell"></i>
        </a>
        <a class="menu-item is-flex">
            <i data-feather="grid"></i>
        </a>
    </div>

</div>
<div class="main-sidebar">
    <div class="sidebar-brand">
        <a href="index-2.html">
            <img class="light-image" src="assets/img/logos/logo/logo.svg" alt="">
            <img class="dark-image" src="assets/img/logos/logo/logo-light.svg" alt="">
        </a>
    </div>
    <div class="sidebar-inner">

        <div class="naver"></div>

        <ul class="icon-menu">
            <!-- Activity -->
            <li>
                <a href="admin-dashboards-personal-1.html" id="home-sidebar-menu" data-content="Dashboards">
                    <i class="sidebar-svg" data-feather="activity"></i>
                </a>
            </li> <!-- Layouts -->
            <li>
                <a href="admin-grid-users-1.html" id="layouts-sidebar-menu" data-content="Layouts">
                    <i class="sidebar-svg" data-feather="grid"></i>
                </a>
            </li> <!-- Bounties -->
            <li>
                <a href="elements-hub.html" id="elements-sidebar-menu" data-content="Elements">
                    <i class="sidebar-svg" data-feather="box"></i>
                </a>
            </li> <!-- Bugs -->
            <li>
                <a href="components-hub.html" id="components-sidebar-menu" data-content="Components">
                    <i class="sidebar-svg" data-feather="cpu"></i>
                </a>
            </li> <!-- Messaging -->
            <li id="messages-menu">
                <a href="admin-messaging-chat.html" id="open-messages" data-content="Messaging">
                    <i class="sidebar-svg" data-feather="message-circle"></i>
                </a>
            </li>
        </ul>

        <!-- User account -->
        <ul class="bottom-menu">
            <!-- Notifications -->
            <li class="right-panel-trigger" data-panel="search-panel">
                <a href="javascript:void(0);" id="open-search" data-content="Search"><i class="sidebar-svg" data-feather="search"></i></a>
                <a href="javascript:void(0);" id="close-search" class="is-hidden is-inactive"><i class="sidebar-svg" data-feather="x"></i></a>
            </li> <!-- Wallet -->
            <li>
                <a href="admin-profile-settings.html" id="open-settings" data-content="Settings">
                    <i class="sidebar-svg" data-feather="settings"></i>
                </a>
            </li> <!-- Profile -->
            <li id="user-menu">
                <div id="profile-menu" class="dropdown profile-dropdown dropdown-trigger is-spaced is-up">
                    <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                    <span class="status-indicator"></span>

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
                            <a href="admin-profile-view.html" class="dropdown-item is-media">
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
            </li>



        </ul>
    </div>
</div>
