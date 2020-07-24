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
                  <a href="collection.php"><i class="fas fa-money-bill"></i><span>Collection</span></a>
                 </div>
               
                <div class="nav-item">
                    <a href="branchMaster.php"><i class="fa fa-code-branch"></i></i><span>Branch Master</span></a>
                </div>
                <div class="nav-item">
                    <a href="userMaster.php"><i class="fa fa-user-md"></i></i><span>User Master</span></a>
                </div>
                <div class="nav-item">
                    <a href="discountMaster.php"><i class="fa fa-percent"></i><span>Discount Master</span></a>
                </div>
                <div class="nav-item">
                    <a href="discountClass.php"><i class="fa fa-percent"></i><span>Discount Class</span></a>
                </div>
                 <div class="nav-item">
                    <a href="franchise-reports.php"><i class="ik ik-menu"></i><span>Report</span></a>
                </div>
            </nav>
        </div>
    </div>
</div>
