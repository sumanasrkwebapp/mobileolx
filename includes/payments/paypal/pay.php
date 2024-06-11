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
$return_url = $link['IPN']."/?access_token=".$access_token."&i=paypal";
$_SESSION['markad'][$access_token]['txnid'] = $txnid;

$isSandBox = get_option('paypal_sandbox_mode');

if($isSandBox == 'Yes')
    $client_id = get_option('paypal_sandbox_id');
else
    $client_id = get_option('paypal_client_id');

?>

<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>

<body style="max-width: 500px; margin: auto; padding: 10px">

  <script
    src="https://www.paypal.com/sdk/js?client-id=<?php echo $client_id; ?>"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
  </script>

    <div id="paypal-button-container" style="margin-top: 200px"></div>

    <script>
        paypal.Buttons({
        createOrder: function(data, actions) {
          // This function sets up the details of the transaction, including the amount and line item details.
          return actions.order.create({
            purchase_units: [{
              description: "<?php echo $title; ?>",
              custom: "<? echo $txnid; ?>",
              amount: {
                value: <?php echo $amount; ?>,
                currency_code: "<?php echo $currency; ?>",
              }
            }]
          });
        },
        onApprove: function(data, actions) {
          // This function captures the funds from the transaction.
          return actions.order.capture().then(function(details) {
            location.href = "<?php echo $return_url; ?>" + "&order_id=" + details.id;
          });
        }
      }).render('#paypal-button-container');
      //This function displays Smart Payment Buttons on your web page.
    </script>
    
</body>