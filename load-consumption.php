
    <div class="row">
        <div class="col-md-3 col-6"> <strong>Package Name</strong>
            <br>
            <p class="text-muted" id="pNamee">Johnathan Deo</p>
        </div>
        <div class="col-md-3 col-6"> <strong>Package Cost</strong>
            <br>
            <p class="text-muted" id="pCoste">(123) 456 7890</p>
        </div>
        <div class="col-md-3 col-6"> <strong>Purchase date</strong>
            <br>
            <p class="text-muted" id="purchaseDatee">johnathan@admin.com</p>
        </div>
        <div class="col-md-3 col-6"> <strong>Active/Inactive</strong>
            <br>
           <button class="btn btn-warning" type="button" onclick="fromBack()">Back</button>
        </div>
    </div>
    <hr>
    <div class="dt-responsive tbl">
        <table class="table table-bordered" id="packageTest">
            <thead>
                <tr>
                    <th>Test Name</th>
                    <th>Frequency</th>
                    <th>Remaining</th>
                    <th>Consumed</th>
                    <th>Last used</th>
                    <th class="nosort">Action</th>
                </tr>
            </thead>
            <tbody id="packageTestData">

            </tbody>
        </table>
    </div>
    <hr>
    <center><strong><h3>Transactions</h3></strong></center>
    <div class="dt-responsive tbl">
        <table class="table table-bordered" id="exchangeT">
            <thead>
                <tr>
                    <th>Transaction Type</th>
                    <th>Created by</th>
                    <th>Transaction Date</th>
                </tr>
            </thead>
            <tbody id="exchangeData">

            </tbody>
        </table>
    </div>
    <script src="jscode/consumption.js"></script>