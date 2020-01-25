<style>
    .error {
        color: red;
    }
</style>
<div class="container-fluid">

    <button class="btn btn-primary" type="button" onclick="goback()" style="float: right;">Back</button>
    <div class="row">

        <div class="col-lg-12 col-md-7">
            <div class="card">
                <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-timeline-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true">Package Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Branches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-setting-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Update Package Details</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-timeline-tab">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-6"> <strong>Package Name</strong>
                                    <br>
                                    <p class="text-muted" id="pName">Johnathan Deo</p>
                                </div>
                                <div class="col-md-3 col-6"> <strong>Package Cost</strong>
                                    <br>
                                    <p class="text-muted" id="pCost">(123) 456 7890</p>
                                </div>
                                <div class="col-md-3 col-6"> <strong>Details</strong>
                                    <br>
                                    <p class="text-muted" id="pDetails">johnathan@admin.com</p>
                                </div>
                                <div class="col-md-3 col-6"> <strong>Active/Inactive</strong>
                                    <br>
                                    <p class="text-muted" id="pActive">London</p>
                                </div>
                            </div>
                            <hr>
                            <div class="dt-responsive tbl">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Package</th>
                                            <th>Cost</th>
                                            <th>Package Details</th>
                                            <th>Status</th>
                                            <th class="nosort"> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-6"> <strong>Select Branch</strong>
                                    <br>
                                 <select name="branchId" id="branchId" class="form-control"></select>
                                </div>
                                <div class="col-md-3 col-6"> <strong>Package Discount</strong>
                                    <br>
                                  <input type="text" class="form-control" id="packageDiscount" name="packageDiscount">
                                </div>
                                <div class="col-md-3 col-6"> <strong>Details</strong>
                                    <br>
                                   <button class="btn btn-success" type="button">Add Branch</button>
                                </div>
                                
                            </div>
                            <hr>
                            <div class="dt-responsive tbl">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Package</th>
                                            <th>Cost</th>
                                            <th>Package Details</th>
                                            <th>Status</th>
                                            <th class="nosort"> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-setting-tab">
                        <div class="card-body">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="example-name">Package Title</label>
                                    <input type="text" placeholder="Johnathan Doe" class="form-control" name="packageName" id="packageName">
                                </div>
                                <div class="form-group">
                                    <label for="example-email">Package Cost</label>
                                    <input type="text" placeholder="12.00" class="form-control" name="packageCost" id="packageCost">
                                </div>

                                <div class="form-group">
                                    <label for="example-password">Package Details</label>
                                    <textarea name="packageDetails" id="packageDetails" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="row">

                                    <div class="form-group">
                                        <label for="example-password">Package Status</label>
                                        <div class="checkbox-fade fade-in-success check">
                                            <label>
                                                <input type="radio" value="1" name="isActive">
                                                <span class="cr">
                                                                                <i class="cr-icon ik ik-check txt-success"></i>
                                                                            </span>
                                                <span>Active</span>
                                            </label>
                                            <label>
                                                <input type="radio" value="0" name="isActive">
                                                <span class="cr">
                                                                                <i class="cr-icon ik ik-check txt-success"></i>
                                                                            </span>
                                                <span>In active</span>
                                            </label>

                                        </div>
                                    </div>
                                </div>
                        </div>
                        <button class="btn btn-success" type="submit">Update Package Details</button>
                        <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="jscode/load-package-details.js"></script>