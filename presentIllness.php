<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Modals | ThemeKit - Admin Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/ionicons/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/icon-kit/dist/css/iconkit.min.css">
    <link rel="stylesheet" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="dist/css/theme.min.css">
    <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<style>
    .error{
        color:red;
    }
</style>
<body>
  
    <div class="wrapper">
    

        <div class="page-wrap">
          
            <div class="main-content">
                <div class="container-fluid">
                   
                 

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Modals</h3>
                                </div>
                                <div class="card-body template-demo">
                                
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#fullwindowModal">Full Window</button>
                                </div>
                            </div>
                         
                        </div>
                    </div>

                    

                    <div class="modal fade full-window-modal" id="fullwindowModal" tabindex="-1" role="dialog"
                        aria-labelledby="fullwindowModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: aliceblue;">
                                    <h5 class="modal-title" id="fullwindowModalLabel"><strong>Present illness</strong></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">

        <form id="presentillnessform" method="POST">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: aliceblue;" >
                                                        <h3><strong>Present illness</strong></h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                      
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label for="">Chief Complaint:</label>
                                                               </div>
                                                           </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <textarea placeholder="Cheif Complaint" class="form-control" id="cheifcomplaint" name="chiefcomplaints"></textarea>
                                                                    </div>

                                                                </div>
                                                        </div>

                                                        <div class="row">

                                                                 <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label for="">History:</label>
                                                               </div>
                                                           </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <textarea placeholder="History" class="form-control" id="history" name="history"></textarea>
                                                                    </div>

                                                                </div>

                                                        </div>

                                                <div class="row" style="margin-top: 86px">
                                                     <div class="col-md-12">
                                                <div class="card" >
                                                    <div class="card-header" style="background-color: aliceblue;" >
                                                        <h3><strong>Vitals</strong></h3>
                                                    </div>
                                                    <div class="card-body" style="background-color: aliceblue;">
                                                           <div class="col-md-12">
                                                                <div class="form-group">

                                                         <div class="form-group row">
                                                <label for="bp" class="col-sm-2 col-form-label">BP:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="bp" placeholder="BP" name="bp">
                                                </div>

                                                <label for="waist" class="col-sm-2 col-form-label">Waist:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="waist" placeholder="Waist" name="waist">
                                                </div>
                                            </div>

                                                  <div class="form-group row">
                                                <label for="Pulse" class="col-sm-2 col-form-label">Pulse:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="pules" placeholder="pulse" name="pulse">
                                                </div>


                                                <label for="hip" class="col-sm-2 col-form-label">Hip:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="hip" placeholder="Hip" name="hip">
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label for="spo2" class="col-sm-2 col-form-label">SPO2:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="spo2" placeholder="SPO2" name="spo2">
                                                </div>

                                                <label for="hb1c" class="col-sm-2 col-form-label">HB1C:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="hb1c" placeholder="HB1C" name="hb1c">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="temp" class="col-sm-2 col-form-label">Temp:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="temp" placeholder="temp" name="temp">
                                                </div>

                                                <label for="fbs" class="col-sm-2 col-form-label">FBS:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="fbs" placeholder="FBS" name="fbs">
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label for="weight" class="col-sm-2 col-form-label">Weight:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="weight" placeholder="weight" name="weight">
                                                </div>

                                                <label for="ppbs" class="col-sm-2 col-form-label">PPBS:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="ppbs" placeholder="PPBS" name="ppbs">
                                                </div>
                                            </div>


                                              <div class="form-group row">
                                                <label for="height" class="col-sm-2 col-form-label">Height:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="height" placeholder="Height" name="height">
                                                </div>

                                                <label for="gfr" class="col-sm-2 col-form-label">GFR:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="gfr" placeholder="GFR" name="gfr">
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label for="bmi" class="col-sm-2 col-form-label">BMI:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="bmi" placeholder="NAN">
                                                </div>

                                                <label for="goal wt" class="col-sm-2 col-form-label">Goal Wt:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="goalwt" placeholder="Goal wt" name="goalwt">
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label for="waist/hip" class="col-sm-2 col-form-label" id="waisthip"><b>Waist/Hip:</b></label>
                                                <div class="col-sm-4">
                                                    <label></label>
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



                                             <div class="col-md-6">
                                                <div class="card">
                                                    <!-- <div class="card-header">
                                                        <h3><strong>Present illness</strong></h3>
                                                    </div> -->
                                                    <div class="card-body">
                                          <div class="row">
                                        <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: aliceblue;"                               >
                                                        <h3><strong>RS</strong></h3>
                                                    </div>
                                                    <div class="card-body">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                               
                                               <div class="form-group row">
                                                <label for="chest" class="col-sm-5 col-form-label">Chest:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="chest" placeholder="10" name="chest">
                                                </div>
                                            </div>

                                                     
                                               <div class="form-group row">
                                                <label for="Added Sound" class="col-sm-5 col-form-label">Added Sound:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="addedSound" placeholder="10" name="addedSound">
                                                </div>
                                            </div>

                                                 <div class="form-group row">
                                                <label for="Wheeze Rhonchi" class="col-sm-5 col-form-label">Wheeze Rhonchi:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="wheezeRhonchi" placeholder="10" name="wheezeRhonchi">
                                                </div>
                                            </div>

                                                <div class="form-group row">
                                                <label for="Dyspnoea" class="col-sm-5 col-form-label">Dyspnoea:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="dyspnoea" placeholder="10" name="dyspoea">
                                                </div>
                                            </div>

                                                
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>


                                                <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: aliceblue;" >
                                                        <h3><strong>CNS</strong></h3>
                                                    </div>
                                                    <div class="card-body">
                                                           <div class="col-md-12">
                                                                <div class="form-group">

                                                         <div class="form-group row">
                                                <label for="conciousness" class="col-sm-5 col-form-label">Conciousness:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="conciousness" placeholder="10" name="conciousness">
                                                </div>
                                            </div>

                                                  <div class="form-group row">
                                                <label for="umnreflex" class="col-sm-5 col-form-label">U.M.N Reflex:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="umnreflex" placeholder="10" name="umnreflex">
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label for="lmnreflex" class="col-sm-5 col-form-label">L.M.N Reflex:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="lmnreflex" placeholder="10" name="lmnreflex">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="reflexes" class="col-sm-5 col-form-label">Reflexes:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="reflexes" placeholder="10" name="reflexes">
                                                </div>
                                            </div>
                                                                 
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>


                                        <div class="row">
                                            
                                              <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: aliceblue;" >
                                                        <h3><strong>CVS</strong></h3>
                                                    </div>
                                                    <div class="card-body">
                                                           <div class="col-md-12">
                                                                <div class="form-group">

                                            <div class="form-group row">
                                                <label for="s1s2heard" class="col-sm-5 col-form-label">s1,s2 heard:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="s1s2heard" placeholder="10" name="s1s2heard">
                                                </div>
                                            </div>


                                              <div class="form-group row">
                                                <label for="murmur" class="col-sm-5 col-form-label">Murmur:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="murmur" placeholder="10" name="murmur">
                                                </div>
                                            </div>
                                            <hr>
                                            <label><strong><h4>Other</h4>   </strong></label>
                                            <div class="form-group row">
                                                <label for="oralMucosa" class="col-sm-5 col-form-label">Oral Mucosa:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="oralMucosa" placeholder="10" name="oralMucosa">
                                                </div>
                                            </div>

                                              <div class="form-group row">
                                                <label for="scalp" class="col-sm-5 col-form-label">Scalp:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="scalp" placeholder="10" name="scalp">
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                                <label for="nodules" class="col-sm-5 col-form-label">Nodules:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="nodules" placeholder="10" name="nodules">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="eyes" class="col-sm-5 col-form-label">Eyes:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="eyes" placeholder="10" name="eyes">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="raynaud" class="col-sm-5 col-form-label">Raynaud's:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="raynaud" placeholder="10" name="raynaud">
                                                </div>
                                            </div>
                                                 
                                                  <div class="form-group row">
                                                <label for="telangiectasia" class="col-sm-5 col-form-label">Telangiectasia:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="telangiectasia" placeholder="10" name="telangiectasia">
                                                </div>
                                            </div>             
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                              
                                                <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header" style="background-color: aliceblue;" >
                                                        <h3><strong>Skin</strong></h3>
                                                    </div>
                                                    <div class="card-body">
                                                           <div class="col-md-12">
                                                                <div class="form-group">

                                            <div class="form-group row">
                                                <label for="photosensivity" class="col-sm-5 col-form-label">Photosensivity:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="photosensivity" placeholder="10" name="photosensivity">
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                                <label for="rash" class="col-sm-5 col-form-label">Rash:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="rash" placeholder="10" name="rash">
                                                </div>
                                            </div>

                                             

                                                <div class="form-group row">
                                                <label for="site" class="col-sm-5 col-form-label">Site:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="site" placeholder="10" name="site">
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                                <label for="type" class="col-sm-5 col-form-label">Type:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="type" placeholder="10" name="type">
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                                <label for="itching" class="col-sm-5 col-form-label">Itching:</label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" id="itching" placeholder="10" name="itching">
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
                                    </div>


                                     
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary"  id="b1">Save changes</button>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
              
            </div>
        </div>




        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="plugins/screenfull/dist/screenfull.js"></script>
        <script src="dist/js/theme.min.js"></script>

        <script src="js/jquery.validate.js"></script>
        <script src="jscode/presentillness_validation.js"></script>
        <script src="jscode/presentillness.js"></script>
                    <!-- <script src="jscode/addPatient.js"></script> -->
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!-- <script>
              $('#b1').on('click',function(e){
                //   console.log('in');
                var j = $('#presentillnessform').valid();
                if(j){
                    console.log('success');
                }else{
                    console.log('error');
                }
              });


            function preillness(){
                // var obj = {
                //     cheifcomplaint : document.getElementById('cheifcomplaint').value,
                //     history : document.getElementById('history').value,
                //     bp : document.getElementById('bp').value,
                //     waist : document.getElementById('waist').value,
                //     pules : document.getElementById('pules').value,
                //     hip : document.getElementById('hip').value,
                //     spo2 : document.getElementById('spo2').value,
                //     hb1c : document.getElementById('hb1c').value,
                //     temp : document.getElementById('temp').value,
                //     fbs : document.getElementById('fbs').value,
                //     weight : document.getElementById('weight').value,
                //     ppbs : document.getElementById('ppbs').value,

                //     height : document.getElementById('height').value,
                //     gfr : document.getElementById('gfr').value,
                //     bmi : document.getElementById('bmi').value,
                //     goalwt : document.getElementById('goalwt').value,
                //     waisthip : document.getElementById('waisthip').value,
                //     chest : document.getElementById('chest').value,
                //     addedSound : document.getElementById('addedSound').value,
                //     wheezeRhonchi : document.getElementById('wheezeRhonchi').value,
                //     dyspnoea : document.getElementById('dyspnoea').value,
                //     conciousness : document.getElementById('conciousness').value,

                //     umnreflex : document.getElementById('umnreflex').value,
                //     lmnreflex : document.getElementById('lmnreflex').value,
                //     reflexes : document.getElementById('reflexes').value,
                //     s1s2heard : document.getElementById('s1s2heard').value,
                //     murmur : document.getElementById('murmur').value,

                //     oralMucosa : document.getElementById('oralMucosa').value,
                //     scalp : document.getElementById('scalp').value,
                //     nodules : document.getElementById('nodules').value,
                //     eyes : document.getElementById('eyes').value,

                //     raynaud : document.getElementById('raynaud').value,
                //     telangiectasia : document.getElementById('telangiectasia').value,
                //     photosensivity : document.getElementById('photosensivity').value,
                //     rash : document.getElementById('rash').value,
                //     site : document.getElementById('site').value,
                //     type : document.getElementById('type').value,
                //     itching : document.getElementById('itching').value,

                // };
                console.log(obj);
                alert("File Added Successfully...!")
               $.ajax({
        // url: 'stud.php',
        type: 'POST',
        data:obj,
        beforeSend:function(){
        alert('ok');
        },
        success: function(response) {
            alert(response);
           var a =  JSON.parse(response);
           alert(a.code);
            $('#presentillnessform').trigger('reset');
        },
        complete:function(){
            alert('hello');
        }
    });
            }


             
        </script> -->
</body>

</html>