<?php
include('../model/db.php');
$error="";
if (isset($_POST['submit'])) 
{
    $connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"faculty");

if ($userQuery->num_rows > 0)
 {
    echo "<table><tr><th>ID</th><th>Name</th><th>Department</th><th>Interest</th></tr>Designation</th></tr>";
    while($row = $userQuery->fetch_assoc()) 
    {
      echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Interest"]."</td><td>".$row["Designation"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "No data Found";
  }
$connection->CloseCon($conobj);
$error="submitted" ;
}
/*else
{
    $error="Not submitted" ;
}*/



?>