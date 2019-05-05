<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2 class="mt-2 text-center">Test payment</h2>
		<div class="d-flex justify-content-center align-items-center">
			<form action="./charge.php" method="post" id="payment-form" class="col-lg-6 col-md-8 col-sm-10">
			    <div class="input-group mb-2 mt-4">
			    	<div class="input-group-prepend input-label-width">
	    				<span class="input-group-text">Amount:</span>
	  				</div>
			    	<input class="form-control" type="text" name="amount">
			    </div>
			    <div class="input-group mb-2">
			    	<div class="input-group-prepend input-label-width">
	    				<span class="input-group-text">Currency:</span>
	  				</div>
			    	<select class="form-control" type="text" name="currency">
			    		<option value="eur">EUR</option>
			    		<option value="usd">USD</option>
			    	</select>
			    </div>
			    <div class="input-group mb-2">
			    	<div class="input-group-prepend input-label-width">
	    				<span class="input-group-text">Description:</span>
	  				</div>
			    	<input class="form-control" type="text" name="description">
			    </div>
			    <div id="card-element" class="form-control">
			      <!-- A Stripe Element will be inserted here. -->
			    </div>
			    <!-- Used to display form errors. -->
			    <div id="card-errors" role="alert"></div>
				
			  	<button class="btn btn-primary mt-2">Submit Payment</button>
			</form>
		</div>
	</div>

	<script src="https://js.stripe.com/v3/"></script>
	<script src="./js/form_submit_js.js"></script>
</body>
</html>