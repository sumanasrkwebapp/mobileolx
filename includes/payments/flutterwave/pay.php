<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

if(!checkloggedin()){
    header("Location: ".$link['LOGIN']);
    exit();
}

if (isset($_SESSION['markad'][$access_token]['payment_type'])) {
    $currency = $config['currency_code'];
    $title = $_SESSION['markad'][$access_token]['name'];
    $amount = $_SESSION['markad'][$access_token]['amount'];
    $_SESSION['markad'][$access_token]['merchantOrderId'] = $access_token;
}

$username = $_SESSION['user']['username'];
$userdata = get_user_data($username);
$user_id = $userdata['id'];
$user_email = $userdata['email'];
$user_phone = $userdata['phone'];
$txnid = "Txn" . $user_id . rand(10000,99999999); 
$return_url = $link['IPN']."/?access_token=".$access_token."&i=flutterwave";
$_SESSION['markad'][$access_token]['txnid'] = $txnid;

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://checkout.flutterwave.com/v3.js"></script>
<script>
  function makePayment() {
    FlutterwaveCheckout({
      public_key: "<?php echo get_option('flutterwave_public_key'); ?>",
      tx_ref: "<?php echo $txnid; ?>",
      amount: "<?php echo $amount; ?>",
      currency: "<?php echo $currency; ?>",
      payment_options: " ",
      redirect_url: // specified redirect URL
        "<?php echo $return_url; ?>",
      meta: {
        consumer_id: "<?php echo $user_id; ?>",
      },
      customer: {
        email: "<?php echo $user_email; ?>",
        phone_number: "<?php echo $user_phone; ?>",
        name: "<?php echo $username; ?>",
      },
      callback: function (data) {
        console.log(data);
      },
      onclose: function() {
        window.location.href = window.location.href.split( '#' )[0];
      },
      customizations: {
        title: "<?php echo get_option('site_title'); ?>",
        description: "<?php echo $title; ?>",
        logo: "https://classified.canders.in/storage/logo/cander-theme_logo.png",
      },
    });
  }
  
  
$(document).ready(function ()
{
    makePayment()
});
</script>