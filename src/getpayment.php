<?php

require('coinbase.php');

$fields = array(
  "button" => array(
    "name" => $_POST["name"],
    "price_string" => "1.00",
    "price_currency_iso" => "USD",
    "custom" => $_POST["custom"],
    "description" => $_POST["description"],
    "type" => "buy_now",
    "style" => "custom_large"
  )
);

$fields_string = json_encode($fields);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//execute post
$result = curl_exec($ch);
echo $result;

//close connection
curl_close($ch);