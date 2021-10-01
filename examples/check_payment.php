<?php
include 'katyPESA.php';

$API_checkPayment_url = "http://45.79.91.57/katypesa/api/check_payment";
$encyption_key = "sda54sekjeuwehrgsjkdrt3yu";
$ACCESS_TOKEN = "sda54sekjeuwehrgsjkdrt3yu";
$keyPass = "passpass";
$keyPath = "crdbprivate.pfx";

$pub_keyPass = "passpass";
$public_cert_location = "crdbpublic.pfx";

$payload2 = array(
    "paymentReference" => ["HP123455", "HP1234534"],
    "corporate_id" => "78451610527793"
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
    $katypesa->setEndPoint($API_checkPayment_url, $payload2);
    echo $katypesa->sendAPI();
} catch (Error $e) {
    echo $e->getMessage();
}