<?php
session_start();
if (isset($_SESSION['userId'])) {
?>
    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Praxello solutions</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        <!-- <link rel="stylesheet" href="plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css"> -->
        <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/css/bootstrap-datetimepicker.min.css">
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
        <link rel="stylesheet" href="dist/css/jquery-ui.css">
       
        <link rel="stylesheet" href="plugins/bootstrap-tagsinput/dist/tagsinput.css">
        <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="plugins/datedropper/datedropper.min.css">
        <link rel="stylesheet" href="dist/css/loader.css">

     <!-- datetime Picker -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

  <!-- //end -->
 

 <!-- date -->
 <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    </head>
    <style>
            .card .card-header .card-search .form-control {
            padding-right: 0px;
            }

            .datepicker.dropdown-menu {
    min-width: 200px;
            }
#datepicker > span:hover{cursor: pointer;}


    </style>

    <body>
        <div class="wrapper">
            <div class="page-wrap">
                <?php include 'header.php'; ?>
                    <?php include 'sidebar.php'; ?>
                        <div id="editProfile"></div>
                        <div class="main-content" id="tData">
                            <div class="container-fluid">

                            <div class="card">
                                    <div class="card-header row">
                                        <div class="col col-sm-3">
                                           <label for="">Appointment Date</label>
    <!-- <input id="dropper-max-year" class="form-control" type="date" placeholder="select date" onchange="fetch(this.value);" />     -->
                                                <!-- <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker6'>
                                                        <input type='text' class="form-control" onchange="fetch(this.value)" />
                                                        <span class="input-group-addon">
                                                         <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div> -->

                                                <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
    <input class="form-control" type="text"   />
    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
</div> 
                                        </div>

                                        <div class="col col-sm-5">

                                            <div class=" template-demo " id="">
                                                <div class="btn-group" role="group" aria-label="Basic example" style="margin-left: 16px;">
                                                    <button type="button" class="btn btn-warning">Total Patients: &nbsp; &nbsp;&nbsp;&nbsp;<span id="totalPatient"></span></button>
                                                    <button type="button" class="btn btn-primary">New Patients: &nbsp; &nbsp;&nbsp;&nbsp;<span id="newPatients"></span></button>
                                                    <button type="button" class="btn btn-success">Consulted: &nbsp; &nbsp;&nbsp;<span id="consulted"></span></button>
                                                </div>
                                            </div>
                                            </div>

                                            <div class="col col-sm-3">
                                            <!-- <label>Select Date: </label>
<div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
    <input class="form-control" type="text"  />
    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
</div> -->
                                            </div>
                                        </div>
                                        <div class="card-body table-responsive">
                                            <div class="dt-responsive">
                                                <table id="aTable" class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="nosort">Profile</th>
                                                            <th>Patient Name</th>
                                                            <th>Status</th>
                                                            <th>Reffered by</th>
                                                            <th>Fees status</th>
                                                            <th>Patient Type</th>
                                                            <th class="nosort">action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="aptData">
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        </div>

                                      

                                 
                                        <div class="col col-sm-3">

                                        </div>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <div class="dt-responsive">
                                            <table id="aTable" class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="nosort">Profile</th>
                                                        <th>Patient Name</th>
                                                        <th>Status</th>
                                                        <th>Reffered by</th>
                                                        <th>Fees status</th>
                                                        <th>Patient Type</th>
                                                        <th class="nosort">action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="aptData">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
        <script src="js/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!-- <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script> -->
        <script src="js/bootstrap-datetimepicker.js"></script>
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
        <script src="plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="plugins/d3/dist/d3.min.js"></script>
        <script src="plugins/c3/c3.min.js"></script>
        <script src="js/tables.js"></script>
        <script src="js/charts.js"></script>
        <script src="dist/js/theme.min.js"></script>
        <script src="plugins/select2/dist/js/select2.min.js"></script>
     
        <script src="plugins/bootstrap-tagsinput/dist/tagsinput.js"></script>

          <!-- datetime Picker -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

       <!-- end -->

       <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
        <script>
    //         $('.form_date').datetimepicker({
    //     weekStart: 1,
    //     todayBtn:  1,
	// 	autoclose: 1,
	// 	todayHighlight: 1,
	// 	startView: 2,
	// 	minView: 2,
	// 	forceParse: 0
    // });
    const data = {
                userId: <?php echo $_SESSION['userId']; ?>
            };
        </script>
        <script src="jscode/loader.js"></script>
        <script src="jscode/apis.js"></script>
        <script src="jscode/getDateFormat.js"></script>
        <script src="jscode/appointments.js"></script>
        <script src="jscode/getMedicines.js"></script>
        <script src="jscode/getInstructions.js"></script>
        <script src="jscode/getMedicineTypes.js"></script>
        <script src="jscode/getMedicineDosage.js"></script>
        <script src="jscode/getComplaints.js"></script>
        <script src="jscode/getAdvice.js"></script>
        <script src="jscode/getAllDiagnosis.js"></script>
<script>
$(document).ready(function() {
$(function () {
  $("#datepicker").datetimepicker(); 

});
});
</script>
    </body>

    </html>
    <?php
} else {
    header('Location:index.php');
}
?>