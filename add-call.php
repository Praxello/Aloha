<div class="modal fade full-window-modal" id="fullwindowModal" tabindex="-1" role="dialog" aria-labelledby="fullwindowModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form id="callForm" method="POST">
        <div class="modal-content">
            <div class="modal-header" style="background-color: aliceblue;">
                <h5 class="modal-title" id="fullwindowModalLabel"><strong>Call Information</strong></h5>
                <div class="template-demo">
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter">Search Old Record</button>
                </div>
               
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color: aliceblue;">
                                    <h3><strong>Basic Details</strong></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="firstName">First Name</label>
                                                <input type="text" placeholder="John" class="form-control" name="firstName" id="firstName">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Middle Name</label>
                                                <input type="text" placeholder="Mosh" class="form-control" name="middleName" id="middleName">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Last Name</label>
                                                <input type="text" placeholder="Doe" class="form-control" name="lastName" id="lastName">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Enter Age</label>
                                                <input type="number" class="form-control" name="age" id="age" onchange="getBirthDay(this.value)">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Date of Birth</label>
                                                <input type="date" class="form-control" name="birthdate" id="birthdate">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Gender</label>
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color: aliceblue;">
                                    <h3><strong>Contact Details</strong></h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Email Id</label>
                                                <input type="email" class="form-control" name="emailId" id="emailId">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Contact Number</label>
                                                <input type="text" class="form-control" name="mobile" id="mobile">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Landline number</label>
                                                <input type="tel" class="form-control" name="landline" id="landline">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Country</label>
                                                <select  class="form-control"name="country" id="country" style="width: 100%;" onchange="loadStates(this.value);"></select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">State</label>
                                        
                                                <select  class="form-control" name="state" id="state" style="width: 100%;" onchange="loadCities(this.value);"></select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">City</label>
                                                <select  class="form-control" name="city" id="city" style="width: 100%;"></select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Zip Code</label>
                                                <input type="text" class="form-control" name="zipcode" id="zipcode">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Near by area</label>
                                                <input type="text" class="form-control" name="nearbyarea" id="nearbyarea">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Reference</label>
                                                <select  class="form-control" name="reference" id="reference" style="width: 100%;"></select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <!-- <div class="form-group">
                                                <label for="">Call Date/Time</label>
                                                <input type="datetime-local" class="form-control" name="calldatetime" id="calldatetime">
                                            </div> -->
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Branch</label>
                                                <select name="branchId" id="branchId" class="form-control" style="width: 100%;" onchange="loadUsers(this.value)">

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Doctor</label>
                                                <select name="userId" id="userId" class="form-control" style="width: 100%;">

                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" style="background-color: aliceblue;">
                        <h3 class="d-block w-100"><strong>Information
                                                          </strong></h3>
                    </div>
                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Desease</label>
                                    <input type="text" class="form-control" name="desease" id="desease">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Appointment Date</label>
                                    <input type="date" class="form-control" name="appointmentDate" id="appointmentDate">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Remarks</label>
                                    <input type="text"  class="form-control" name="remarks" id="remarks">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                <div class="checkbox-fade fade-in-success">
                                                        <label>
                                                            <input type="checkbox" name="followup" id="followup" value="1">
                                                            <span class="cr">
                                                                <i class="cr-icon ik ik-check txt-success"></i>
                                                            </span>
                                                            <span>Follow up needed ?</span>
                                                        </label>
                                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Follow up Date/Time</label>
                                    <input type="datetime-local" class="form-control" name="follwupdate" id="follwupdate">
                                </div>
                            </div>
                            <div class="col-md-4">
                               
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="new">Save changes</button>
                <button type="button" class="btn btn-primary" id="update" style="display: none;" onclick="updateCall()">Save changes</button>
            </div>
        </div>
        </form>
    </div>
</div>

<script src="jscode/call-center-validation.js"></script>
<script src="jscode/addCall.js"></script>
<script src="jscode/updateCall.js"></script>