<div class="payment">
    <div class="col-md-10 offset-md-1 mt-5 rounded" id="mode-payment" style="background-color: white;">
        <div class="row" >
            <div class="col">
                <h5 id="e-walletbtn" style="float:right;">ELECTRONIC WALLET</h5>
            </div>
            <div class="col">
                <h5 id="o-bankingbtn">ONLINE BANKING</h5>
            </div>
        <div>
<!-- ELECTRONIC WALLET -->
        <div class="row mt-5" id="e-walletrow">
            <div class="col-md-4 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ URL('storage/gcash.jpg') }}" alt="gcash logo" width="150px">
                    </div>
                    <div class="card-footer">
                        Proceed
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-2">
                <div class="card">
                    <div class="card-body">      
                        <img src="{{ URL('storage/paypal.jpg') }}" alt="paypal logo" width="150px">
                    </div>
                    <div class="card-footer">
                        Proceed
                    </div>
                </div>
            </div>
        </div>
<!-- ONLINE BANKING-->
        <div class="row mt-5" id="o-bankingrow" style="display:none;">
            <div class="col-md-4 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ URL('storage/SecurityBank.png') }}" alt="SecurityBank logo" width="300px">
                    </div>
                    <div class="card-footer">
                        Proceed
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-2">
                <div class="card">
                    <div class="card-body">      
                        <img src="{{ URL('storage/Landbank.png') }}" alt="Landbank logo" width="300px">
                    </div>
                    <div class="card-footer">
                        Proceed
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-1 mt-4">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ URL('storage/UCPB.png') }}" alt="UCPB logo" width="300px">
                    </div>
                    <div class="card-footer">
                        Proceed
                    </div>
                </div>
            </div>
            <div class="col-md-4 offset-md-2 mt-4">
                <div class="card">
                    <div class="card-body">      
                        <img src="{{ URL('storage/RCBC.png') }}" alt="RCBC logo" width="300px">
                    </div>
                    <div class="card-footer">
                        Proceed
                    </div>
                </div>
            </div>
        </div>
        <br>
            <button class="btn-success" id="btn-paymentcancel">Back</button>
    </div>
</div>