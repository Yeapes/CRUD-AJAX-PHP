<?php
require __DIR__ . '/vendor/autoload.php'; 
use Illuminate\Database\Capsule\Manager as DB;

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$dob = $_POST['dob']; 

$userUpdate = DB::table('users')
->where('id',$id)
->update(
[
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'city' => $city,
    'dob' => $dob
]
);
if($userUpdate) {
die('successfull');
}else{
echo "Something Wrong";
}
?>