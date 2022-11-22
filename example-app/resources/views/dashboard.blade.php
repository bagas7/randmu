<!DOCTYPE html>
<html lang="en">
<head>
    <title>Randmu | Dashboard</title>

    <!-- Favicons -->
    <link rel="icon" href="img/favicon_randmu.png" type="image">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/dashboard.css">

    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <nav>
        <div class="sidebar-top">
            <span class="shrink-btn">
                <i class="bx bx-chevron-left"></i>
            </span>
            <img src="img/logo_randmu" alt="Randmu">
            <h3 class="hide">Randmu</h3>
        </div>
        <div class="search">
            <i class="bx bx-search"></i>
            <input type="text" class="hide" placeholder="Quick Search...">
        </div>
        <div class="sidebar-links">
            <ul>
                <div class="active-tab"></div>
                <li class="tooltip-element" data-tooltip="0">
                    <a href="#" class="active" data-active="0">
                        <div class="icon">
                            <i class='bx bx-tachometer'></i>
                            <i class='bx bxs-tachometer'></i>
                        </div>
                        <span class="link hide">Dashboard</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="1">
                    <a href="#" data-active="1">
                        <div class="icon">
                            <i class='bx bx-folder'></i>
                            <i class='bx bxs-folder'></i>
                        </div>
                        <span class="link hide">Projects</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="2">
                    <a href="#" data-active="2">
                        <div class="icon">
                            <i class='bx bx-message-square-detail'></i>
                            <i class='bx bxs-message-square-detail'></i>
                        </div>
                        <span class="link hide">Messages</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="3">
                    <a href="#" data-active="3">
                        <div class="icon">
                            <i class='bx bx-bar-chart-square'></i>
                            <i class='bx bxs-bar-chart-square'></i>
                        </div>
                        <span class="link hide">Analytics</span>
                    </a>
                </li>
                <div class="tooltip">
                    <span class="show">Dashboard</span>
                    <span>Projects</span>
                    <span>Messages</span>
                    <span>Analytics</span>
                </div>
            </ul>
            <h4 class="hide">Shortcuts</h4>
            <ul>
                <li class="tooltip-element" data-tooltip="0">
                    <a href="#" data-active="4">
                        <div class="icon">
                            <i class='bx bx-notepad'></i>
                            <i class='bx bxs-notepad'></i>
                        </div>
                        <span class="link hide">Tasks</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="1">
                    <a href="#" data-active="5">
                        <div class="icon">
                            <i class='bx bx-help-circle'></i>
                            <i class='bx bxs-help-circle'></i>
                        </div>
                        <span class="link hide">Help</span>
                    </a>
                </li>
                <li class="tooltip-element" data-tooltip="2">
                    <a href="#" data-active="6">
                        <div class="icon">
                            <i class='bx bx-cog'></i>
                            <i class='bx bxs-cog'></i>
                        </div>
                        <span class="link hide">Settings</span>
                    </a>
                </li>
                <div class="tooltip">
                    <span class="show">Tasks</span>
                    <span>Help</span>
                    <span>Settings</span>
                </div>
            </ul>
        </div>
        <div class="sidebar-footer">
            <a href="#" class="account tooltip-element" data-tooltip="0">
                <i class="bx bx-user"></i>
            </a>
            <div class="admin-user tooltip-element" data-tooltip="1">
                <div class="admin-profile hide">
                    <img src="img/face-1.png" alt="">
                    <div class="admin-info">
                        <h3>John Doe</h3>
                        <h5>Admin</h5>
                    </div>
                </div>
                <a href="#" class="log-out">
                    <i class="bx bx-log-out"></i>
                </a>
            </div>
            <div class="tooltip">
                <span class="show">John Doe</span>
                <span>Logout</span>
            </div>
        </div>
    </nav>

    <script src="js/dashboard.js"></script>
</body>
</html>