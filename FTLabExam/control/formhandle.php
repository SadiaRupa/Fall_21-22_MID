<?php
include('../model/db.php');

if (empty($_REQUEST["checkName"]))
{
    echo "Please enter your name";
}
else
{
    $connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->SearchName($conobj,"faculty",$_REQUEST["checkName"]);
if ($userQuery->num_rows > 0)
{
    while($row = $userQuery->fetch_assoc())
     {
        $id=$row['ID'];
        $name= $row['Name'];
        $department=$row['Department'];
        $interest=$row['Interest']; 
        $desig=$row['Designation'];
   
}
else
{
    echo "No name found.";
}
$connection->CloseCon($conobj);
}
?>