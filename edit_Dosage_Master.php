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
                        <form class="forms-sample" id="dosageMasterForm" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="dosage"  class="required">Dosage</label>
                                <input type="text" id="dosage" name="dosage" class="form-control" placeholder="Enter New Dosage">
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                       
                    </div>
                    
                    <button class="btn btn-success" type="submit">Update Dosage</button>
                    <button class="btn btn-success" type="button" onClick="gobackDosage()">Cancel</button>
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
<script src="jscode/edit_dosageNew.js"></script>
<script src="jscode/update_Dosage.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="jscode/dosage_validation.js"></script>


