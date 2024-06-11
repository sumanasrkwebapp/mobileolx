<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$result = ORM::for_table($config['db']['pre'].'firebase_device_token')
    ->select('token')
    ->where('user_id', '1')
    ->find_many();

echo ORM::get_last_query();