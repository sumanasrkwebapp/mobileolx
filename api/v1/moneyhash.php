<?php

$key=$_POST["key"];
$salt="DPiiVKneUD";
//$txnId=$_POST["txnid"];
$txnId=substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$amount=$_POST["amount"];
$ProductName=$_POST["productInfo"];
$FirstName=$_POST["firstName"];
$email=$_POST["email"];
$udf1=$_POST["udf1"];
$udf2=$_POST["udf2"];
$udf3=$_POST["udf3"];
$udf4=$_POST["udf4"];
$udf5=$_POST["udf5"];
$status = "true";

$payhash_str = $key . '|' . checkNull($txnId) . '|' .checkNull($amount) . '|' .checkNull($ProductName) . '|' . checkNull($FirstName) . '|' . checkNull($email) . '|' . checkNull($udf1) . '|' . checkNull($udf2) . '|' . checkNull($udf3) . '|' . checkNull($udf4) . '|' . checkNull($udf5) . '||||||' . $salt;

//$payhash_str=hash('sha512', $key.'|'.checkNull($txnId).'|'.checkNull($amount).'|'.checkNull($ProductName).'|'.checkNull($FirstName).'|'.checkNull($email).'|||||'.checkNull($udf5).'||||||'.$salt);

function checkNull($value) {
if ($value == null) {
return '';
} else {
return $value;
}
}

$hash = strtolower(hash('sha512', $payhash_str));
$arr['payment_hash'] = $hash;
$arr['status']=0;
$arr['errorCode']=null;
$arr['responseCode']=null;
$arr['hashtest']=$payhash_str;
$arr['txnId']=$txnId; // new add
$output=$arr;

echo json_encode($output);

?>