<div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="index.php">
                            <div class="logo-img">
                               <img src="src/img/brand-white.svg" class="header-brand-img" alt="lavalite"> 
                            </div>
                            <span class="text">Spine 360</span>
                        </a>
                        <button type="button" class="nav-toggle"><i id="tog" data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel"><?php echo $_SESSION['username'];?></div>
                                <div class="nav-item active">
                                    <a href="patients.php"><i class="ik ik-user"></i><span>Reception</span></a>  
                                </div>
                                <div class="nav-item">
                                    <a href="appointments.php"><i class="ik ik-file-text"></i><span>Appointmets</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="callCenter.php"><i class="ik ik-phone-forwarded"></i><span>Call Center</span> <span class="badge badge-success"></span></a>
                                </div>
                                <!-- <div class="nav-item">
                                    <a href="#"><i class="ik ik-menu"></i><span>OPD Collection</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="#"><i class="ik ik-menu"></i><span>Package Collection</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="#"><i class="ik ik-database"></i><span>Data Master</span> <span class="badge badge-success"></span></a>
                                </div> -->
                                <div class="nav-item">
                                    <a href="package-master.php"><i class="ik ik-menu"></i><span>Package Master</span> <span class="badge badge-success"></span></a>
                                </div>
                                <!-- <div class="nav-item">
                                    <a href="#"><i class="ik ik-user-plus"></i><span>Quick Diagnostic Test</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="#"><i class="ik ik-menu"></i><span>Analytics</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="#"><i class="ik ik-user-plus"></i><span>Pharmacy</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="#"><i class="ik ik-calendar"></i><span>Call Center Reports</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="#"><i class="ik ik-menu"></i><span>Expenses</span> <span class="badge badge-success"></span></a>
                                </div> -->
                                <div class="nav-item">
                                    <a href="branchMaster.php"><i class="ik ik-menu"></i><span>Branch Master</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="userMaster.php"><i class="ik ik-user"></i><span>User Master</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="feesMaster.php"><i class="ik ik-user"></i><span>Fees Master</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="newTestMaster.php"><i class="ik ik-user"></i><span>Test Master</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="diagnosisMaster.php"><i class="ik ik-menu"></i><span>Diagnosis Master</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="complaintMaster.php"><i class="ik ik-menu"></i><span>Complaint Master</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="adviceMaster.php"><i class="ik ik-user"></i><span>Advice Master</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="instructionMaster.php"><i class="ik ik-user"></i><span>Instruction Master</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="medicinesMaster.php"><i class="ik ik-user"></i><span>Medicines Master</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="dosageMaster.php"><i class="ik ik-user"></i><span>Dosage Master</span> <span class="badge badge-success"></span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="medicineType.php"><i class="ik ik-user"></i><span>Medicine Type</span> <span class="badge badge-success"></span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>