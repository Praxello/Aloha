<?php
session_start();
if(isset($_SESSION['branchId'])){
    ?>
<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Praxello Solutions</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

        <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css">
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="plugins/c3/c3.min.css">
        <link rel="stylesheet" href="plugins/owl.carousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="dist/css/theme.min.css">
        <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="plugins/datedropper/datedropper.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/loader.css">
    </head>
<Style>
   
@media only screen and (max-width: 600px) {
  .tbl {
    overflow-x:auto;
  }
}
</Style>
    <body>
        <div class="wrapper">
            <div class="page-wrap">
                <?php include 'header.php';?>
                <?php include 'sidebar.php';?>
                <div id="editProfile"></div>
                <div class="main-content template-demo " id="tData">
                
                <button class="btn btn-success" type="button" style="float: right;margin-bottom: 10px;" data-toggle="modal" data-target="#demoModal">Add New Patient</button>
                    <div class="container-fluid">
                   
                        <div class="card">
                        
                            <div class="card-body table-responsive">
                            <!-- <div style="overflow-x:auto;"> -->
                            <div class="dt-responsive tbl">
                                <table id="pTable" class="table">
                                    <thead>
                                        <tr>
                                            <th class="nosort">Profile</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Contact Number</th>
                                            <th>Address</th>
                                            <th>Last Visit</th>
                                            <th>Next Visit</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="patientData">
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            <!-- <div> -->
                        </div>
                    </div>
                </div>
                <div id="loader"></div>
                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © 2020 Praxello Solutions All Rights Reserved.</span>
                        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="https://praxello.com/" class="text-dark" target="_blank">Praxello</a></span>
                    </div>
                </footer>

            </div>
        </div>
      
        <script src="js/jquery-3.3.1.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')
        </script>
         <script>
       var data = {
userId:<?php echo $_SESSION['userId'];?>,
branchId:<?php echo $_SESSION['branchId'];?>,
username:'<?php echo $_SESSION['username'];?>'
};
       </script>
        <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="plugins/screenfull/dist/screenfull.js"></script>
        <script src="plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <script src="plugins/datedropper/datedropper.min.js"></script>
        <script src="js/form-picker.js"></script>
        <script src="plugins/moment/moment.js"></script>
        <script src="plugins/sweetalert/dist/sweetalert.min.js"></script>
        <script src="plugins/select2/dist/js/select2.min.js"></script>
        <script src="plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="plugins/d3/dist/d3.min.js"></script>
        <script src="plugins/c3/c3.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/tables.js"></script>
        <script src="jscode/apis.js"></script>
        <script src="jscode/getReffName.js"></script>
      
       <?php include 'add_patient.php';?>
       <?php include 'take-appointment.php';?>
       <?php include 'opd-payments.php';?>
       <?php include 'opd-generatePayments.php';?>
        <script src="js/charts.js"></script>
        <script src="dist/js/theme.min.js"></script>
        <script src="jscode/loader.js"></script>
       <script src="jscode/getDateFormat.js"></script>
       <script src="jscode/getAge.js"></script>
       <script src="jscode/patients.js"></script>
       <script src="jscode/getUsers.js"></script>
       <script src="jscode/loadUsers.js"></script>
       <script src="jscode/branchUsers.js"></script>
       <script src="jscode/getPayments.js"></script>
       <script src="jscode/getAllTests.js"></script>
       <script src="jscode/loadFile.js"></script>
       <script src="jscode/loadTest.js"></script>
       <script src="jscode/getPackages.js"></script>
       <script src="jscode/getCountryStateCity.js"></script>
       <script src="jscode/getPreviousPayments.js"></script>
       <script src="jscode/getDiscount.js"></script>
       <script src="jscode/prescribeTestTable.js"></script>
       <script src="jscode/packagePayment.js"></script>
      
    </body>
</html>
<?php
}else{
header('Location:index.php');
}
?>
 