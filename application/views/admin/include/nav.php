<body class="nk-body npc-invest bg-lighter">
    <div class="nk-app-root">
        <div class="nk-wrap">
            <div class="nk-header nk-header-fluid is-theme">
                <div class="container-xl wide-xl">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger me-sm-2 d-lg-none">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand">
                            <a href="javascript:void(0)" class="logo-link">
                                <img class="logo-desktop" src="<?=base_url(); ?>src/assets/logos/Global_e-Library_white_version_(1).png" width="200px" alt="logo">
                            </a>
                        </div>
                        <div class="nk-header-menu" data-content="headerNav">
                            <div class="nk-header-mobile">
                                <div class="nk-header-brand">
                                    <a href="javascript:void(0)" class="logo-link">
                                        <img class="logo-light logo-img" src="<?=base_url(); ?>src/assets/logos/Global_e-Library_white_version.png" alt="logo">
                                    </a>
                                </div>
                                <div class="nk-menu-trigger me-n2">
                                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                                </div>
                            </div>
                            <ul class="nk-menu nk-menu-main ui-s2">
                                <li class="nk-menu-item">
                                    <a href="#" class="nk-menu-link ">
                                        <span class="nk-menu-text">Library</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="#" class="nk-menu-link ">
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="<?=base_url('users'); ?>" class="nk-menu-link ">
                                        <span class="nk-menu-text">Users</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="<?=base_url('students'); ?>" class="nk-menu-link ">
                                        <span class="nk-menu-text">Students</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text">E-Books</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?=base_url('library'); ?>" class="nk-menu-link">
                                                <span class="nk-menu-text">View Library</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?=base_url('manage-e-books'); ?>" class="nk-menu-link">
                                                <span class="nk-menu-text">Manage E-books</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown notification-dropdown">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                        <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                                        <div class="dropdown-head">
                                            <span class="sub-title nk-dropdown-title">Notifications</span>
                                        </div>
                                        <div class="dropdown-body">
                                            <div class="nk-notification">
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-notification -->
                                        </div><!-- .nk-dropdown-body -->
                                    </div>
                                </li><!-- .dropdown -->
                                <li class="dropdown user-dropdown order-sm-first">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-xl-block">
                                                <div class="user-status">Administrator</div>
                                                <div class="user-name dropdown-indicator">Federex Potolin</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span>FB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text">Federex Potolin</span>
                                                    <span class="sub-text">info@softnio.com</span>
                                                </div>
                                                <div class="user-action">
                                                    <a class="btn btn-icon me-n2" href="html/user-profile-setting.html"><em class="icon ni ni-setting"></em></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner user-account-info">
                                            <h6 class="overline-title-alt">User ID:</h6>
                                            <div class="user-balance">US-123904</div>
                                            <div class="user-balance-sub">Last Login: 3/02/22 10:00 AM</span></div>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="<?=base_url('admin-account'); ?>"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li><!-- .dropdown -->
                            </ul><!-- .nk-quick-nav -->
                        </div>
                    </div>
                </div>
            </div>