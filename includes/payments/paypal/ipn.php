<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

if(!checkloggedin()){
    header("Location: ".$link['LOGIN']);
    exit();
}
if (isset($_SESSION['markad'][$access_token]['payment_type'])) {
    
    if(isset($_GET['order_id'])) {
        
        $isSandBox = get_option('paypal_sandbox_mode');

        if($isSandBox == 'Yes') {
            $api_end_point = "https://api-m.sandbox.paypal.com";
            $client_id = get_option('paypal_sandbox_id');
            $client_secret = get_option('paypal_sandbox_secret');
        }
        else {
            $api_end_point = "https://api-m.paypal.com";
            $client_id = get_option('paypal_client_id');
            $client_secret = get_option('paypal_api_signature');
        }
        
    
        $paypal_token = base64_encode($client_id . ":" . $client_secret);
   
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $api_end_point . '/v2/checkout/orders/' . $_GET['order_id']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        
        
        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Basic ' . $paypal_token;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $json = json_decode($result, true);

        $status = $json['status'];
        
        if($status == 'COMPLETED') {
            $msg = "Payment Verified. Transaction Successful";
            payment_success_save_detail($access_token);
            exit();
        } else {
            //tampered or failed
                $msg = "Transaction Failed";
                payment_fail_save_detail($access_token);
                mail($config['admin_email'],'Paypal error in '.$config['site_title'],'Paypal error in '.$config['site_title'].', status from Paypal');
        
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
        mail($config['admin_email'],'Paypal error in '.$config['site_title'],'Paypal error in '.$config['site_title'].', status from Paypal');

        $error_msg = "Transaction was not successful" . $error;
        payment_error("error",$error_msg,$access_token);
        exit();
    }
}else {
    error($lang['INVALID_TRANSACTION'], __LINE__, __FILE__, 1);
    exit();
}
?>