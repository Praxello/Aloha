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
        <link rel="stylesheet" href="plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
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
        <link href= 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-darkness/jquery-ui.css'  rel='stylesheet'> 
    </head>
<style>
   .error{
    color: red;
}
@media only screen and (max-width: 600px) {
  .tbl {
    overflow-x:auto;
  }
}
 .ui-datepicker-trigger { position:relative;top:{}px ;right:{}px ; width:33px } /* {} is the value according to your need */ 
</style>
    <body>
        <div class="wrapper">
            <div class="page-wrap">
                <?php include 'header.php';?>
                <?php include 'sidebar.php';?>
                <div id="editProfile"></div>
                <div class="main-content template-demo" id="tData">
                <div class="btn-group" role="group" aria-label="Basic example" style="margin-left: 16px;">
                <button type="button" class="btn btn-warning" data-toggle="collapse" href="#content3" role="button" aria-expanded="false" aria-controls="collapseExample">My work</button>
                <button type="button" class="btn btn-primary" data-toggle="collapse" href="#content"  role="button" aria-expanded="false" aria-controls="collapseExample">Appointment</button>
  <button type="button" class="btn btn-success" data-toggle="collapse" href="#content1" role="button" aria-expanded="false" aria-controls="collapseExample">Follow up List</button>
  <button type="button" class="btn btn-default" data-toggle="collapse" href="#content2" role="button" aria-expanded="false" aria-controls="collapseExample">Absent Patients</button>
</div>
<button type="button" class="btn btn-primary float-right" onclick="newCall()">New Call</button>
                    <div class="container-fluid" style="margin-top: 10px;">
                   
                        <div class="card">
                        <div id="content" class="collapse">
                        <form id="callRegister">
                        <div class="card-header row">
                          
                                <div class="col-sm-2">
                                     <div class="form-group">
                                        <label for="">From</label>
                                         <div class="input-group">
                                        <input type="text" class="form-control" name="fromDate" id="fromDate" value="<?php echo date ('Y-m-d');?>">
                                    </div>
                                </div>          
                          </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Upto</label>
                                        <div class="input-group">
                                        <input type="text" class="form-control" name="uptoDate" id="uptoDate" value="<?php echo date ('Y-m-d');?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Branch</label>
                                      <select name="branch" id="branch" style="width: 100%;" class="form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-2" style="margin-top: 16px;" >
                                    <div class="form-group" style="margin-top: 20px;">
                                    <button class="btn  btn-primary" type="button"  onclick="callRegister()">Search</button>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                   
                                </div>
                               
                            </div>
                            </form>
  </div>
                       <div id="content1" class="collapse">
                            <form id="followuplist">
                        <div class="card-header row">
                          
                                <div class="col-sm-2">
                                    <div class="form-group">

                                        <label for="">From</label>
                                        <div class="input-group">
                                        <input type="text" class="form-control" name="folDate" id="folDate" value="<?php echo date ('Y-m-d');?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Upto</label>
                                        <div class="input-group">
                                        <input type="text" class="form-control" name="foluDate" id="foluDate" value="<?php echo date ('Y-m-d');?>">
</div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Branch</label>
                                      <select name="branchF" id="branchF" style="width: 100%;" class="form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-2" style="margin-top: 16px;">
                                    <div class="form-group" style="margin-top: 20px;">
                                       
                                    <button class="btn  btn-success" type="button"  onclick="followupList()">Search</button>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                   
                                </div>
                               
                            </div>
                            </form>
                        </div>
                        <div id="content2" class="collapse">
                            <form id="absentList">
                        <div class="card-header row">
                          
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">From</label>
                                        <div class="input-group">
                                        <input type="text" class="form-control" name="foDate" id="foDate" value="<?php echo date ('Y-m-d');?>">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Upto</label>
                                        <div class="input-group">
                                        <input type="text" class="form-control" name="upDate" id="upDate" value="<?php echo date ('Y-m-d');?>"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Branch</label>
                                      <select name="branchA" id="branchA" style="width: 100%;" class="form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="form-group" style="margin-top: 20px;">
                                       
                                    <button class="btn  btn-default" type="button"  onclick="absentList()">Search</button>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                   
                                </div>
                               
                            </div>
                            </form>
                        </div>
                        <div id="content3" class="collapse">
                            <form id="myWork">
                        <div class="card-header row">
                          
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">From</label>
                                        <div class="input-group">
                                        <input type="text" class="form-control" name="mfoDate" id="mfoDate" value="<?php echo date ('Y-m-d');?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Upto</label>
                                        <div class="input-group">
                                        <input type="text" class="form-control" name="mupDate" id="mupDate" value="<?php echo date ('Y-m-d');?>">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="">Branch</label>
                                      <select name="mbranch" id="mbranch" style="width: 100%;" class="form-control"></select>
                                    </div>
                                </div>
                                <div class="col-sm-2" >
                                    <div class="form-group" style="margin-top: 20px;">
                                    <button class="btn  btn-warning" type="button"  onclick="myWork()">Search</button>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                   
                                </div>
                               
                            </div>
                            </form>
                        </div>
                            <div class="card-body c" id="appT">
                            <!-- <div style="overflow-x:auto;"> -->
                            <div class="dt-responsive tbl" >
                                <table id="cTable" class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 15%;">Name</th>
                                            <th style="width: 15%;">Doctor</th>
                                            <th>Branch</th>
                                            <th>Age</th>
                                            <th>Contact Number</th>
                                            <th>Appointment Date</th>
                                            <th>Follow up Need</th>
                                            <th>Status</th>
                                            <th>Follow up date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="callData">
                                       
                                    </tbody>
                                </table>
                                    </div>
                            </div>
                            <div class="card-body c" style="display: none;" id="customerT">
                            <!-- <div style="overflow-x:auto;"> -->
                            <div class="dt-responsive tbl">
                                <table id="customerTable" class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 15%;">Name</th>
                                            <th>Email</th>
                                            <th>Age</th>
                                            <th>Contact Number</th>
                                            <th style="width: 20%;">Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="customerData">
                                       
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
        <script src= "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
        <script>
       // $.fn.modal.Constructor.prototype.enforceFocus = function() {};
            window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')
        </script>
         <script>
       var data = {
userId:<?php echo $_SESSION['userId'];?>,
branchId:<?php echo $_SESSION['branchId'];?>,
username:'<?php echo $_SESSION['username'];?>',
today:'<?php echo date('Y-m-d');?>'
};
       </script>
        <?php include 'add-call.php';?>
    <?php include 'search-modal.php'?>
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
        <script src="jscode/loader.js"></script>
        <script src="js/charts.js"></script>
        <script src="dist/js/theme.min.js"></script>
        <script src="js/jquery.validate.js"></script>
    <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/additional-methods.js"></script>
       <script src="jscode/apis.js"></script>
       <script src="jscode/getBranches.js"></script>
        <script src="jscode/getUsers.js"></script>
        <script src="jscode/login.js"></script>
        <script src="jscode/loadUsers.js"></script>
        <!-- <script src="jscode/getNewUser.js"></script> -->
       <script src="jscode/getDateFormat.js"></script>
       <script src="jscode/getAge.js"></script>
       <script src="jscode/cities.js"></script>
       <script src="jscode/getcallFollowup.js"></script>
       <script src="jscode/call-center.js"></script>
       <script>
           $('.collapse').on('show.bs.collapse', function () {
            $('.collapse.show').each(function(){
                $(this).collapse('hide');
            });
        });
       </script>
           <?php include 'take-feedback.php';?>
           <script>
