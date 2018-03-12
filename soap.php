<?php
//call library
require_once('nusoap.php');
$URL       = "www.wirecard.com.tr/notification";
$namespace = $URL . '?wsdl';
//using soap_server to create server object
$server    = new soap_server;
$server->configureWSDL('Wirecard', $namespace);

//register a function that works on server
$server->register('subscriptionDeactivation');
$server->register('receiveOrderResult');

// create the function
function subscriptionDeactivation($SubscriptionId, $GSMOperator,$GSM,$CreateDate,$EndDate,$ProductId,$Price)
{
        return null;
}

// create the function
function receiveOrderResult($OrderObjectId, $GSM,$MPAY,$SMSContent,$TotalPrice,$TotalUnitPrice,$State,$StatusCode,$ErrorCode,$ErrorMessage,$GsmOperator,$GsmType,$SubscriberId,$Products,$OrderChannelId,$PaymentTypeId,$PaymentCategoryId,$Pin)
{
        return null;
}


// create HTTP listener
$server->service($HTTP_RAW_POST_DATA);
exit();
?>