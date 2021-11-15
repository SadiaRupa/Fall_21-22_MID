<?php include ('../control/datacheck1.php');

session_start(); 

header("Location:page2.php"); 


?>
<!DOCTYPE html>
<html>

 <h1>Personal Details</h1>
 <form action="" method="post">
      Username: <input type="text" name="username"> <br>  <?php echo  $username; ?> <br>
       Password: <input type="password" name="password"> <br> <?php  echo $password;?> <br>
       Full name: <input type="text" name ="full_name"> <br>   <?php echo $full_name;?> <br>
       Mobile no: <input type="number" name="mobile_no"><br> <?php  echo $mobile_no; ?> <br>
       Date of birth : <input type="date" name="dob"><br>  <?php  echo $dob; ?><br>
       <input type="submit" name= "submit"value ="Next">
 </form>

</html>