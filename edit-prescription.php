<div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                    <!-- <img src="upload/patients/12.jpg" class="avatar" alt="Upload"> -->
                                        <i class="ik ik-file-text bg-blue"></i>
                                        <div class="d-inline">
                            <h5>Prescription</h5>
                            <span id="patientName"></span>
                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <button type="button" class="btn btn-primary" onclick="goback();">Back</button>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            
                            <div class="col-lg-12 col-md-7">
                                <div class="card">
                                    <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Prescription</a>
                                        </li>
                                      
                       
                                        <li class="nav-item">
                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#cervical" role="tab" aria-controls="pills-setting" aria-selected="false">Cervical Spine Assessment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#neck" role="tab" aria-controls="pills-setting" aria-selected="false">Neck Disability</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#fullwindowModal1" role="tab" aria-controls="pills-setting" aria-selected="false">Lumbar Spine Assessment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#ques" role="tab" aria-controls="pills-setting" aria-selected="false">Back Pain Questions</a>
                        </li>
                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Present Illness</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Letters</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                                        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label for="input">BP</label>
                                    <input type="text" id="bp" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label for="input">Pulse</label>
                                    <input type="text" id="pulse" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label for="input">Height</label>
                                    <input type="text" id="height" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label for="input">Weight</label>
                                    <input type="text" id="weight" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label for="input">West</label>
                                    <input type="text" id="west" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label for="input">Hip</label>
                                    <input type="text" id="hip" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label for="input">Temprature</label>
                                    <input type="text" id="temp" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <label for="input">SPO2</label>
                                    <input type="text" id="spo2" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-sm-4">

                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="input">Complaints</label>
                                    <input type="text" id="complaintsId" class="form-control" placeholder="Add complaints">
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="input">Diagnosis</label>
                                    <input type="text" id="diagnosis" class="form-control" placeholder="Diagnosis">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-icon btn-success" style="float: right;" onclick="addrow()"><i class="ik ik-plus"></i></button>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive">
                            <table id="prescriptionTbl" class="table table-striped table-bordered nowrap" style="overflow-y: scroll; max-height: 350px; display:block;">
                                <thead>
                                    <tr>
                                        <th style="width: 10%;">Type</th>
                                        <th style="width: 30%;">Medicine</th>
                                        <th style="width: 10%;">Morning</th>
                                        <th style="width: 10%;">Evening</th>
                                        <th style="width: 10%;">Night</th>
                                        <th style="width: 10%;">Duration</th>
                                        <th style="width: 15%;">Notes/Inst</th>
                                        <th style="width: 5%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="prescData">

                                </tbody>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3>Remarks</h3>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-md-4">

                        <div class="form-group">
                        <label for="input">Remarks</label>
                            <textarea name="remark" id="remark" cols="3" rows="3" class="form-control"></textarea>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label for="input">Enter Days</label>
                            <input type="text" id="vdate" class="form-control" oninput="setDate(this.value);">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                        <label for="input">Next Visit Date</label>
                            <input type="date" id="nextVisitDate" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 26px;">
                    
                        <button type="button" class="btn  btn-success" onclick="savePrescription()">Save</button>
                        <button type="button" class="btn  btn-default" onclick="goback()">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
