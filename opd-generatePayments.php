<div class="modal fade full-window-modal" id="opd-payment-generate" tabindex="-1" role="dialog" aria-labelledby="fullwindowModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fullwindowModalLabel"><strong>Generate OPD Invoices</strong></h5>
                <button type="button" class="close " data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form id="paymentForm">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6" style="margin-top: 10px;">
                                <div class="card">
                                    <div class="card-body" style="background: aliceblue;">
                                        <div class="dt-responsive">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="scr-vtr-dynamic" class="table table-striped table-bordered nowrap" id="tPayment">
                                                        <thead>
                                                            <tr>
                                                                <th>reciept Id</th>
                                                                <th>Doctor</th>
                                                                <th>Original Amount</th>
                                                                <th>Discount(%)</th>
                                                                <th>Total</th>
                                                                <th>Pending</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="tbPayment">

                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th>Total</th>
                                                                <th id="totalP"></th>
                                                                <th id="pendingTotal"></th>
                                                                <th></th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" style="margin-top: 10px;">
                                <div class="card">
                                    <div class="card-body" style="background: aliceblue;">
                                        <div class="dt-responsive">
                                            <div class="col-sm-12 col-md-6 col-xl-4 mb-30">
                                                <h4 class="sub-title">Make payment for</h4>
                                                <div class="form-radio">

                                                    <div class="radio radio-outline radio-inline">
                                                        <label>
                                                            <input type="radio" name="radio" checked="checked" value="1">
                                                            <i class="helper"></i>OPD Payment
                                                        </label>
                                                    </div>
                                                    <div class="radio radio-outline radio-inline">
                                                        <label>
                                                            <input type="radio" name="radio" value="0">
                                                            <i class="helper"></i>Package Payment
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">

                                                            <select class="form-control select2" id="paymentFor" name="paymentFor" style="width:100%;" onchange="getSelectedText()">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group package" style="display: none;">
                                                            <select class="form-control select2" id="packageIds" name="packageIds" style="width:100%;" onchange="payment(this.value);">
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <h6><strong>For:</strong></h6>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <h6><strong id="dName"></strong></h6>
                                                    </div>
                                                    <div class="col-sm-2"></div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                       <strong>Total :</strong><span id="total"></span>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <strong>Received :</strong><span id="received"></span>
                                                    </div>

                                                    <div class="col-sm-2"></div>
                                                </div>

                                                <div class="row opd">
                                                    <!-- <div class="col-sm-3"></div> -->
                                                    <div class="col-sm-11">
                                                        <div class="form-group" style="text-align: center;">
                                                            <select class="form-control select2" id="test" style="width:100%;">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div class="form-group" style="text-align: center;">
                                                            <button type="button" class="btn btn-icon btn-success" style="float: right;" onclick="addrow()"><i class="ik ik-plus"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-sm-12">
                                                        <table id="presTable" class="table table-bordered nowrap">
                                                            <thead>
                                                                <tr>
                                                                    <th>Fees Type</th>
                                                                    <th id="headTitle">Amount</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="presTableBody">
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th>Total</th>
                                                                    <th id="fTotal"></th>
                                                                    <th></th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="row mb-15">
                                                    <div class="col-sm-3">
                                                        <label for=""><strong>Discount Type(%)</strong></label>
                                                        <select name="discountType" id="discountType" style="width: 100%;" onchange="setDiscount(this.value)"></select>
                                                        <strong id="maxDiscount"></strong>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for=""><strong>Discount(%):</strong></label>
                                                        <input type="number"  class="form-control" name="dAmt" id="dAmt" oninput="calculateAmt(this.value)" min="0" max="99">
                                                    </div>

                                                    <div class="col-sm-3">
                                                        <label for="total"><strong>Discount amount:</strong></label>
                                                        <input type="text" class="form-control" id="pAmt" readonly>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="total"><strong>Total:</strong></label>
                                                        <input type="text" placeholder="" class="form-control" id="tAmt" readonly>
                                                    </div>

                                                </div>
                                                <div class="row">

                                                    <div class="col-sm-8 template-demo">
                                                        <button type="button" class="btn btn-primary " onclick="GeneratePayment()"><i class="fa fa-inr"></i>Generate Payment</button>
                                                        <button type="button" class="btn btn-primary" onclick="openScreen()"><i class="ik ik-pocket"></i>Accept Payment</button>
                                                    </div>
                                                    <div class="col-sm-4"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <script src="jscode/payment-validation.js"></script>