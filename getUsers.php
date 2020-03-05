<?php
require __DIR__ . '/vendor/autoload.php'; 
use Illuminate\Database\Capsule\Manager as DB;

//Get All of the users from users table
$users = DB::table('users')
->orderBy('id', 'DESC')
->get();
echo ' <thead class="thead-dark">
<tr>
  <th scope="col">Name</th>
  <th scope="col">Email </th>
  <th scope="col">Phone</th>
  <th scope="col">City</th>
  <th scope="col">Action</th>
</tr>
</thead>
<tbody>
';
foreach($users as $user){
echo '<tr>
<th>'. $user->name .'</th>
<td>'. $user->email .'</td>
<td>'. $user->phone .'</td>
<td>'. $user->city .'</td>
<td>
    <button type="submit" class="btn btn-success view" name="view" value="view" id="'. $user->id .'">View</button>
    <button type="submit" class="btn btn-primary edit" name="edit" value="edit" id="'. $user->id .'">Edit</button>
    <button type="submit" class="btn btn-danger delete" name="delete" value="delete" id="'. $user->id .'">Delete</button>
</td>
</tr> ';
}
echo '</tbody>';



?>