<hr>
<h5>Previous Prescriptions</h5>
<div id="prevData"></div>
                                        </div>
                                        <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3 col-6"> <strong>Full Name</strong>
                                                        <br>
                                                        <p class="text-muted">Johnathan Deo</p>
                                                    </div>
                                                    <div class="col-md-3 col-6"> <strong>Mobile</strong>
                                                        <br>
                                                        <p class="text-muted">(123) 456 7890</p>
                                                    </div>
                                                    <div class="col-md-3 col-6"> <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted">johnathan@admin.com</p>
                                                    </div>
                                                    <div class="col-md-3 col-6"> <strong>Location</strong>
                                                        <br>
                                                        <p class="text-muted">London</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p class="mt-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus.
                                                    Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                                    scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                <h4 class="mt-30">Skill Set</h4>
                                                <hr>
                                                <h6 class="mt-30">Wordpress <span class="pull-right">80%</span></h6>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">50% Complete</span> </div>
                                                </div>
                                                <h6 class="mt-30">HTML 5 <span class="pull-right">90%</span></h6>
                                                <div class="progress  progress-sm">
                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">50% Complete</span> </div>
                                                </div>
                                                <h6 class="mt-30">jQuery <span class="pull-right">50%</span></h6>
                                                <div class="progress  progress-sm">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span> </div>
                                                </div>
                                                <h6 class="mt-30">Photoshop <span class="pull-right">70%</span></h6>
                                                <div class="progress  progress-sm">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">50% Complete</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                                            <div class="card-body">
                                                <form class="form-horizontal">
                                                    <div class="form-group">
                                                        <label for="example-name">Full Name</label>
                                                        <input type="text" placeholder="Johnathan Doe" class="form-control" name="example-name" id="example-name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-email">Email</label>
                                                        <input type="email" placeholder="johnathan@admin.com" class="form-control" name="example-email" id="example-email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-password">Password</label>
                                                        <input type="password" value="password" class="form-control" name="example-password" id="example-password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-phone">Phone No</label>
                                                        <input type="text" placeholder="123 456 7890" id="example-phone" name="example-phone" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-message">Message</label>
                                                        <textarea name="example-message" name="example-message" rows="5" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-country">Select Country</label>
                                                        <select name="example-message" id="example-message" class="form-control">
                                                            <option>London</option>
                                                            <option>India</option>
                                                            <option>Usa</option>
                                                            <option>Canada</option>
                                                            <option>Thailand</option>
                                                        </select>
                                                    </div>
                                                    <button class="btn btn-success" type="submit">Update Profile</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="fullwindowModal1" role="tabpanel" aria-labelledby="pills-profile-tab">
                               
                <button class="btn btn-success" type="button" style="float: right;margin-top: 10px;margin-right: 22px;" data-toggle="modal" data-target="#fullwindowModal2">Add Lumbar Spine Assessment</button>
                    <div class="container-fluid">
                   
                        <div class="card"> 
                        
                         
                            <div class="card-body">
                            <!-- <div style="overflow-x:auto;"> -->
                            <div class="dt-responsive tbl" >
                                <table id="sTable" class="table">
                                    <thead>
                                         <tr>
                                           
                                           
                                            <th>Visit Date</th>
                                            <th>Action</th>                        
                                        </tr>
                                    </thead>
                                    <tbody id="spineData">
                                       
                                        
                                        
                                    </tbody>
                                </table>
                             </div>
                        </div>
                            <!-- <div> -->
                        </div>
                    </div>
                </div>
                                        <div class="tab-pane fade" id="cervical" role="tabpanel" aria-labelledby="pills-profile-tab">
                               
                               <button class="btn btn-success" type="button" style="float: right;margin-top: 10px;margin-right: 22px;" data-toggle="modal" data-target="#cervicalSpine">Add Cervical Spine Assessment</button>
                                   <div class="container-fluid">
                                  
                                       <div class="card"> 
                                       
                                    
                                           <div class="card-body c">
                                           <!-- <div style="overflow-x:auto;"> -->
                                           <div class="dt-responsive tbl" >
                                               <table id="cTable" class="table">
                                                   <thead>
                                                    
                                                       <tr>
                                                          
                                                           <th>Visit Date</th>
                                                           
                                                         
                                                          
                                                           <th>Action</th>                        
                                                       </tr>
                                                   </thead>
                                                   <tbody id="carvicalData">
                                                      
                                                       
                                                       
                                                   </tbody>
                                               </table>
                                            </div>
                                       </div>
                                          
                                       </div>
                                   </div>
                               </div>
                               <div class="tab-pane fade" id="neck" role="tabpanel" aria-labelledby="pills-profile-tab">
                               
                               <button class="btn btn-success" type="button" style="float: right;margin-top: 10px;margin-right: 22px;" data-toggle="modal" data-target="#neckDis"> Add Neck Disability Index</button>
                                   <div class="container-fluid">
                                  
                                       <div class="card"> 
                                       
                                          
                                           <div class="card-body c">
                                           <!-- <div style="overflow-x:auto;"> -->
                                           <div class="dt-responsive tbl" >
                                               <table id="nTable" class="table">
                                                   <thead>
                                                    
                                                       <tr>
                                                          
                                                           <th>Visit Date</th>
                                                           <th>Action</th>                        
                                                       </tr>
                                                   </thead>
                                                   <tbody id="neckData">
                                                      
                                                       
                                                   </tbody>
                                               </table>
                                            </div>
                                       </div>
                                           <!-- <div> -->
                                       </div>
                                   </div>
                               </div>
               
                                  <div class="tab-pane fade" id="ques" role="tabpanel" aria-labelledby="pills-profile-tab">
                                              
                               <button class="btn btn-success" type="button" style="float: right;margin-top: 10px;margin-right: 22px;" data-toggle="modal" data-target="#backPain"> Add Back Pain Question</button>
                                   <div class="container-fluid">
                                  
                                       <div class="card"> 
                                       
                                          
                                           <div class="card-body c">
                                           <!-- <div style="overflow-x:auto;"> -->
                                           <div class="dt-responsive tbl" >
                                               <table id="bTable" class="table">
                                                   <thead>
                                                    
                                                       <tr>
                                                          
                                                           <th>Visit Date</th>
                                                           
                                                         
                                                          
                                                           <th>Action</th>                        
                                                       </tr>
                                                   </thead>
                                                   <tbody id="backData">
                                                      
                                                       
                                                       
                                                   </tbody>
                                               </table>
                                            </div>
                                       </div>
                                           <!-- <div> -->
                                       </div>
                                   </div>
                               </div>
               
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
    $('#diagnosis').tagsinput({
        'autocomplete': {
            source: diagnosis
        }
    });
    $('#complaintsId').tagsinput({
        'autocomplete': {
            source: complaints
        }
    });
//for come to main page appointments
    function goback() {
        $('#editProfile').empty();
        $('#tData').show();
    }
    //set date in datepicker
    function setDate(param){
        param= parseInt(param);
        var date = moment().add(param,'d').toDate();
        var birthDate = moment(date).format('YYYY-MM-DD');
        $('#nextVisitDate').val(birthDate);
    }
</script>
 <script src="js/jquery.validate.js"></script>
<script src="jscode/getLumbarSpine.js"></script>
<script src="jscode/getneckDisblity.js"></script>
<script src="jscode/getBackPain.js"></script>
<script src="jscode/getCervicalSpine.js"></script>

<script src="jscode/getAllPrescriptiondata.js"></script>
<script src="jscode/prescription-table.js"></script>
<script src="jscode/check-prescription.js"></script>
<script src="jscode/addPrescription.js"></script>
<script>
getLumbarSpine(u_patientId);
getNeckDisblity(u_patientId);
getLowBackPain(u_patientId);
getCervicalSpine(u_patientId);
</script>
<?php include 'lumbar-spin-assesment.php';?>
<?php include 'neck-disability.php';?>
<?php include 'low-backPainQues.php';?>
<?php include 'carvical-spineAssessment.php';?>