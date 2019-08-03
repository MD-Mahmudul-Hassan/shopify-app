<?php
require 'vendor/autoload.php'; 

use Shopify\ShopifyClient;

$client = new ShopifyClient($access_token, "yourshop.myshopify.com");
$products = $client->products->readList();




print_r($products);






?>