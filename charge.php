<?php
require_once('composer/vendor/autoload.php');
// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_slezupO7CjZyXfjAFmEY8L0H");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:

$token = $_POST['stripeToken'];
$amount = $_POST['amount']*100;
$currency = $_POST['currency'];
$description = $_POST['description'];

$charge = \Stripe\Charge::create([
    'amount' => $amount,
    'currency' => $currency,
    'description' => $description,
    'source' => $token,
]);

// perkeliam duomenis i faila
$data = var_export($charge, true);
file_put_contents('documents/charge_info_file.txt', $data);

// atvaizduojam
header('Location: accepted.php?id='.$charge->id);
