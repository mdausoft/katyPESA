<?php
include '../katyPESA.php';

$API_registration_url = "http://45.79.91.57/katypesa/api/registration";
$encyption_key = "sda54sekjeuwehrgsjkdrt3yu";
$ACCESS_TOKEN = "sda54sekjeuwehrgsjkdrt3yu";
$keyPass = "passpass";
$keyPath = "/path/to_private_certificate";

$pub_keyPass = "passpass";
$public_cert_location = "path/to_public_certificate";

$payload2 = array(
    "service" => "ADD",
    "corporate_id" => "78451610527793",
    "corporate_id2" => "8133",
    "corporate_name" => "Hospy20",
    "customer_name" => "Goka Kapungu",
    "paymentReference" => "HP1234534",
    "branch_name" => "MVUMI",
    "paymentType" => "1",
    "mobile_number" => "255682030845",
    "token_id" => "sda54sekjeuwehrgsjkdrt3yu",
    "currency" => "TZS",
    "amount" => "1000",
    "expired" => "0",
    "expire_Date" => "",
    "amountType" => "FIXED"
);

try {
    $katypesa = new katyPESA(
        $encyption_key,
        $ACCESS_TOKEN,
        $keyPass,
        $pub_keyPass,
        $keyPath,
        $public_cert_location
    );
    $katypesa->setEndPoint($API_registration_url, $payload2);
    echo $katypesa->sendAPI();
} catch (Error $e) {
    echo $e->getMessage();
}