<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="#">
            <div class="logo-img">
                <img src="../src/img/logo1.jpg"  alt="lavalite" width="30px" class="rounded-circle">
            </div>
            <span class="text">Spine 360</span>
        </a>
        <button type="button" class="nav-toggle"><i id="tog" data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>

    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-lavel">
                    <?php echo $_SESSION['username'];?>
                </div>
    
               <div class="nav-item">
                  <a href="admin-reports.php"><i class="fas fa-money-bill"></i><span>Report</span></a>
                 </div>
                <div class="nav-item">
                    <a href="package-master.php"><i class="ik ik-menu"></i><span>Franchise</span></a>
                </div>
            </nav>
        </div>
    </div>
</div>
