
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
        <div id="languages-panel" class="right-panel-wrapper is-languages">
            <div class="panel-overlay"></div>

            <div class="right-panel">
                <div class="right-panel-head">
                    <h3>Select Language</h3>
                    <a class="close-panel">
                        <i data-feather="chevron-right"></i>
                    </a>
                </div>
                <div class="right-panel-body has-slimscroll">
                    <div class="languages-boxes">
                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection" checked>
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/france.svg" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/spain.svg" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/germany.svg" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/mexico.svg" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="language-box">
                            <div class="language-option">
                                <input type="radio" name="language_selection">
                                <div class="language-option-inner">
                                    <img src="assets/img/icons/flags/china.svg" alt="">
                                    <div class="indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="img-wrap has-text-centered">
                        <img class="light-image" src="assets/img/illustrations/right-panel/languages.svg" alt="">
                        <img class="dark-image" src="assets/img/illustrations/right-panel/languages-dark.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="activity-panel" class="right-panel-wrapper is-activity">
            <div class="panel-overlay"></div>

            <div class="right-panel">
                <div class="right-panel-head">
                    <h3>Activity</h3>
                    <a class="close-panel">
                        <i data-feather="chevron-right"></i>
                    </a>
                </div>
                <div class="tabs-wrapper is-triple-slider is-squared">
                    <div class="tabs-inner">
                        <div class="tabs">
                            <ul>
                                <li data-tab="team-side-tab" class="is-active"><a><span>Team</span></a></li>
                                <li data-tab="projects-side-tab"><a><span>Projects</span></a></li>
                                <li data-tab="schedule-side-tab"><a><span>Schedule</span></a></li>
                                <li class="tab-naver"></li>
                            </ul>
                        </div>
                    </div>

                    <div class="right-panel-body">
                        <div id="team-side-tab" class="tab-content is-active">
                            <!--Team Member-->
                            <div class="team-card">
                                <div class="h-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" alt="">
                                    <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                </div>
                                <div class="meta">
                                    <span>Joshua S.</span>
                                    <span>
                                            <i data-feather="map-pin"></i>
                                            Las Vegas, NV
                                        </span>
                                </div>
                                <a class="link">
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>

                            <!--Team Member-->
                            <div class="team-card">
                                <div class="h-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" alt="">
                                    <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                </div>
                                <div class="meta">
                                    <span>Melany W.</span>
                                    <span>
                                            <i data-feather="map-pin"></i>
                                            San Jose, CA
                                        </span>
                                </div>
                                <a class="link">
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>

                            <!--Team Member-->
                            <div class="team-card">
                                <div class="h-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/18.jpg" alt="">
                                    <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                </div>
                                <div class="meta">
                                    <span>Esteban C.</span>
                                    <span>
                                            <i data-feather="map-pin"></i>
                                            Miami, FL
                                        </span>
                                </div>
                                <a class="link">
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>

                            <!--Team Member-->
                            <div class="team-card">
                                <div class="h-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="">
                                    <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                                </div>
                                <div class="meta">
                                    <span>Tara S.</span>
                                    <span>
                                            <i data-feather="map-pin"></i>
                                            New York, NY
                                        </span>
                                </div>
                                <a class="link">
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div id="projects-side-tab" class="tab-content">
                            <!--Project-->
                            <div class="project-card">
                                <div class="project-inner">
                                    <img class="project-avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/logos/slicer.svg" alt="">
                                    <div class="meta">
                                        <span>The slicer project</span>
                                        <span>getslicer.io</span>
                                    </div>
                                    <a class="link">
                                        <i data-feather="arrow-right"></i>
                                    </a>
                                </div>
                                <div class="project-foot">
                                    <progress class="progress is-primary is-tiny" value="31" max="100">31%</progress>
                                    <div class="foot-stats">
                                        <span>5 / 24</span>

                                        <div class="avatar-stack">
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                                            </div>
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/5.jpg" alt="">
                                            </div>
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Project-->
                            <div class="project-card">
                                <div class="project-inner">
                                    <img class="project-avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/logos/metamovies.svg" alt="">
                                    <div class="meta">
                                        <span>Metamovies reworked</span>
                                        <span>metamovies.co</span>
                                    </div>
                                    <a class="link">
                                        <i data-feather="arrow-right"></i>
                                    </a>
                                </div>
                                <div class="project-foot">
                                    <progress class="progress is-primary is-tiny" value="84" max="100">84%</progress>
                                    <div class="foot-stats">
                                        <span>28 / 31</span>

                                        <div class="avatar-stack">
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="">
                                            </div>
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/18.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Project-->
                            <div class="project-card">
                                <div class="project-inner">
                                    <img class="project-avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/logos/fastpizza.svg" alt="">
                                    <div class="meta">
                                        <span>Fast Pizza redesign</span>
                                        <span>fastpizza.com</span>
                                    </div>
                                    <a class="link">
                                        <i data-feather="arrow-right"></i>
                                    </a>
                                </div>
                                <div class="project-foot">
                                    <progress class="progress is-primary is-tiny" value="60" max="100">60%</progress>
                                    <div class="foot-stats">
                                        <span>25 / 39</span>

                                        <div class="avatar-stack">
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                                            </div>
                                            <div class="h-avatar is-small">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="schedule-side-tab" class="tab-content">
                            <!--Timeline-->
                            <div class="icon-timeline">
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <i data-feather="phone-call"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <p>Call Danny at Colby's</p>
                                        <span>Today - 11:30am</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                                    </div>
                                    <div class="timeline-content">
                                        <p>Meeting with Alice</p>
                                        <span>Today - 01:00pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <i data-feather="message-circle"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <p>Answer Annie's message</p>
                                        <span>Today - 01:45pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <i data-feather="mail"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <p>Send new campaign</p>
                                        <span>Today - 02:30pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <i data-feather="smile"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <p>Project review</p>
                                        <span>Today - 03:30pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <i data-feather="phone-call"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <p>Call Trisha Jackson</p>
                                        <span>Today - 05:00pm</span>
                                    </div>
                                </div>
                                <!--Timeline item-->
                                <div class="timeline-item">
                                    <div class="timeline-icon">
                                        <i data-feather="feather"></i>
                                    </div>
                                    <div class="timeline-content">
                                        <p>Write proposal for Don</p>
                                        <span>Today - 06:00pm</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>

        <div class="panel-overlay"></div>

        <div class="right-panel">
            <div class="right-panel-head">
                <h3>Activity</h3>
                <a class="close-panel">
                    <i data-feather="chevron-right"></i>
                </a>
            </div>
            <div class="tabs-wrapper is-triple-slider is-squared">
                <div class="tabs-inner">
                    <div class="tabs">
                        <ul>
                            <li data-tab="team-side-tab" class="is-active"><a><span>Team</span></a></li>
                            <li data-tab="projects-side-tab"><a><span>Projects</span></a></li>
                            <li data-tab="schedule-side-tab"><a><span>Schedule</span></a></li>
                            <li class="tab-naver"></li>
                        </ul>
                    </div>
                </div>

                <div class="right-panel-body">
                    <div id="team-side-tab" class="tab-content is-active">
                        <!--Team Member-->
                        <div class="team-card">
                            <div class="h-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/12.jpg" alt="">
                                <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Joshua S.</span>
                                <span>
                                        <i data-feather="map-pin"></i>
                                        Las Vegas, NV
                                    </span>
                            </div>
                            <a class="link">
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>

                        <!--Team Member-->
                        <div class="team-card">
                            <div class="h-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" alt="">
                                <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Melany W.</span>
                                <span>
                                        <i data-feather="map-pin"></i>
                                        San Jose, CA
                                    </span>
                            </div>
                            <a class="link">
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>

                        <!--Team Member-->
                        <div class="team-card">
                            <div class="h-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/18.jpg" alt="">
                                <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Esteban C.</span>
                                <span>
                                        <i data-feather="map-pin"></i>
                                        Miami, FL
                                    </span>
                            </div>
                            <a class="link">
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>

                        <!--Team Member-->
                        <div class="team-card">
                            <div class="h-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="">
                                <img class="badge" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/flags/united-states-of-america.svg" alt="">
                            </div>
                            <div class="meta">
                                <span>Tara S.</span>
                                <span>
                                        <i data-feather="map-pin"></i>
                                        New York, NY
                                    </span>
                            </div>
                            <a class="link">
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div id="projects-side-tab" class="tab-content">
                        <!--Project-->
                        <div class="project-card">
                            <div class="project-inner">
                                <img class="project-avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/logos/slicer.svg" alt="">
                                <div class="meta">
                                    <span>The slicer project</span>
                                    <span>getslicer.io</span>
                                </div>
                                <a class="link">
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>
                            <div class="project-foot">
                                <progress class="progress is-primary is-tiny" value="31" max="100">31%</progress>
                                <div class="foot-stats">
                                    <span>5 / 24</span>

                                    <div class="avatar-stack">
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                                        </div>
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/5.jpg" alt="">
                                        </div>
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/8.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project-->
                        <div class="project-card">
                            <div class="project-inner">
                                <img class="project-avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/logos/metamovies.svg" alt="">
                                <div class="meta">
                                    <span>Metamovies reworked</span>
                                    <span>metamovies.co</span>
                                </div>
                                <a class="link">
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>
                            <div class="project-foot">
                                <progress class="progress is-primary is-tiny" value="84" max="100">84%</progress>
                                <div class="foot-stats">
                                    <span>28 / 31</span>

                                    <div class="avatar-stack">
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="">
                                        </div>
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/18.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Project-->
                        <div class="project-card">
                            <div class="project-inner">
                                <img class="project-avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/icons/logos/fastpizza.svg" alt="">
                                <div class="meta">
                                    <span>Fast Pizza redesign</span>
                                    <span>fastpizza.com</span>
                                </div>
                                <a class="link">
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>
                            <div class="project-foot">
                                <progress class="progress is-primary is-tiny" value="60" max="100">60%</progress>
                                <div class="foot-stats">
                                    <span>25 / 39</span>

                                    <div class="avatar-stack">
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                                        </div>
                                        <div class="h-avatar is-small">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/25.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="schedule-side-tab" class="tab-content">
                        <!--Timeline-->
                        <div class="icon-timeline">
                            <!--Timeline item-->
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i data-feather="phone-call"></i>
                                </div>
                                <div class="timeline-content">
                                    <p>Call Danny at Colby's</p>
                                    <span>Today - 11:30am</span>
                                </div>
                            </div>
                            <!--Timeline item-->
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="">
                                </div>
                                <div class="timeline-content">
                                    <p>Meeting with Alice</p>
                                    <span>Today - 01:00pm</span>
                                </div>
                            </div>
                            <!--Timeline item-->
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i data-feather="message-circle"></i>
                                </div>
                                <div class="timeline-content">
                                    <p>Answer Annie's message</p>
                                    <span>Today - 01:45pm</span>
                                </div>
                            </div>
                            <!--Timeline item-->
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i data-feather="mail"></i>
                                </div>
                                <div class="timeline-content">
                                    <p>Send new campaign</p>
                                    <span>Today - 02:30pm</span>
                                </div>
                            </div>
                            <!--Timeline item-->
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i data-feather="smile"></i>
                                </div>
                                <div class="timeline-content">
                                    <p>Project review</p>
                                    <span>Today - 03:30pm</span>
                                </div>
                            </div>
                            <!--Timeline item-->
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i data-feather="phone-call"></i>
                                </div>
                                <div class="timeline-content">
                                    <p>Call Trisha Jackson</p>
                                    <span>Today - 05:00pm</span>
                                </div>
                            </div>
                            <!--Timeline item-->
                            <div class="timeline-item">
                                <div class="timeline-icon">
                                    <i data-feather="feather"></i>
                                </div>
                                <div class="timeline-content">
                                    <p>Write proposal for Don</p>
                                    <span>Today - 06:00pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
    <div id="search-panel" class="right-panel-wrapper is-search is-left">
        <div class="panel-overlay"></div>

        <div class="right-panel">
            <div class="right-panel-head">
                <img class="light-image" src="assets/img/logos/logo/logo.svg" alt="" />
                <img class="dark-image" src="assets/img/logos/logo/logo-light.svg" alt="" />
                <a class="close-panel">
                    <i data-feather="chevron-left"></i>
                </a>
            </div>
            <div class="right-panel-body has-slimscroll">
                <div class="field">
                    <div class="control has-icon">
                        <input type="text" class="input is-rounded search-input" placeholder="Search...">
                        <div class="form-icon">
                            <i data-feather="search"></i>
                        </div>
                        <div class="search-results has-slimscroll"></div>
                    </div>
                </div>

                <div class="recent">
                    <h4>Recently viewed</h4>
                    <div class="recent-block">
                        <a class="media-flex-center">
                            <div class="h-icon is-info is-rounded is-small">
                                <i data-feather="chrome"></i>
                            </div>
                            <div class="flex-meta">
                                <span>Browser Support</span>
                                <span>Blog post</span>
                            </div>
                        </a>
                        <a class="media-flex-center">
                            <div class="h-icon is-orange is-rounded is-small">
                                <i data-feather="tv"></i>
                            </div>
                            <div class="flex-meta">
                                <span>Twitch API</span>
                                <span>Blog post</span>
                            </div>
                        </a>
                        <a class="media-flex-center">
                            <div class="h-icon is-green is-rounded is-small">
                                <i data-feather="twitter"></i>
                            </div>
                            <div class="flex-meta">
                                <span>Twitter Auth</span>
                                <span>Blog post</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="recent">
                    <h4>Recent Members</h4>
                    <div class="recent-block">
                        <a class="media-flex-center">
                            <div class="h-avatar is-small">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/7.jpg" alt="" data-user-popover="0">
                            </div>
                            <div class="flex-meta">
                                <span>Alice C.</span>
                                <span>Software Engineer</span>
                            </div>
                        </a>
                        <a class="media-flex-center">
                            <div class="h-avatar is-small">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/13.jpg" alt="" data-user-popover="6">
                            </div>
                            <div class="flex-meta">
                                <span>Tara S.</span>
                                <span>UI/UX Designer</span>
                            </div>
                        </a>
                        <a class="media-flex-center">
                            <div class="h-avatar is-small">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/photos/22.jpg" alt="" data-user-popover="5">
                            </div>
                            <div class="flex-meta">
                                <span>Jimmy H.</span>
                                <span>Project Manager</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
