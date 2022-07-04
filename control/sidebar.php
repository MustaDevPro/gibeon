<a href="index.php" class="brand-link">
    <img src="./dist/img/pp.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><?php print $_SESSION['user']['username'];?></span>
</a>

<!-- Sidebar -->
<div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="./index.php" class="nav-link active"><i class="fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>



            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Posts
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="./addProduct.php" class="nav-link">
                            <i class="fas fa-plus nav-icon"></i>
                            <p>Add Post</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./pending.php" class="nav-link">
                            <i class="fa fa-hourglass-half nav-icon"></i>
                            <p>Pending Ticket</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./soldProdct.php" class="nav-link">
                            <i class="fa fa-check-square nav-icon"></i>
                            <p>Sold Tickets</p>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Services -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-rocket"></i>
                    <p>
                        Videos
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="./postVideo.php" class="nav-link">
                            <i class="fas fa-youtube-plus nav-icon"></i>
                            <p>Create Video</p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="./soldProdct.php" class="nav-link">
                            <i class="fa fa-check-square nav-icon"></i>
                            <p>Manage Videos</p>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- Settings -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-cog"></i>
                    <p>
                        Settings
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="./profileSetting.php" class="nav-link">
                            <i class="fas fa-user nav-icon"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./passwordManagement.php" class="nav-link">
                            <i class="fas fa-key nav-icon"></i>
                            <p>Password</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="./logout.php" class="nav-link">
                            <i class="fas fa-sign-out-alt nav-icon"></i>
                            <p>Sign Out</p>
                        </a>
                    </li>
                </ul>
            </li>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->