# katyPESA

## How to Install

- First, Make sure you Download the **Latest release** of this application through the following link **[KatyPESA releases](https://github.com/mdausoft/katyPESA)**
- Then, After you have downloaded _Unzip_ and place the application folder wherever you wish.

## How to Use

- For registering the transaction

  ```PHP
  <?php
  include "/path/to/katyPESA_class";

  $payload = array(
    "service" => "ADD",
    "corporate_id" => "XXXXXXX",
    "corporate_id2" => "XXX",
    "corporate_name" => "XXXXX XXXXX XXX",
    "customer_name" => "XXXX XXXX",
    "paymentReference" => "XXXXXXXXXXX",
    "branch_name" => "XXXX",
    "paymentType" => "1",
    "mobile_number" => "255XXXXXXXXX",
    "token_id" => "XXXXXXXXXXXXXXX",
    "currency" => "TZS",
    "amount" => "XXXX",
    "expired" => "0",
    "expire_Date" => "",
    "amountType" => "FIXED"
  );

  try {
        $katypesa = new katyPESA(
        "your_encryption_key",
        "your_access_token",
        "private_key_password",
        "public_key_password",
        "path/to/private_certificate",
        "path/to/public_certificate");

    $katypesa->setEndPoint("URL", $payload);
    $katypesa->sendAPI();
  } catch (Error $e) {
    echo $e->getMessage();
  }
  ?>
  ```

> For more information please check ./examples folder
> And Make sure you have the Certificates

Please don't hesitate to contact us directly via:

Email us <info@katysoft.co.tz>

### Happy Coding 😋
