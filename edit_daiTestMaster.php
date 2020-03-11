<style>
    .error{
        color:red;
    }
       
  .required:after {
    content:" *";
    color: red;
  }
</style>

<link rel="stylesheet" href="dist/css/dropzone.css">
<link rel="stylesheet" href="dist/css/style.css">
<div class="main-content">
    <div class="container-fluid">
   
        <div class="col-lg-6 col-md-7">
            <div class="card">
                <ul class="nav nav-pills custom-pills t1" id="pills-tab" role="tablist">
                    <!-- <li class="nav-item">
                        <a class="nav-link " id="pills-timeline-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-timeline" aria-selected="true"></a>
                    </li>    -->
                   
                </ul>
                <div class="tab-content" id="pills-tabContent">
               
                 
                    <div class="tab-pane fade show active" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                        <div class="card-body">
                        <form class="forms-sample" id="testMasterForm" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="testName" class="required">Test Name</label>
                                <input type="text" id="testName" name="testName" class="form-control" placeholder="Test Name">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="testDetails">Test Details</label>
                                <textarea id="testDetails" name="testDetails" class="form-control" placeholder="Details"></textarea>
                            </div>
                        </div>
                       
                    </div>
                    <div class="row">

                    <div class="col-md-4">
                            <div class="form-group">
                                <label for="fees" class="required">Fees </label>
                                <input type="text" id="fees" name="fees" class="form-control" placeholder="Fee" >

                            </div>
                        </div>
                        <div class="col-md-4">
                            <!-- <div class="form-group">
                            
                                <label for="type">Category</label>
                                <select  class="form-control " id="type" name="type" placeholder="type">
                                  <option value="Lab">Lab</option>
                                 <option value="Package">Package</option>
                                 <option value="Other">Other</option>
                             </select>
                            </div> -->
                        </div>
                  
                    </div>
                    
                    
                    <button class="btn btn-success" type="submit">Update Test</button>
                    <button class="btn btn-success" type="button" onClick="gobackTest()">Cancel</button>
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
<script src="jscode/edit_daiTestMaster.js"></script>
<script src="jscode/update_Test_Master.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="jscode/testMaster_validation.js"></script>

