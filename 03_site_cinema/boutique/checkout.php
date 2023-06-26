<?php
require_once '../inc/functions.inc.php';
require_once '../stripe-php/init.php';
require_once 'secrets.php';
$total = ($_POST['total'] * 100);

\Stripe\Stripe::setApiKey($stripeSecretKey);
header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/php_cours/03_site_cinema/boutique';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price_data' => [
      'currency' => 'EUR',
      'unit_amount' => $total,
      'product_data' => [
        'name' => 'Film'
      ]
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.php?total='. ($total / 100),
  'cancel_url' => $YOUR_DOMAIN . '/cancel.php',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);

?>