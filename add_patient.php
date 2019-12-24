<style>
.error{
    color: red;
}
</style>
  <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="demoModalLabel">Patient details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">                                       
                                                    <form class="forms-sample" id="patientform" method="POST" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="firstName">First Name</label>
                                                                    <input type="text" id="firstName" name="firstName" class="form-control"  placeholder="First Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="middleName">Middle Name</label>
                                                                    <input type="text" id="middleName" name="middleName" class="form-control"  placeholder="Middle Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="surname">Last Name</label>
                                                                    <input type="text" id="surname" name="surname" class="form-control"  placeholder="Last Name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="gender">Gender</label>
                                                                    <select  class="form-control select2" id="gender" name="gender" placeholder="Gender">
                                                                        <option value="1">Male</option>
                                                                        <option value="2">Female</option>
                                                                        <option value="3">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>  
                                                        </div>   
                                                              <div class="row">                                                                                            
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="birthDate">Birth Date</label>
                                                                    <input id="dropper-max-year" class="form-control" type="text" name="birthDate" placeholder="Max Yr 2020" />
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="maritalstatus">Marital Status</label>
                                                                    <select  class="form-control select2" id="maritalstatus" name="mstatus" placeholder="Marital Status">
                                                                        <option value="1">Single</option>
                                                                        <option value="2">Married</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="mobile1">Mobile</label>
                                                                    <input type="text" class="form-control" id="mobile1" name="mobile1" placeholder="Mobile no">
                                                                </div>
                                                            </div> 
                                                            </div> 
                                                            <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="address">Address</label>
                                                                    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
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
                    </div>
                    <script src="js/jquery.validate.js"></script>
                    <script src="jscode/patient_validation.js"></script>
                    <script src="jscode/addPatient.js"></script>