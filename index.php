<?php
 
// ==== Control Vars =======
$strFromNumber = "+18453841654";
$strToNumber = "+19292168151";
$strMsg = "Hello from Dutta Debarshi";  
$aryResponse = array();
 
    // include the Twilio PHP library - download from 
    // http://www.twilio.com/docs/libraries/
    require_once ("inc/Services/Twilio.php");
 
    // set our AccountSid and AuthToken - from www.twilio.com/user/account
    $AccountSid = "AC28c89c731696859b194cb65c3c4a5abf";
    $AuthToken = "dcbe805f98022076a02ebe980169db48";
 
    // ini a new Twilio Rest Client
    $objConnection = new Services_Twilio($AccountSid, $AuthToken);
    // Send a new outgoinging SMS by POSTing to the SMS resource */
    $bSuccess = $objConnection->account->sms_messages->create(
        
        $strFromNumber, 	// number we are sending From 
        $strToNumber,           // number we are sending To
        $strMsg			// the sms body
    );
		
    $aryResponse["SentMsg"] = $strMsg;
    $aryResponse["Success"] = true;
    
    
    echo json_encode($aryResponse);