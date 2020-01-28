<style>
.error{
    color: red;
}
</style>
  <div class="modal fade" id="demoModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="demoModalLabel">Patient details:</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">                                       
                                                    <form class="forms-sample" id="patientform" method="POST" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="firstName">First Name</label>
                                                                    <input type="text" id="firstName" name="firstName" class="form-control"  placeholder="First Name"
                                                                    onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode <= 32'>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="middleName">Middle Name</label>
                                                                    <input type="text" id="middleName" name="middleName" class="form-control"  placeholder="Middle Name"
                                                                    onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode <= 32'>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="surname">Last Name</label>
                                                                    <input type="text" id="surname" name="surname" class="form-control"  placeholder="Last Name"
                                                                    onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode <= 32'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="gender">Gender</label>
                                                                    <select  class="form-control select2" id="gender" name="gender" placeholder="Gender">
                                                                    
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>  
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="birthDate">Birth Date</label>
                                                                    <input id="dropper-max-year" class="form-control" type="text" name="birthDate" placeholder="Max Yr 2020" />
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="maritalstatus">Marital Status</label>
                                                                    <select  class="form-control select2" id="maritalstatus" name="maritalstatus" placeholder="Marital Status">
                                                                        <option value="Single">Single</option>
                                                                        <option value="Married">Married</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>   

                                                       
                                                        <h5>Medical Details:</h5                                                                                >
                                                     <div class="row">                                                                                            
                                                         
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="mobile1">Height</label>
                                                                    <input type="text" class="form-control" id="height" name="height" placeholder="height">
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="weight">Weight</label>
                                                                    <input type="text" class="form-control" id="weight" name="weight" placeholder="weight">
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="occupation">occupation</label>
                                                                    <input type="text" class="form-control" id="occupation" name="occupation" placeholder="occupation">
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="referredby">Referred By</label>
                                                                    <select id="referredby" name="referredby" class="form-control"></select>
                                                                </div>
                                                            </div> 
                                                      </div> 

                                                       
                                                      <h5>Contact Details:</h5>

                                                     <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="address">Mobile No.</label>
                                                                    <input type="text" class="form-control" id="mobile1" name="mobile1" placeholder="Mobile No">
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="pincode">Pincode</label>
                                                                    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="pincode">
                                                                </div>
                                                            </div> 

                                                                                                                             
                                                     </div>                                                                                               
                                                   
                                                     <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="country">Country</label>
                                                 
                                                                    <select  class="form-control select2" id="country" name="country" placeholder="country">
                                                                        <option value="India">India</option>
                                                                     
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="state">State</label> 
                                                                    <select  class="form-control select2" id="state" name="state" placeholder="state">
                                                                        <option value="Maharashtra">Maharashtra</option>
                                                                        <option value="Gujarat">Gujarat</option>
                                                                        <option value="Aasam">Aasam</option>
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="city">City</label>
                                                                    <input type="text" class="form-control" id="city" name="city" placeholder="city">
                                                                </div>
                                                            </div>  
                                                                   
                                                     </div> 

                                                     <div class="row">
                                             
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="address">Address</label>
                                                                        <textarea class="form-control" id="address" name="address"  rows="1"></textarea>
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
                    <script src="jscode/getReffName.js"></script>
                  