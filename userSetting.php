<?php
session_start();
if(isset($_SESSION['branchId'])){
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
        <link rel="stylesheet" href="dist/css/loader.css">
    </head>
    <Style>
      .error {
        color: red;
    }
    </Style>

    <body>
        <div class="wrapper">

            <div class="page-wrap">
                <?php include 'header.php';?>
                    <?php include 'sidebar.php';?>
                
                            <div class="main-content">
                                <div class="container-fluid">

                                    <div class="col-lg-12 col-md-7">
                                        <div class="card">
                                            <ul class="nav nav-pills custom-pills t1" id="pills-tab" role="tablist">

                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">

                                                <div class="tab-pane fade show active" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                                    <div class="card-body">
                                                        <form class="forms-sample" id="usersettingForm" method="POST" enctype="multipart/form-data">
                                           
                                <div class="row">      
                                     <div class=col-md-4>           
                                            <div class="form-group row">
                                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">User Name <span id="username"></span></label>
                                                    <!-- <div class="col-sm-9">
                                                    <input type="text" id="username" name="username" class="form-control" placeholder="User Name" onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode <= 32'>
                                                </div> -->
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label"> Old Password</label>
                                                    <div class="col-sm-9">
                                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">New Password</label>
                                                    <div class="col-sm-9">
                                                    <input type="password" id="newpassword" name="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Confirm Password</label>
                                                    <div class="col-sm-9">
                                                    <input type="password" id="conpassword1" name="conpassword" class="form-control" placeholder="Password">
                                                </div>
                                            </div>
                                    </div>
                             
                                 
                                     <div class=col-md-6>  


                                     <img src="" class="rounded-circle img-fluid mb-20" width="150" height="150" id="reffredJpg" style="padding-block-end: 10px;">

                                        <div class="row text-center justify-content-md-center">
                                                <div class="form-group">
                                                       <input type="file" name="imgProfile" id="imgProfile" class="form-control" onchange="loadpic(event)">
                                                        </div>
                                                </div>
                                    
                                     </div>
                                </div>
                                                            <!-- <div class="row">

                                                                <div class="col-md-4">
                                                                <div class="form-group">
                                                                     <label for="username" >User Name</label>
                                                                     <input type="text" id="username" name="username" class="form-control" placeholder="User Name" onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode <= 32'>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="latitude">Password</label>
                                                                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="latitude"   >Confirm Password</label>
                                                                        <input type="password" id="conpassword1" name="conpassword" class="form-control" placeholder="Password">
                                                                    </div>
                                                                </div>

                                                            </div> -->
                                                            <!-- <div class="row">

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="longitude">Mobile Number </label>
                                                                        <input type="text" id="mobile" name="mobile" class="form-control" placeholder="mobile" ng-pattern="/^[0-9]*$/" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10">

                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="usertype">Aadhar Number</label>
                                                                        <input type="text" id="addharId" name="addharId" class="form-control" placeholder="Aadhar Number" ng-pattern="/^[0-9]*$/" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="usertype" class="required">User Type</label>
                                                                        <select class="form-control select2" id="roleIde" name="usertype" style="width: 100%;" placeholder="role Name">
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div> -->

                                                            <!-- <div class="row">

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="designation">Designation</label>
                                                                        <input id="designation" class="form-control" type="text" name="designation" placeholder="Designation" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="branchName" class="required">Branch Name </label>
                                                                        <select class="form-control select2" id="branchIde" name="branchName" style="width: 100%;" placeholder="Branch Name">

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="firmName">firm Name</label>
                                                                        <input id="firmName" class="form-control" type="text" name="firmName" placeholder="firm Name" />
                                                                    </div>
                                                                </div>

                                                            </div> -->
                                                            <!-- <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="address">Sign</label>
                                                                        <textarea id="sign" class="form-control" type="text" name="sign" placeholder="sign"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="address">Address</label>
                                                                        <textarea id="address" class="form-control" type="text" name="address" placeholder="address"></textarea>

                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4" style="margin-top: 33px;">
                                                                    <label for="firmName">Active</label>
                                                                    <div class="checkbox-fade fade-in-success check">
                                                                        <label>
                                                                            <input type="radio" value="1" name="active" id="active1">
                                                                            <span class="cr">
                                      <i class="cr-icon ik ik-check txt-success"></i>
                                      </span>
                                                                            <span>Yes</span>
                                                                        </label>
                                                                        <label>
                                                                            <input type="radio" value="0" name="active" id="inactive1">
                                                                            <span class="cr">
                                      <i class="cr-icon ik ik-check txt-success"></i>
                                      </span>
                                                                            <span>No</span>
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                            </div> -->

                                                            <!-- <button class="btn btn-success" type="submit">Update User</button>
                                                            <button class="btn btn-success" type="button" onclick="gobackUser()">Cancel</button> -->

                                                        </form>
                                                    </div>
                                                </div>

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
            <script>
                window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')
            </script>
            <script>
                var data = {
                    userId: <?php echo $_SESSION['userId'];?>,
                    branchId: <?php echo $_SESSION['branchId'];?>,
                    username: '<?php echo $_SESSION['username'];?>'
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
            <script src="js/tables.js"></script>
            <script src="jscode/apis.js"></script>
            <script src="jscode/loader.js"></script>
                <script src="js/charts.js"></script>
                <script src="dist/js/theme.min.js"></script>
           
                <script src="js/jquery.validate.js"></script>
            <script src="jscode/userSetting_validation.js"></script>
         
            <script src="jscode/getUserSetting.js"></script>

    </body>

    </html>
    <?php
}else{
header('Location:index.php');
}
?>