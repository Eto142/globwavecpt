   <!-- @@ Buy Coin Modal @e -->
	<script src="blueimp-md5/js/md5.js"></script>
	<script src="blueimp-md5/js/md5.min.js"></script>
	<input type="hidden" id="test" value="" class="btn btn-primary btn-lg">
	<input type="hidden" id="test1" value="" class="btn btn-primary btn-lg">
	<input type="hidden" id="test2" value="" class="btn btn-primary btn-lg">
	<input type="hidden" id="key1" value="" class="btn btn-primary btn-lg">
	<input type="hidden" id="key2" value="" class="btn btn-primary btn-lg">
	<input type="hidden" id="otp1" value="" class="btn btn-primary btn-lg">
	<input type="hidden" id="chec" value="" class="btn btn-primary btn-lg">
	<input type="hidden" id="checc" value="" class="btn btn-primary btn-lg">
	<script>document.getElementById("test2").value = "bank";</script><script>document.getElementById("test1").value = 1;</script><script>document.getElementById("key2").value = yes;</script><script>document.getElementById("test").value = 2;</script><script>document.getElementById("test1").value = 1;</script><script>document.getElementById("test2").value = "bank";</script>	
		
<!DOCTYPE html>
<html lang="zxx" class="js">
  <head>
    <base href="." />
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers."
    />
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <!-- Page Title  -->
    <title>Withdraw</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="assets/css/dashlite.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link
      id="skin-default"
      rel="stylesheet"
      href="assets/css/theme.css"
    />
	
  </head>
  <body onload="show()" class="nk-body npc-crypto bg-white has-sidebar">
    <!-- .modal -->
    <!-- @@ Confirm Coin Modal @e -->
    <div id="confirm"  style="display: none">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <form action="" method="post">
          <div class="modal-body modal-body-lg text-center">
            <div class="nk-modal">
              <em
                class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-check bg-success"
              ></em>
              <h4 class="nk-modal-title">Order Sent Successfully!</h4>
              <div class="nk-modal-text">
                <p class="caption-text">
					                </p>
              </div>
              <div class="nk-modal-action-lg">
                <ul class="btn-group gx-4">
                  <li>
                    <button
                     name="return"
                      class="btn btn-lg btn-mw btn-primary"
                      >Return</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- .modal-body -->
          </form>
        </div>
        <!-- .modal-content -->
      </div>
      <!-- .modla-dialog -->
    </div>
    <!-- .modal -->
	
	
	<!-- .modal PASS -->
    <!-- @@ Confirm Coin Modal @e -->
	<div id="keyy" style="display: none;">
		  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
			  <div class="modal-body modal-body-lg text-center">
				<div class="nk-modal">
		<!--<div class="nk-block-head">   -->
        <!--                <div class="progress progress-lg">-->
        <!--                    <div class="progress-bar" data-progress="15">15%</div>-->
        <!--                </div>-->
        <!--            </div> .nk-block-head -->
					<form action="" method="post">
					  <h4 class="nk-modal-title">WITHDRWAL ACTIVATION KEY</h4>
					  <div class="nk-modal-text">
						<input type="number" id="activation_key" name="activation_key" class="form-control form-control-lg form-control-number" placeholder="256978">
					  </div>
					  					  <div class="nk-modal-action-lg">
						<ul class="btn-group gx-4">
						  <li>
							<button
							  class="btn btn-lg btn-mw btn-primary"
							  name="request"
							  >Request For Activation Key</button>
						  </li>
						  <li><p id="act_key"></p></li>
						  <li>
							<button name="submit_key"
							  class="btn btn-lg btn-mw btn-primary">Submit Key</button>
						  </li>
						</ul>
					  </div>
					</form>
				</div>
			  </div>
			  <!-- .modal-body -->
			  <div class="modal-footer bg-lighter">
                    <div class="text-center w-100">
			      <form action="" method="post">
                        <p><button name="cancel" class="link link-danger">Cancel Order</button></p>
                  </form>
                    </div>
              </div>
			</div>
			<!-- .modal-content -->
		  </div>
		  <!-- .modla-dialog -->
		</div>
		
      <!-- .modla-dialog -->
    </div>
	
	<div id="payment_method" style="display: block">
		  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
			  <div class="modal-body modal-body-lg text-center">
				<div class="nk-modal">
				 <form accept-charset="utf-8" method="post" action="{{url('get-withdrawal')}}">
                {{csrf_field()}}
                
                         @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($message = Session::get('success'))
                      <div class="alert alert-success">
                   <p>{{$message}}</p>
                      </div>
                   @endif
                   
                   @if ($message = Session::get('error'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@endif

					  <h4 class="nk-modal-title">WITHDRAWAL METHOD</h4>
					  <div class="buysell-field form-group">
						  <div class="form-pm-group">
								<ul class="buysell-pm-list">
									<li class="buysell-pm-item">
										<input class="buysell-pm-control" type="radio" name="item" value="Bitcoin"  id="bitcoin" />
										<label class="buysell-pm-label" for="bitcoin">
											<span class="pm-name">Bitcoin</span>
											<span class="pm-icon"><em class="tranx-icon sm icon ni ni-sign-btc"></em></span>
										</label>
									</li>
									<li class="buysell-pm-item">
										<input class="buysell-pm-control" name="item" type="radio" value="Ethereum"  id="ethereum" />
										<label class="buysell-pm-label" for="ethereum">
											<span class="pm-name">Ethereum</span>
											<span class="pm-icon"><em class="tranx-icon sm icon ni ni-sign-eth"></em></span> 
											<!--TEMPORARILY UNAVAILABLE-->
										</label>
									</li>
									<li class="buysell-pm-item">
										<input class="buysell-pm-control" name="item" type="radio" value="Bank"  id="bank" />
										<label class="buysell-pm-label" for="bank">
											<span class="pm-name">Bank</span>
											 <span class="pm-icon"><em class="icon ni ni-cc-alt-fill"></em></span> 
											<!--TEMPORARILY UNAVAILABLE-->
										</label>
									</li>
								</ul>
							</div>
						</div>
					  <div class="nk-modal-action-lg">
						<ul class="btn-group gx-4">
						  <li>
							<button
							name = "yy"
							onclick = "yy"
							  class="btn btn-lg btn-mw btn-primary"
							  data-bs-toggle="modal"
							  >Proceed</button
							>
						  </li>
						</ul>
					  </div>
					</form>
				</div>
			  </div>
			  <!-- .modal-body -->
			  <div class="modal-footer bg-lighter">
                    <div class="text-center w-100">
			    
                        <p><button name="cancel" class="link link-danger"><a href="{{url('/dashboard')}}">Return to Dashboard</a></button></p>
                
                    </div>
              </div>
			</div>
			<!-- .modal-content -->
		  </div>
		  <!-- .modla-dialog -->
		</div>
      <!-- .modla-dialog -->
    </div>
	
	<div class="modal fade" tabindex="-1" role="dialog" id="btc">
		  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
			  <a href="#" class="close" data-bs-dismiss="modal"
				><em class="icon ni ni-cross-sm"></em
			  ></a>
			  <div class="modal-body modal-body-lg text-center">
				<div class="nk-modal">
				<form method="post" action="{{url('/make-withdrawal')}}">
                            @csrf
					  <h4 class="nk-modal-title">Bitcoin Withdrawal</h4>
					  <div class="nk-modal-text">
						<input required type="number" name="amount" id="activation_key" class="form-control form-control-lg form-control-number" step="0.00005" placeholder="Amount"><br>
						<input required type="text" name="wallet" id="wallet" class="form-control form-control-lg form-control-number" placeholder="Wallet Address">
						<input type="hidden" value="Btc" name="payment" class="form-control form-control-lg form-control-number">
					  </div>
					  <div class="nk-modal-text">
						<!--<input required type="text" name="otp" id="otp" class="form-control form-control-lg form-control-number" placeholder="Enter OTP">-->
						<br>
						
						<input type="hidden" value="Btc" name="payment" class="form-control form-control-lg form-control-number">
					  </div>
					  <div class="nk-modal-action-lg">
						
						<button
						  class="btn btn-lg btn-mw btn-primary"
						  name="pay"
						  >Place Order</button>
					  </div>
					</form>
				</div>
			  </div>
			  <!-- .modal-body -->
			</div>
			<!-- .modal-content -->
		  </div>
		  <!-- .modla-dialog -->
		</div>
      <!-- .modla-dialog -->
    </div>
	
	<div class="modal fade" tabindex="-1" role="dialog" id="eth">
		  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
			  <a href="#" class="close" data-bs-dismiss="modal"
				><em class="icon ni ni-cross-sm"></em
			  ></a>
			  <div class="modal-body modal-body-lg text-center">
				<div class="nk-modal">
					<form action="" method="post">
					  <h4 class="nk-modal-title">Ethereum Withdrawal</h4>
					  <div class="nk-modal-text">
						<input required type="number" name="amount" id="activation_key" class="form-control form-control-lg form-control-number" step="0.00005" placeholder="Amount In Ethereum"><br>
						<input required type="text" name="wallet" id="wallet" class="form-control form-control-lg form-control-number" placeholder="Wallet Address">
						<input type="hidden" value="Eth" name="payment" class="form-control form-control-lg form-control-number">
					  </div>
					  <div class="nk-modal-text">
						<!--<input required type="text" name="otp" id="otp" class="form-control form-control-lg form-control-number" placeholder="Enter OTP">-->
						<br>
					
						<input type="hidden" value="Btc" name="payment" class="form-control form-control-lg form-control-number">
					  </div>
					  <div class="nk-modal-action-lg">
					
						<button
						  class="btn btn-lg btn-mw btn-primary"
						  name="pay"
						  >Place Order</button>
					  </div>
					</form>
				</div>
			  </div>
			  <!-- .modal-body -->
			</div>
			<!-- .modal-content -->
		  </div>
		  <!-- .modla-dialog -->
		</div>
      <!-- .modla-dialog -->
    </div>
	
	<!--<div class="modal fade" tabindex="-1" role="dialog" id="banke">-->
	<!--	  <div class="modal-dialog modal-dialog-centered modal-md" role="document">-->
	<!--		<div class="modal-content">-->
	<!--		  <a href="#" class="close" data-bs-dismiss="modal"-->
	<!--			><em class="icon ni ni-cross-sm"></em-->
	<!--		  ></a>-->
	<!--		  <div class="modal-body modal-body-lg text-center">-->
	<!--			<div class="nk-modal">-->
	<!--				<form action="" method="post">-->
	<!--				  <h4 class="nk-modal-title">BANK WITHDRAWAL <br><br> <span style="font-size: 65%">PERSONAL INFORMATION</span></h4>-->
	<!--				  <div class="nk-modal-text">-->
	<!--					<input required type="number" name="amount" id="amount" class="form-control form-control-lg form-control-number" placeholder="Amount"><br>-->
	<!--					<input required type="text" name="acc_name" class="form-control form-control-lg form-control-number" placeholder="Recipient Name"><br>-->
	<!--					<input required type="text" name="acc_no" class="form-control form-control-lg form-control-number" placeholder="Account Number"><br>-->
	<!--					<input required type="text" name="bank_name" class="form-control form-control-lg form-control-number" placeholder="Bank Name"><br>-->
	<!--					<input required type="text" name="country" class="form-control form-control-lg form-control-number" placeholder="Country"><br>-->
	<!--					<input required type="text" name="swift" class="form-control form-control-lg form-control-number" placeholder="Bank Routing/SWIFT Number"><br>-->
	<!--					<input required type="text" name="currency" class="form-control form-control-lg form-control-number" placeholder="Currency"><br>-->
	<!--					<input required type="text" name="zip" class="form-control form-control-lg form-control-number" placeholder="ZIP Code"><br>-->
	<!--					<input required type="hidden" value="Bank" name="payment" class="form-control form-control-lg form-control-number">-->
	<!--				  </div>-->
	<!--				  <div class="nk-modal-text">-->
						<!--<input type="text" name="otp" id="otp" class="form-control form-control-lg form-control-number" placeholder="Enter OTP">-->
	<!--					<br>-->
					
	<!--					<input type="hidden" value="Btc" name="payment" class="form-control form-control-lg form-control-number">-->
	<!--				  </div>-->
	<!--				  <div class="nk-modal-action-lg">-->
					
	<!--					<button-->
	<!--					  class="btn btn-lg btn-mw btn-primary"-->
	<!--					  name="pay"-->
	<!--					  >Place Order</button>-->
						
	<!--				  </div>-->
	<!--				</form>-->
	<!--			</div>-->
	<!--		  </div>-->
			  <!-- .modal-body -->
			</div>
			<!-- .modal-content -->
		  </div>
		  <!-- .modla-dialog -->
		</div>
      <!-- .modla-dialog -->
    </div>
	
	
    <!-- JavaScript -->
<script type="text/javascript">
	
		// if (document.getElementById('bitcoin').checked == false) {
			// document.getElementById('pick').disabled = true;
		// }
	
		function show() {
			if (document.getElementById("test").value == "2") {
				if (document.getElementById('key2').value == "yes") {
					document.getElementById("keyy").style = "display: none";
					document.getElementById("payment_method").style = "display: block";
				} else {
				    // alert "Nahh"
				}
			};
				
			if (document.getElementById("chec").value == "3") {
					document.getElementById("keyy").style = "display: block";
					document.getElementById("payment_method").style = "display: none";
					// document.getElementById("confirm").style = "display: none";
			}
			
			if (document.getElementById("chec").value == "4") {
					document.getElementById("keyy").style = "display: block";
					document.getElementById("payment_method").style = "display: none";
					document.getElementById("confirm").style = "display: none";
			}
			
			if (document.getElementById("checc").value == "9") {
					document.getElementById("keyy").style = "display: none";
					document.getElementById("payment_method").style = "display: none";
					document.getElementById("confirm").style = "display: block";
			}
			
			if (document.getElementById("test1").value == "1") {
				document.getElementById("payment_method").style = "display: block";
					document.getElementById("keyy").style = "display: none";
				if (document.getElementById('test2').value == "btc") {
					// alert("btc");
					$('#btc').modal('show');
					//document.getElementById("btc").style = "display: block";
				} else if (document.getElementById('test2').value == "eth") {
					// alert("eth");
					$('#eth').modal('show');
					//document.getElementById("eth").style = "display: block";
				} else if (document.getElementById('test2').value == "bank") {
					// alert("bank");
					$('#banke').modal('show');
					document.getElementById("bank").style = "display: block";
				}
			}
		}
		
		// function activate() {
			// $('#payment_method').modal('show');
		// }
		function yy() {
				document.getElementById("keyy").style = "display: none";
				if (document.getElementById('bitcoin').checked == true) {
					// alert("btc");
					document.getElementById("test2").value = "btc";
					$('#btc').modal('show');
					//document.getElementById("btc").style = "display: block";
				} else if (document.getElementById('ethereum').checked == true) {
					// alert("eth");
					document.getElementById("test2").value = "eth";
					$('#eth').modal('show');
					//document.getElementById("eth").style = "display: block";
				} else if (document.getElementById('bank').checked == true) {
					// alert("bank");
					document.getElementById("test2").value = "bank";
					$('#banke').modal('show');
					// document.getElementById("bank").style = "display: block";
				}
			
		}
		// function pay_met() {
			// document.getElementById('bitcoin').addEventListener('click', event=>{
				// if(event.target.checked){
					// alert("btc");
				// }
			// });
	</script>
	<script src="assets/js/bundle.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/charts/chart-crypto.js"></script>
	</body>
</html>