

<link rel="stylesheet" href="dist/css/dropzone.css">
<link rel="stylesheet" href="dist/css/style.css">
<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                          <i class="rounded-circle" style="margin-right: 50px"><img src="img/user.jpg" style="height: 82px;margin-top: 38px;" class="rounded-circle"  height="50px" id="userPic" /></i>
                        <div class="d-inline">
                        <h5 class="card-title" id="uname" >John Doe</h5>
                        <p class="card-subtitle" id="ucity">Front End Developer</p>
                    
               
                        </div>
                    </div>
                    <div style="margin-left : 55px">
                    <i class="ik ik-user" style="color: blueviolet;"></i> <font  id="uage">254</font>                  
                        <i class="ik ik-image" style="color: chocolate;"> </i> <font id="ugender">54</font> 
                     
                        <i class="rounded-circle" ><h6 id="uphone"  style="margin-left: 36px">(123) 456 7890</h6></i>
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
        </div>

        <!-- <div class="row">
            <div class="col-lg-4 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="img/user.jpg" class="rounded-circle" width="150" id="userPic" />
                            <h4 class="card-title mt-10" id="uname">John Doe</h4>
                            <p class="card-subtitle" id="ucity">Front End Developer</p>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="ik ik-user"></i> <font class="font-medium" id="uage">254</font></a></div>
                                <div class="col-4"><a href="javascript:void(0)" class="link"><i class="ik ik-image"></i> <font class="font-medium" id="ugender">54</font></a></div>
                            </div>
                        </div>
                    </div>
                    <hr class="mb-0">
                    <div class="card-body">
                        <small class="text-muted d-block">Email address </small>
                        <h6 id="uemailId">johndoe@admin.com</h6>
                        <small class="text-muted d-block pt-10">Phone</small>
                        <h6 id="uphone">(123) 456 7890</h6>
                        <small class="text-muted d-block pt-10">Address</small>
                        <h6 id="uadd">71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                        <hr>
                        <div class="map-box">
                            <div class="card-body template-demo">
                                <button type="button" class="btn btn-primary" onClick="payfees()"><i class="ik ik-star"></i>Pay Fees</button>
                                <button type="button" class="btn btn-success"><i class="ik ik-check-circle"></i>All OPD Payments</button>
                                <button type="button" class="btn btn-secondary"><i class="ik ik-clipboard"></i>Payment History</button>
                                <button type="button" class="btn btn-dark"><i class="ik ik-edit-2"></i>Documents</button>
                                <button type="button" class="btn btn-danger"><i class="ik ik-info"></i>Package Manager</button>
                                <button type="button" class="btn btn-info"><i class="ik ik-share"></i>Medical History</button>
                            </div>
                            <hr>

                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.886539092!2d77.49085452149588!3d12.953959988118836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1542005497600" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                        <!-- </div>
                        <small class="text-muted d-block pt-30">Social Profile</small>
                        <br/>
                        <button class="btn btn-icon btn-facebook"><i class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-icon btn-twitter"><i class="fab fa-twitter"></i></button>
                        <button class="btn btn-icon btn-instagram"><i class="fab fa-instagram"></i></button>
                    </div>
                </div>
            </div> -->
            <div class="col-lg-12 col-md-7">
                <div class="card">
                    <ul class="nav nav-pills custom-pills t1" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Profile</a>
                        </li>
                        <!-- <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#upload_doc" role="tab" aria-controls="pills-profile" aria-selected="false">Upload Documnets</a>
                                        </li> -->
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
                            <form id="uploadProfile" method="POST" enctype="multipart/form-data">
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
                            </form>
                        </div>
                        <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="card-body">
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
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                            <div class="card-body">

                                <form class="form-horizontal" id="epatientDetails" method="POST" enctype="multipart/form-data">
                                    <h5>Basic Details</h5>
                                  
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="fname">First Name</label>
                                                <input type="text" placeholder="Johnathan" class="form-control"   name="firstName" id="firstName" 
                                                 onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode <= 32'>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="mname">Middle Name</label>
                                                <input type="text" placeholder="Kemya" class="form-control" name="middleName" id="middleName"
                                                onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode <= 32'>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lname">Last Name</label>
                                                <input type="text" placeholder="Doe" class="form-control" name="surname" id="surname"
                                                onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode <= 32'>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="maritalstatus">Marital Status</label>
                                                <select name="maritalstatus" id="maritalstatus1" class="form-control">
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Divorced">Divorced</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="bdate">Birth Date</label>
                                                <input type="text" placeholder="123 456 7890" class="form-control" name="birthDate" id="birthDate">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="religion">Religion</label>
                                                <select name="religion" id="religion" class="form-control">
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Muslim">Muslim</option>
                                                    <option value="Sikh">Sikh</option>
                                                    <option value="Jain">Jain</option>
                                                    <option value="none">None of the Above</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> 

                                
                                    <h5>Medical Details</h5>
                                
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="height">Height (in cm)</label>
                                                <input type="text" placeholder="165" class="form-control" name="height" id="height">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="weight">Weight (in KG)</label>
                                                <input type="text" placeholder="65" class="form-control" name="weight" id="weight">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="occupation">Occupation</label>
                                                <input type="text" placeholder="Enginner" class="form-control" name="occupation" id="occupation">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                                <div class="form-group">
                                                <label for="referredby">Referred By</label>
                                                <select id="referredby" name="referredby" class="form-control"></select>
                                              </div>
                                              
                                        </div> 

                                        <div class="col-md-1">
                                        <div class="form-group">
                                              <button class="btn btn-success"  style="margin-top:30px" type="button" data-toggle="modal" data-target="#exampleModal">+</button>  </div>
                                        </div>
                             </div>
                                       
                                              
                                              
                                           
                                    

                                   
                                                      <h5>Contact Details:</h5>

                                                     <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="address">Mobile No.</label>
                                                                    <input type="text" class="form-control" id="mobile1" name="mobile1" placeholder="Mobile No"
                                                                    ng-pattern="/^[0-9]*$/"
                                                      onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="10" maxlength="10">
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                          <div class="form-group">
                                                <label for="landline">Landline</label>
                                                <input type="text" placeholder="123 456 7890" class="form-control" name="landline" id="landline">
                                                            </div>
                                                         </div>
                                                       

                                                            <div class="col-md-3">
                                                     <div class="form-group">
                                                <label for="economicStrata ">Economic Strata</label>
                                                <select name="economicStrata" id="economicStrata" class="form-control">
                                                    <option value="Low">Low</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="High">High</option>
                                                </select>
                                            </div>
                                        </div> 
                                                                                                                             
                                                     </div>                                                                                               
                                                   
                                                     <div class="row">
                                                     <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="country">Country</label>
                                                 
                                                                    <select  class="form-control select2" id="country" name="country"  onchange="loadCities(this.value);" placeholder="country">
                                                                      
                                                                     
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="state">State</label> 
                                                                    <select  class="form-control select2" id="state" name="state" placeholder="state" onchange="loadStates(this.value);">
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="city">City</label>
                                                                    <select  class="form-control select2" id="city" name="city" placeholder="city"></select>
                                                       
                                                                </div>
                                                            </div>  
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="pincode">Pincode</label>
                                                                    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="pincode">
                                                                </div>
                                                            </div> 
                                                           
                                                    
                                                     </div> 

                                    <div class="row">
                                

                                        <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="address">Address</label>
                                                     <textarea class="form-control" id="address1" name="address"  rows="1"></textarea>
                                         </div>

                                         </div>
                                      
                                
                                         <div class="col-md-8">
                                         <h6>Select Default Option</h6>
                                                    
                                                    <div class="col-sm-12 col-xl-12 mb-30">
                                                        <div class="checkbox-fade fade-in-success">
                                                            <label>
                                                                <input type="checkbox" value="1" name="alcohol" id="alcohol">
                                                                <span class="cr">
                                                                    <i class="cr-icon ik ik-check txt-success"></i>
                                                                </span>
                                                                <span>Alcohol</span>
                                                            </label>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-success">
                                                            <label>
                                                                <input type="checkbox" value="1" name="tobacco" id="tobacco">
                                                                <span class="cr">
                                                                    <i class="cr-icon ik ik-check txt-success"></i>
                                                                </span>
                                                                <span>Tobacco</span>
                                                            </label>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-success">
                                                            <label>
                                                                <input type="checkbox" value="1" name="diabetes" id="diabetes">
                                                                <span class="cr">
                                                                    <i class="cr-icon ik ik-check txt-success"></i>
                                                                </span>
                                                                <span>Diabetes</span>
                                                            </label>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-success">
                                                            <label>
                                                                <input type="checkbox" value="1" name="smoking" id="smoking">
                                                                <span class="cr">
                                                                    <i class="cr-icon ik ik-check txt-success"></i>
                                                                </span>
                                                                <span>Smoking</span>
                                                            </label>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-success">
                                                            <label>
                                                                <input type="checkbox" value="1" name="HTN" id="HTN">
                                                                <span class="cr">
                                                                    <i class="cr-icon ik ik-check txt-success"></i>
                                                                </span>
                                                                <span>HTN</span>
                                                            </label>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-success">
                                                            <label>
                                                                <input type="checkbox" value="1" name="cholestrol" id="cholestrol">
                                                                <span class="cr">
                                                                    <i class="cr-icon ik ik-check txt-success"></i>
                                                                </span>
                                                                <span>Cholesterol</span>
                                                            </label>
                                                        </div>
                                                        <div class="checkbox-fade fade-in-success">
                                                            <label>
                                                                <input type="checkbox" value="1" name="hardDrink" id="hardDrink">
                                                                <span class="cr">
                                                                    <i class="cr-icon ik ik-check txt-success"></i>
                                                                </span>
                                                                <span>Hard Drink</span>
                                                            </label>
                                                        </div>
                                                    </div>          
                                         </div>

                                    </div>
                                   
                                 
                                    <h5>Appointment Details</h5>
                                
                                 
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="fvisitdate">First Visit Date</label>
                                                <input type="date" class="form-control" name="firstVisitDate" id="firstVisitDate">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="lvisitdate">Last Visit Date</label>
                                                <input type="date" placeholder="Pune" class="form-control" name="lastVisitDate" id="lastVisitDate">
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                        </div>                                                          

                                        <!-- <h5>Select Default Option</h5>
                                                    
                                        <div class="col-sm-12 col-xl-12 mb-30">
                                            <div class="checkbox-fade fade-in-success">
                                                <label>
                                                    <input type="checkbox" value="1" name="alcohol" id="alcohol">
                                                    <span class="cr">
                                                        <i class="cr-icon ik ik-check txt-success"></i>
                                                    </span>
                                                    <span>Alcohol</span>
                                                </label>
                                            </div>
                                            <div class="checkbox-fade fade-in-success">
                                                <label>
                                                    <input type="checkbox" value="1" name="tobacco" id="tobacco">
                                                    <span class="cr">
                                                        <i class="cr-icon ik ik-check txt-success"></i>
                                                    </span>
                                                    <span>Tobacco</span>
                                                </label>
                                            </div>
                                            <div class="checkbox-fade fade-in-success">
                                                <label>
                                                    <input type="checkbox" value="1" name="diabetes" id="diabetes">
                                                    <span class="cr">
                                                        <i class="cr-icon ik ik-check txt-success"></i>
                                                    </span>
                                                    <span>Diabetes</span>
                                                </label>
                                            </div>
                                            <div class="checkbox-fade fade-in-success">
                                                <label>
                                                    <input type="checkbox" value="1" name="smoking" id="smoking">
                                                    <span class="cr">
                                                        <i class="cr-icon ik ik-check txt-success"></i>
                                                    </span>
                                                    <span>Smoking</span>
                                                </label>
                                            </div>
                                            <div class="checkbox-fade fade-in-success">
                                                <label>
                                                    <input type="checkbox" value="1" name="HTN" id="HTN">
                                                    <span class="cr">
                                                        <i class="cr-icon ik ik-check txt-success"></i>
                                                    </span>
                                                    <span>HTN</span>
                                                </label>
                                            </div>
                                            <div class="checkbox-fade fade-in-success">
                                                <label>
                                                    <input type="checkbox" value="1" name="cholestrol" id="cholestrol">
                                                    <span class="cr">
                                                        <i class="cr-icon ik ik-check txt-success"></i>
                                                    </span>
                                                    <span>Cholesterol</span>
                                                </label>
                                            </div>
                                            <div class="checkbox-fade fade-in-success">
                                                <label>
                                                    <input type="checkbox" value="1" name="hardDrink" id="hardDrink">
                                                    <span class="cr">
                                                        <i class="cr-icon ik ik-check txt-success"></i>
                                                    </span>
                                                    <span>Hard Drink</span>
                                                </label>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="form-group">
                                        <label for="remarks">Remark</label>
                                        <textarea name="remarks" id="remarks" rows="1" class="form-control col-md-4"></textarea>
                                    </div>
                                    <button class="btn btn-success" type="submit">Update Profile</button>
                                </form>
                            </div>
                        </div>

                <div class="tab-pane fade" id="cervical" role="tabpanel" aria-labelledby="pills-profile-tab">
                                   <div class="container-fluid">
                                       <div class="card"> 
                                           <div class="card-body c">
                                           <div class="dt-responsive tbl">
                                               <table id="cApp" class="table">
                                                   <thead>
                                                       <tr>
                                                           <th>Appointment Date</th>
                                                           <th>Doctor Name</th>
                                                           <th>Scheduled By</th>
                                                           <th>Action</th>                        
                                                       </tr>
                                                   </thead>
                                                   <tbody id="cAppData">
                                                   </tbody>
                                               </table>
                                            </div>
                                       </div>
                                          
                                       </div>
                                   </div>
                               </div>


                     </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="jscode/cancel-appointment.js"></script>
<script src="jscode/patient_profile.js"></script>

<script src="jscode/getReffName.js"></script>
<script src="jscode/updatePatientsJs.js"></script>

<script src="jscode/getcscRefName.js"></script>
<script type="text/javascript" src="js/dropzone.js"></script>
<script type="text/javascript" src="jscode/dropzoneProduct.js"></script>
<script src="jscode/loadFile.js"></script>
<script src="jscode/uploadProfile.js"></script>
<?php include 'add_reffName.php';?>

