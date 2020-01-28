<style>
    .error {
        color: red;
    }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form class="forms-sample" id="refferedByForm" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="demoModalLabel">Add New Referring Doctor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Category / Group</label>
                                        <select class="form-control select2" id="gender1" name="gender1" placeholder="Gender">

                                            <option value="Item1">Item1</option>
                                            <option value="Item2">Item2</option>
                                            <option value="Item3">Item3</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input type="text" id="Name" name="Name" class="form-control" placeholder="Name" onkeypress='return event.charCode >= 65 && event.charCode <= 90 || event.charCode >= 97 && event.charCode <= 122 || event.charCode <= 32'>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="refemail" name="refemail" placeholder="Email">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Mobile No.</label>
                                        <input type="text" class="form-control" id="refmo" name="refmo" placeholder="Mobile No">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birthDate">Birth Date</label>
                                        <input id="dropper-max-year" class="form-control" type="date" name="birthDate" placeholder="Max Yr 2020" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" id="address" name="address" rows="1"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- <form id="uploadProfile" method="POST" enctype="multipart/form-data"> -->

                            <img src="" class="rounded-circle img-fluid mb-20" width="150" height="150" id="reffredJpg" style="padding-block-end: 10px;">

                            <div class="row text-center justify-content-md-center">
                                <div class="form-group">
                                    <input type="file" name="imgProfile" id="imgProfile" class="form-control" onchange="loadpic(event)">
                                </div>
                            </div>

                            <!-- <button class="btn btn-success" type="submit">Choose photo</button> -->

                            <!-- </form> -->

                        </div>

                    </div>

                </div>

                <div class="modal-footer">

                    <input type="submit" class="btn btn-primary mr-2" value="Submit">
                    <button class="btn btn-light" id="cButton" data-dismiss="modal">Cancel</button>
                </div>

            </div>
        </form>
    </div>
</div>

<script src="jscode/referringMaster.js"></script>