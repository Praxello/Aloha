<style>
.error{
    color: red;
}

   
@media only screen and (max-width: 600px) {
  .tbl {
    overflow-x:auto;
  }
}
</Style>

  <div class="modal fade full-window-modal"  id="spineModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: aliceblue;">
                                        <h5 class="modal-title" id="demoModalLabel">details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">                                       
                                    <div class="dt-responsive tbl" >
                                <table id="pTable" class="table">
                                    <thead>
                                        <tr>
                                           
                                            <th class="nosort">Functional Disability Score</th>
                                            <th>Name</th>
                                            <th>VAS Score</th>
                                            <th>Present Symptoms</th>
                                            <th>Present since</th>
                                            <th>Symptoms at onset</th>
                                            <th>Aggravating Factor</th>
                                            <th>RelivingFactor</th>
                                            <th>medications</th>
                                            <th>GeneralHealth</th>
                                            <th>Recent surgery</th>
                                            <th>MOVEMENT LOSS</th>
                                            <th>TEST MOVEMENT</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="patientData">
                                       
                                        
                                        
                                    </tbody>
                                </table>
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