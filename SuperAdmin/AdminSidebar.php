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
                    <?php echo $_SESSION['username'].' ( '.$_SESSION['roleName'].')';?>
                </div>

                <?php
                


switch ($_SESSION['role']) {
    case 1:
        ?>
                    <div class="nav-item active">
                   <a href="patients.php"><i class="ik ik-user"></i><span>Reception</span></a>
                 </div>
              <div class="nav-item">
                <a href="callCenter.php"><i class="ik ik-phone-forwarded"></i><span>Call Center</span></a>
                </div>
               <div class="nav-item">
                  <a href="collection.php"><i class="fas fa-money-bill"></i><span>Collection</span></a>
                 </div>
                 <div class="nav-item">
                    <a href="appointments.php"><i class="ik ik-file-text"></i><span>Appointments</span></a>
                </div>
                <div class="nav-item">
                    <a href="package-master.php"><i class="ik ik-menu"></i><span>Package Master</span></a>
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
                 <?php
        break;
      
        case 2 :?>
        
        <div class="nav-item active">
                   <a href="patients.php"><i class="ik ik-user"></i><span>Reception</span></a>
                 </div>
              <div class="nav-item">
                <a href="callCenter.php"><i class="ik ik-phone-forwarded"></i><span>Call Center</span></a>
                </div>
               <div class="nav-item">
                  <a href="collection.php"><i class="fas fa-money-bill"></i><span>Collection</span></a>
                 </div>
                 
  <?php
          break;
          case 3 :?>
  <div class="nav-item active">
                   <a href="patients.php"><i class="ik ik-user"></i><span>Reception</span></a>
                 </div>
              <div class="nav-item">
                <a href="callCenter.php"><i class="ik ik-phone-forwarded"></i><span>Call Center</span></a>
                </div>
               <div class="nav-item">
                  <a href="collection.php"><i class="fas fa-money-bill"></i><span>Collection</span></a>
                 </div>
                 <div class="nav-item">
                    <a href="appointments.php"><i class="ik ik-file-text"></i><span>Appointments</span></a>
                </div>
               
                <!-- <div class="nav-item">
                    <a href="feesMaster.php"><i class="fa fa-money-check"></i></i><span>Doctor Fees Master</span></a>
                </div> -->
                <div class="nav-item">
                    <a href="newTestMaster.php"><i class="fa fa-x-ray"></i></i><span>Procedure Master</span></a>
                </div>
                <div class="nav-item">
                    <a href="diagnosisMaster.php"><i class="fa fa-diagnoses"></i><span>Diagnosis Master</span> </a>
                </div>
                <div class="nav-item">
                    <a href="complaintMaster.php"><i class="fas fa-users"></i></i><span>Complaint Master</span></a>
                </div>
                <div class="nav-item">
                    <a href="adviceMaster.php"><i class="fa fa-font"></i><span>Advice Master</span></a>
                </div>
                <div class="nav-item">
                    <a href="instructionMaster.php"><i class="fa fa-list-alt"></i><span>Instruction Master</span></a>
                </div>
                <div class="nav-item">
                    <a href="medicinesMaster.php"><i class="fa fa-medkit"></i></i><span>Medicines Master</span></a>
                </div>
                <div class="nav-item">
                    <a href="dosageMaster.php"><i class="fas fa-capsules"></i><span>Dosage Master</span></a>
                </div>
                <div class="nav-item">
                    <a href="medicineType.php"><i class="fa fa-pills"></i></i><span>Medicine Type</span></a>
                </div>
             
                <div class="nav-item">
                    <a href="exerciseChart.php"><i class="fas fa-running"></i><span>Exercise Chart</span></a>
                </div>
                ?>
                <?php
                  break;
                  case 4 :?>
                        <div class="nav-item active">
                   <a href="patients.php"><i class="ik ik-user"></i><span>Reception</span></a>
                 </div>
              <div class="nav-item">
                <a href="callCenter.php"><i class="ik ik-phone-forwarded"></i><span>Call Center</span></a>
                </div>
               <div class="nav-item">
                  <a href="collection.php"><i class="fas fa-money-bill"></i><span>Collection</span></a>
                 </div>
                 <?php
                  break;
                  case 5 :?>
                   <div class="nav-item active">
                   <a href="reports.php"><i class="ik ik-user"></i><span>Reports</span></a>
                 </div>
  <?php
          break;
    default:
   
}
?>



              
              
            </nav>
        </div>
    </div>
</div>
