<?php
require __DIR__ . '/vendor/autoload.php'; 
use Illuminate\Database\Capsule\Manager as DB;
$id = $_POST["id"];

$user = DB::table('users')
        ->where('id',$id)
        ->first();
//  echo json_encode($user); 
echo '<div class="table-responsive">  
<table class="table table-condensed"> 
    <tr>  
     <td width="30%"><label>Name</label></td>  
     <td width="70%">'.$user->name.'</td>  
 </tr>  
 <tr>  
     <td width="30%"><label>Email</label></td>  
     <td width="70%">'.$user->email.'</td>  
 </tr>  
 <tr>  
     <td width="30%"><label>Phone</label></td>  
     <td width="70%">'.$user->phone.'</td>  
 </tr>  
 <tr>  
     <td width="30%"><label>City</label></td>  
     <td width="70%">'.$user->city.'</td>  
 </tr>  
 <tr>  
     <td width="30%"><label>Date Of Birth</label></td>  
     <td width="70%">'.$user->dob.'</td>  
 </tr>  
</table>  
</div>';     



?>