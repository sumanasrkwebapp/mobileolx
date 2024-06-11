<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
require("razorpay-php/Razorpay.php");
use Razorpay\Api\Api;

$api = new Api(get_option('razorpay_key'), get_option('razorpay_secret'));

if(!checkloggedin()){
    header("Location: ".$link['LOGIN']);
    exit();
}

if (isset($_SESSION['markad'][$access_token]['payment_type'])) {
    $currency = $config['currency_code'];
    $title = $_SESSION['markad'][$access_token]['name'];
    $amount = $_SESSION['markad'][$access_token]['amount'];
    
    
    if (strpos($amount, ".") !== false) {
        $newAmount = str_replace(".", "", $amount);
    } else {
        $newAmount = $amount . "00";
    }

    $_SESSION['markad'][$access_token]['merchantOrderId'] = $access_token;
}

$username = $_SESSION['user']['username'];
$userdata = get_user_data($username);
$user_id = $userdata['id'];
$user_email = $userdata['email'];
$user_phone = $userdata['phone'];
$txnid = "Txn" . $user_id . rand(10000,99999999); 
$return_url = $link['IPN']."/?access_token=".$access_token."&i=razorpay";

$payment = $api->order->create(array('receipt' => $txnid, 'amount' => $newAmount, 'currency' => $currency, 'notes'=> array('Plan'=> $title)));
$_SESSION['markad'][$access_token]['orderId'] = $payment->id;
$orderId = $payment->id;

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "<?php echo get_option('razorpay_key'); ?>", // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo $newAmount; ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "<?php echo $currency; ?>",
    "name": "<?php echo get_option('site_title'); ?>",
    "description": "<?php echo $title; ?>",
    "image": "https://classified.canders.in/storage/logo/cander-theme_logo.png",
    "order_id": "<?php echo $orderId; ?>",
    "handler": function (response){
        //alert(response.razorpay_payment_id);
        //alert(response.razorpay_order_id);
        //alert(response.razorpay_signature)
        //alert("<?php echo $payment->id; ?>")
        
        if (response.razorpay_order_id == "<?php echo $payment->id; ?>") {
          location.href = "<?php echo $return_url; ?>" + "&payment_id=" + response.razorpay_payment_id + "&order_id=" + "<?php echo $orderId; ?>";
        }
    },
    "prefill": {
        "name": "<? echo $username; ?>",
        "email": "<? echo $user_email; ?>",
        "contact": "<?php echo $user_phone; ?>"
    },
    "theme": {
        "color": "#3399cc"
    },
    "modal": {
        "ondismiss": function(){
             window.location.href = window.location.href.split( '#' )[0];
        }
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        /*alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);*/
        
        location.href = "<?php echo $return_url; ?>" + "&payment_error=" + response.error.description;
});


$(document).ready(function ()
{
    rzp1.open();
});

</script>

