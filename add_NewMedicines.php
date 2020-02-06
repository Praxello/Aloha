<style>
    .error{
        color:red;
    }
</style>

<div class="modal fade" id="medicinesModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel">Medicines Details:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" id="medicineMasterForm" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="type">Type</label>
                               
                            <select  class="form-control" id="medicineTypeId" name="type"  placeholder="Type" style="width:100%;">

                         </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="genName">Generic Name</label>
                                <input type="text" id="genName" name="genName" class="form-control" placeholder="Generic Name">
                            </div>
                        </div>    
                    </div>                                          
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="dosage">Dosage</label>
                                <input type="text" id="dosage" name="dosage" class="form-control" placeholder="Dosage">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="instruction">Instruction</label>
                                       
                            <select  class="form-control" id="instructionId" name="instruction"  placeholder="Instruction" style="width:100%;">
                             
                         </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="days">Days </label>
                                <input type="text" id="days" name="days" class="form-control" placeholder="Days">
                            </div>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="isImportant">Important</label>
                                <input type="text" id="isImportant" name="isImportant" class="form-control" placeholder="Important">
                            </div>
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

<script src="jscode/insert_Medicines_master.js"></script>
<!-- <script src="jscode/get_Instruction.js"></script> -->
<script src="js/jquery.validate.js"></script>
<script src="jscode/medicines_validation.js"></script>