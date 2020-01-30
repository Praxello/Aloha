<style>
    .error{
        color:red;
    }
</style>

<link rel="stylesheet" href="dist/css/dropzone.css">
<link rel="stylesheet" href="dist/css/style.css">
<div class="main-content">
    <div class="container-fluid">
        <!-- <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="rounded-circle" style="margin-right: 50px"><img src="img/user.jpg" style="height: 82px;margin-top: 38px;" class="rounded-circle"  height="50px" id="userPic" /></i>
                        <div class="d-inline">
                            <h5 class="card-title" id="uname">John Doe</h5>
                            <p class="card-subtitle" id="ucity">Front End Developer</p>

                        </div>
                    </div>
                    <div style="margin-left : 55px">
                        <i class="ik ik-user" style="color: blueviolet;"></i> <font id="uage">254</font>
                        <i class="ik ik-image" style="color: chocolate;"> </i> <font id="ugender">54</font>

                        <i class="rounded-circle"><h6 id="uphone"  style="margin-left: 36px">(123) 456 7890</h6></i>
                    </div>

                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="patients.php">Patients</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div> -->

        <div class="col-lg-12 col-md-7">
            <div class="card">
                <ul class="nav nav-pills custom-pills t1" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-setting" aria-selected="false">Upload Documents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-setting" aria-selected="false">Profile Picture</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#cervical" role="tab" aria-controls="pills-setting" aria-selected="false">Cancel Appointments</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade " id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                        <!-- <form id="uploadProfile" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="profiletimeline mt-0">

                                    <div class="text-center">
                                        <img src="img/user.jpg" class="rounded-circle img-fluid mb-20" width="150" height="150" id="userJpg" style="padding-block-end: 10px;">

                                        <div class="row text-center justify-content-md-center">
                                            <div class="form-group">
                                                <input type="file" name="profilePic" id="profilePic" class="form-control" onchange="loadFile(event)">
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-success" type="submit">Update profile picture</button>
                                </div>
                            </div>
                        </form> -->
                    </div>
                    <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <!-- <div class="card-body">
                            <div class="row">

                            </div>
                            <div class="profiletimeline mt-0">
                                <div class="card-header">
                                    <h3>Upload an Documents</h3></div>
                                <div class="card-body">
                                    <form action="apis/upload.php" class="dropzone" id="myAwesomeDropzone">
                                        <input type="hidden" id="patientId" name="patientId" />
                                    </form>
                                </div>
                                <hr>

                            </div>
                        </div> -->
                    </div>
                    <div class="tab-pane fade show active" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                        <div class="card-body">
                            <form class="forms-sample" id="userMasterForm" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="username">User Name</label>
                                            <input type="text" id="username" name="username" class="form-control" placeholder="User Name" onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode <= 32'>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="mobile">Mobile Number </label>
                                            <input type="text" id="mobile" name="mobile" class="form-control" placeholder="mobile" ng-pattern="/^[0-9]*$/"
                              onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="addharId">Aadhar Number</label>
                                            <input type="text" id="addharId" name="addharId" class="form-control" placeholder="Aadhar Number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="usertype">User Type</label>
                                            <input id="usertype" class="form-control" type="text" name="usertype" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="designation">Designation</label>
                                            <input id="designation" class="form-control" type="text" name="designation" placeholder="Designation" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea id="address" class="form-control" type="text" name="address" placeholder="address"></textarea>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="firmName">firm Name</label>
                                            <input id="firmName" class="form-control" type="text" name="firmName" placeholder="firm Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="fax">sign </label>
                                            <input type="text" class="form-control" id="sign" name="sign" placeholder="sign">
                                        </div>
                                    </div>

                                </div>

                                <button class="btn btn-success" type="submit">Update User</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/dropzone.js"></script>
<script type="text/javascript" src="jscode/dropzoneProduct.js"></script>
<script src="jscode/edit_User.js"></script>
<script src="jscode/update_User_Master.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="jscode/userMaster_validation.js"></script>