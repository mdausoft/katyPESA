<?php
include 'katyPESA.php';

$API_checkPayment_url = "http://katypesa_test.katysoft.tech/api/check_payment";
$encyption_key = "jkgdkjsdgsjjsagk67";
$ACCESS_TOKEN = "gjkasdgkjsadbnvcxcxz";
$keyPass = "passpass";
$keyPath = "/path/to/private_certificate";
$pub_keyPass = "passpass";
$public_cert_location = "path/to/public_certificate";

$payload2 = array(
    "paymentReference" => ["HP123455", "HP1234534"],
    "corporate_id" => "" // Corporate ID is Mandatory
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