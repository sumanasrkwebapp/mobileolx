<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

if(!checkloggedin()){
    header("Location: ".$link['LOGIN']);
    exit();
}
if (isset($_SESSION['markad'][$access_token]['payment_type'])) {
    
    if(isset($_GET['tx_ref']) && isset($_GET['transaction_id']) && isset($_GET['status'])) {

        //* check payment status
        if($_GET['status'] == 'cancelled')
        {
            echo "cancelled";
            payment_fail_save_detail($access_token);
            mail($config['admin_email'],'Flutterwave error in '.$config['site_title'],'Flutterwave error in '.$config['site_title'].', status from Flutterwave');
    
            $error_msg = "Transaction was not successful: Payment Canceled";
            payment_error("error",$error_msg,$access_token);
            exit();
        }
        elseif($_GET['status'] == 'successful')
        {
            $txid = $_GET['transaction_id'];

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  "Content-Type: application/json",
                  "Authorization: Bearer " . get_option('flutterwave_secret_key')
                ),
              ));
              
              $response = curl_exec($curl);
              
              curl_close($curl);
              
              $res = json_decode($response);
              if($res->status)
              {
                $amountPaid = $res->data->charged_amount;
                $amountToPay = $res->data->meta->price;
                if($amountPaid >= $amountToPay)
                {
                    $msg = "Payment Verified. Transaction Successful";
                    payment_success_save_detail($access_token);
                    exit();
                }
                else
                {
                    payment_fail_save_detail($access_token);
                    mail($config['admin_email'],'Flutterwave error in '.$config['site_title'],'Flutterwave error in '.$config['site_title'].', status from Flutterwave');
            
                    $error_msg = "Transaction was not successful";
                    payment_error("error",$error_msg,$access_token);
                    exit();
                }
              }
              else
              {
                payment_fail_save_detail($access_token);
                mail($config['admin_email'],'Flutterwave error in '.$config['site_title'],'Flutterwave error in '.$config['site_title'].', status from Flutterwave');
        
                $error_msg = "Transaction was not successful: Cannot Process Payment";
                payment_error("error",$error_msg,$access_token);
                exit();
              }
        }
    } else {
        //tampered or failed
        
        $error = "";
        
        if(isset($_GET['payment_error']))
            $error = ": " . $_GET['payment_error'];
        
        payment_fail_save_detail($access_token);
        mail($config['admin_email'],'Flutterwave error in '.$config['site_title'],'Flutterwave error in '.$config['site_title'].', status from Flutterwave');

        $error_msg = "Transaction was not successful" . $error;
        payment_error("error",$error_msg,$access_token);
        exit();
    }
}else {
    error($lang['INVALID_TRANSACTION'], __LINE__, __FILE__, 1);
    exit();
}
?>