<?php
require __DIR__ . '/vendor/autoload.php'; 
use Illuminate\Database\Capsule\Manager as DB;

$id = $_POST['id'];
// echo $id;
$userDelete = DB::table('users')
            ->where('id',$id)
            ->delete();
if($userDelete){
    die('success');
}else{
    echo 'wrong';
}           