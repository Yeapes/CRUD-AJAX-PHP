<?php
require __DIR__ . '/vendor/autoload.php'; 
use Illuminate\Database\Capsule\Manager as DB;
$error = array();
$response = array();
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$dob = $_POST['dob'];
if ($name == '') {
    $error['error'] = "Please Type Name";
    die(json_encode($error));
}elseif ($email == '') {
    $error['error'] = "Please Type Email";
    die(json_encode($error));
}elseif ($phone == '') {
    $error['error'] = "Please Type Phone";
    die(json_encode($error));
}elseif ($city == '') {
    $error['error'] = "Please Type City";
    die(json_encode($error));
}elseif ($dob == '') {
    $error['error'] = "Please Type Date Of Birth";
    die(json_encode($error));
}


$pushUser = DB::table('users')
            ->insert(
                [
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'city' => $city,
                    'dob' => $dob,
                ]
            );
 if ($pushUser) {
     echo "success";
 }else{
     echo "wrong";
 }