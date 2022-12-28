<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ATzCfUsMLWSiT6y0vrpcsmxM1Uw0XbhfltFTr_ayhvoa1E6u5SQ4Ibtw60VwR3cOJwM630TGUsW9tu4f', // ClientID
        'EMBQt7_pxhmSm8vnXqpl7i2nOthP_3GtAsWwmgET6T91Ci3lljQtVadn19rDeFZ2Qel19Z647KOCExVM' // ClientSecret
    )
);
?>