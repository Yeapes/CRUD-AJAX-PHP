<?php
require __DIR__ . '/vendor/autoload.php'; 
use Illuminate\Database\Capsule\Manager as DB;
$id = $_POST["id"];

$user = DB::table('users')
        ->where('id',$id)
        ->first();
echo json_encode($user);        