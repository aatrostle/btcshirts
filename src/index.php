<?php require('header.php'); ?>

		<div id="myModal" class="modal fade hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">Ready to buy with BTC?</h3>
				</div>
				<div class="modal-body">
					<!-- <img src="img/early-modal-shop.png" class="pull-right" /> -->
					<p>To make sure we can deliver your shirt properly, please fill in the mailing
						address you would like us to send your shirt to.</p>
					<form class="form-horizontal order-address">
						<fieldset>
							<!-- full-name input-->
							<div class="control-group">
								<label class="control-label">Name</label>
								<div class="controls">
									<input id="full-name" name="full-name" type="text" placeholder="John Doe"
									class="input-xlarge">
								</div>
							</div>
							<!-- address-line1 input-->
							<div class="control-group">
								<label class="control-label">Address</label>
								<div class="controls">
									<input id="address-line1" name="address-line1" type="text" placeholder="address line 1"
									class="input-xlarge" style="margin-bottom: 20px;">
									<input id="address-line2" name="address-line2" type="text" class="input-xlarge">
								</div>
							</div>
							<!-- city input-->
							<div class="control-group">
								<label class="control-label">City / Postal Code</label>
								<div class="controls controls-inline">
									<input id="city" name="city" type="text" placeholder="City" class="span2">
									<input id="postal-code" name="postal-code" type="text" placeholder="zip or postal code"
									class="span2">
										
								</div>
							</div>
							<!-- postal-code input-->
							<div class="control-group">
								<label class="control-label">State</label>
								<div class="controls">
									<select id="region" name="region" placeholder="state / province / region">
										<option>Washington</option>
									</select>
								</div>
						</div>
						</fieldset>
					</form>
				</div>
				<div class="modal-footer">
					<a class="btn btn-success start-order">Submit</a>
					<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
				</div>
		</div>

		<div class="container">

			<div class="masthead">
				<ul class="nav nav-pills pull-right">
					<li class="active"><a href="/">Home</a></li>
				</ul>
				<h1 id="logo"><img src="img/btcshirts-logo.png" /> btcshirts.co</h1>
			</div>

			<hr>

			<div class="shirts row">
				<div class="shirt span4 visible-desktop">
					<img src="img/btcshirts-bitcoinchest.png" />
					<a id="bitcoin-shirt" class="shirt-request btn btn-block btn-large btn-success" href="#myModal" role="button" data-toggle="modal">Buy this shirt with BTC!</a>
				</div>
				<div class="shirt span4 visible-desktop">
					<img src="img/btcshirts-welovebitcoinbreast.png" />
					<a id="mine-business-shirt" class="shirt-request btn btn-block btn-large btn-success" href="#myModal" role="button" data-toggle="modal">Buy this shirt with BTC!</a>
				</div>
				<div class="shirt span4 visible-desktop">
					<img src="img/btcshirts-minebusinesschest.png" />
					<a id="btc-shirt" class="shirt-request btn btn-block btn-large btn-success" href="#myModal" role="button" data-toggle="modal">Buy this shirt with BTC!</a>
				</div>

				<div class="shirt span12 hidden-desktop">
					<img src="img/btcshirts-mobile.png" />
					<a id="mobile-bitcoin-shirt" class="shirt-request btn btn-block btn-large btn-success" href="#myModal" role="button" data-toggle="modal">Buy this shirt with BTC!</a>
				</div>
			</div>

			<hr>

			<div class="row">
				<div class="span6">
						<h4><i class="icon-map-marker"></i> Locally Printed</h4>
					<p>We're just a couple of Bitcoin enthusiasts in Seattle, WA. Supporting and growing the Bitcoin economy is a goal of ours, we also print t-shirts.</p>

					<h4><i class="icon-fire"></i> Instant Purchase</h4>
					<p>With Bitcoin your purchase your guarenteed a fast transaction with no additional fees.</p>
					<!--<p>All payments are in BTC. Help support the Bitcoin economy and enjoy the quick and easy transaction that Bitcoin affords.</p>-->
				</div>

				<div class="span6">
						<h4><i class="icon-shopping-cart"></i> Support the Bitcoin Economy</h4>
					<p>Show your support of the Bitcoin economy with style. Sport your new t-shirt and be a Bitcoin ambassador.</p>

					<h4><i class="icon-envelope"></i> Free Shipping in the USA!</h4>
					<p>We ship via USPS and currently we only ship to the contiguous United States. We may open up sales internationally if there is demand.</p>
				</div>

				</div>

			<hr>

<?php require('footer.php'); ?>