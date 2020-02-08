<style>
    .error{
        color:red;
    }
</style>

<link rel="stylesheet" href="dist/css/dropzone.css">
<link rel="stylesheet" href="dist/css/style.css">
<div class="main-content">
    <div class="container-fluid">
   
        <div class="col-lg-12 col-md-7">
            <div class="card">
                <ul class="nav nav-pills custom-pills t1" id="pills-tab" role="tablist">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Profile</a>
                    </li>    -->
                   
                </ul>
                <div class="tab-content" id="pills-tabContent">
               
                 
                    <div class="tab-pane fade show active" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                        <div class="card-body">

                        <form class="forms-sample" id="branchMasterForm" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="branchName">Branch Name</label>
                                <input type="text" id="branchName" name="branchName" class="form-control" placeholder="Branch Name"
                              >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="latitude">Latitude</label>
                                <input type="text" id="latitude" name="latitude" class="form-control" placeholder="latitude">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="longitude">Longitude </label>
                                <input type="text" id="longitude" name="longitude" class="form-control" placeholder="longitude">

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="latitude">Map Url</label>
                                <input type="text" id="mapURL" name="mapURL" class="form-control" placeholder="Url">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mobile1">Primary Mobile Number </label>
                                <input id="mobile1" class="form-control" type="text" name="mobile1" placeholder="mobile" ng-pattern="/^[0-9]*$/"
                              onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mobile2">Secondary Mobile Number </label>
                                <input id="mobile2" class="form-control" type="text" name="mobile2" placeholder="mobile" ng-pattern="/^[0-9]*$/"
                              onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10" />
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="landline1">Primary Landline Number </label>
                                <input id="landline1" class="form-control" type="text" name="landline1" placeholder="mobile"   onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="landline2">Secondary Landline Number </label>
                                <input id="landline2" class="form-control" type="text" name="landline2" placeholder="mobile"   onkeypress="return event.charCode >= 48 && event.charCode <= 57" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="fax">fax </label>
                                <input type="text" class="form-control" id="fax" name="fax" placeholder="fax">
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="branchAddress">Address</label>
                                <textarea class="form-control" id="branchAddress" name="branchAddress" rows="1"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn btn-success" type="submit">Update Branch</button>
                    <button class="btn btn-success" type="button" onclick="goback1()">Cancel</button>
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
<script src="jscode/edit_branch.js"></script>
<script src="jscode/update_Branch_Master.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="jscode/branchMaster_validation.js"></script>

