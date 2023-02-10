<?php
include 'katyPESA.php';

$API_checkPayment_url = "http://katypesa_test.katysoft.tech/api/check_payment";
$encyption_key = "jkgdkjsdgsjjsagk67";
$ACCESS_TOKEN = "gjkasdgkjsadbnvcxcxz";
$keyPass = "passpass";
$keyPath = "/path/to/private_certificate";

$pub_keyPass = "passpass";
$public_cert_location = "path/to/public_certificate";

$random = rand(10, 9990);

$payload2 = array(
    "service" => "ADD",
    "corporate_id" => "54353434543",
    "corporate_id2" => "8133",
    "corporate_name" => "Katypesa",
    "customer_name" => "Katypesa Test",
    "paymentReference" => "KP{$random}",
    "branch_name" => "KATYPESA",
    "paymentType" => "1",
    "mobile_number" => "255682030845",
    "token_id" => "sda54sekjeuwehrgsjkdrt3yu",
    "currency" => "TZS",
    "amount" => "10",
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