<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-icon btn-success" style="float: right;" onclick="addrow()" title="Add Exercise"><i class="ik ik-plus"></i></button>
            </div>
            <div class="card-body">
                <div class="dt-responsive">
                    <table id="exerciseTable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Exercise</th>
                                <th>#</th>
                                <th>Details</th>
                                <th>Steps</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="exerciseData">
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">

            <div class="col-md-2">
                <div class="form-group">
                    <label style="margin-top: 10px;">Enter Days</label>
                    <input type="number" class="form-control">
                </div>

            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label style="margin-top: 10px;">Next Visit Date</label>
                    <input type="date" class="form-control">
                </div>
            </div>

            <div class="col-md-5" style="margin-top: 38px;">
                <button type="button" class="btn  btn-success">Save</button>
                <button type="button" class="btn  btn-default">Cancel</button>
            </div>
        </div>
    </div>
</div>
<hr>
<h5>Previous Exercise</h5>
<div id="prevExercise"></div>