$(document).ready(function() {
  $(function() {
    $("#fromDate").datepicker({
        showButtonPanel: true,
        // appendText:"(Full - DD, d MM, yy)",
        // dateFormat:"DD, d MM, yy",
        showOn: "button",
      buttonImage: "src/img/index.jpg",
      buttonImageOnly: true,
      
      
    //   buttonText: "Select date"
    });

  });
});
$(document).ready(function() {
  $(function() {
    $("#uptoDate").datepicker({
        showButtonPanel: true,
        // appendText:"(Full - DD, d MM, yy)",
        // dateFormat:"DD, d MM, yy",
        showOn: "button",
        buttonImage: "src/img/index.jpg",
      buttonImageOnly: true,
    
    //   buttonText: "Select date"
    });

  });
});


$(document).ready(function() {
  $(function() {
    $("#folDate").datepicker({
        showButtonPanel: true,
        // appendText:"(Full - DD, d MM, yy)",
        // dateFormat:"DD, d MM, yy",
        showOn: "button",
        buttonImage: "src/img/index.jpg",
      buttonImageOnly: true,
    
    //   buttonText: "Select date"
    });

  });
});

$(document).ready(function() {
  $(function() {
    $("#foluDate").datepicker({
        showButtonPanel: true,
        // appendText:"(Full - DD, d MM, yy)",
        // dateFormat:"DD, d MM, yy",
        showOn: "button",
        buttonImage: "src/img/index.jpg",
      buttonImageOnly: true,
    
    //   buttonText: "Select date"
    });

  });
});



$(document).ready(function() {
  $(function() {
    $("#mfoDate").datepicker({
        showButtonPanel: true,
        // appendText:"(Full - DD, d MM, yy)",
        // dateFormat:"DD, d MM, yy",
        showOn: "button",
        buttonImage: "src/img/index.jpg",
      buttonImageOnly: true,
    
    //   buttonText: "Select date"
    });

  });
});

$(document).ready(function() {
  $(function() {
    $("#mupDate").datepicker({
        showButtonPanel: true,
        // appendText:"(Full - DD, d MM, yy)",
        // dateFormat:"DD, d MM, yy",
        showOn: "button",
        buttonImage: "src/img/index.jpg",
      buttonImageOnly: true,
    
    //   buttonText: "Select date"
    });

  });
});


$(document).ready(function() {
  $(function() {
    $("#foDate").datepicker({
        showButtonPanel: true,
        // appendText:"(Full - DD, d MM, yy)",
        // dateFormat:"DD, d MM, yy",
        showOn: "button",
        buttonImage: "src/img/index.jpg",
      buttonImageOnly: true,
    
    //   buttonText: "Select date"
    });

  });
});


$(document).ready(function() {
  $(function() {
    $("#upDate").datepicker({
        showButtonPanel: true,
        // appendText:"(Full - DD, d MM, yy)",
        // dateFormat:"DD, d MM, yy",
        showOn: "button",
        buttonImage: "src/img/index.jpg",
      buttonImageOnly: true,
    
    //   buttonText: "Select date"
    });

  });
});
</script>
    </body>

</html>
<?php
}else{
header('Location:index.php');
}
?>
 