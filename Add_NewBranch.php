<style>
    .error{
        color:red;
    }
</style>

<div class="modal fade" id="branchModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel">Branch details:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" id="branchMasterForm" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="branchName">Branch Name</label>
                                <input type="text" id="branchName" name="branchName" class="form-control" placeholder="Branch Name">
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
                              onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="landline1">Primary Landline Number </label>
                                <input id="landline1" class="form-control" type="text" name="landline1" placeholder="mobile"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="landline2">Secondary Landline Number </label>
                                <input id="landline2" class="form-control" type="text" name="landline2" placeholder="mobile"  onkeypress="return event.charCode >= 48 && event.charCode <= 57" />
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
                    

                <div class="modal-footer">

                    <input type="submit" class="btn btn-primary mr-2" value="Submit">
                    <button class="btn btn-light" id="cButton" data-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="jscode/insert_branchMaster.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="jscode/branchMaster_validation.js"></script>