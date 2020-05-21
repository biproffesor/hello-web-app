<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "d4cba158c3045b10ed83167c06d1be71";
$scopes = "read_orders,write_products";
$redirect_uri = "https://besto.6te.net/apps/testapp/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();