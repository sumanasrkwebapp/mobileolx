<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
require("razorpay-php/Razorpay.php");
use Razorpay\Api\Api;

if(!checkloggedin()){
    header("Location: ".$link['LOGIN']);
    exit();
}
if (isset($_SESSION['markad'][$access_token]['payment_type'])) {
    
    if(isset($_GET['payment_id']) && isset($_GET['order_id'])) {
        
            
            $api = new Api(get_option('razorpay_key'), get_option('razorpay_secret'));
            $payment = $api->payment->fetch($_GET['payment_id']);
            
            $sessionAmount = str_replace(".", "", $_SESSION['markad'][$access_token]['amount']);       
            $status = $payment->status;
            $amount = $payment->amount;
        
        
            if($status == 'captured' && $amount == $sessionAmount) {
                $msg = "Payment Verified. Transaction Successful";
                payment_success_save_detail($access_token);
                exit();
            } else {
                //tampered or failed
                $msg = "Transaction Failed";
                payment_fail_save_detail($access_token);
                mail($config['admin_email'],'Razorpay error in '.$config['site_title'],'Razorpay error in '.$config['site_title'].', status from Razorpay');
        
                $error_msg = "Transaction was not successful: Invalid Payment";
                payment_error("error",$error_msg,$access_token);
                exit();
            }

    } else {
        //tampered or failed
        
        $error = "";
        
        if(isset($_GET['payment_error']))
            $error = ": " . $_GET['payment_error'];
        
        payment_fail_save_detail($access_token);
        mail($config['admin_email'],'Razorpay error in '.$config['site_title'],'Razorpay error in '.$config['site_title'].', status from Razorpay');

        $error_msg = "Transaction was not successful" . $error;
        payment_error("error",$error_msg,$access_token);
        exit();
    }
}else {
    error($lang['INVALID_TRANSACTION'], __LINE__, __FILE__, 1);
    exit();
}
?>