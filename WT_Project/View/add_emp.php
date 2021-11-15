<?php  
    include '../Controllers/emp_info.php';
?>

<!DOCTYPE html>
<html>
<head>
     <title>Add Employee </title>
</head>
<body>
      <form action="" method="post">
               <table align="center">
                        <tr>
                         <td><h2 align="center">Name:</h2></td>
                         <td>
                              <input type="text" name="name" value="<?php echo $name; ?>">
                                <span>
                                 <?php echo $err_name;?>   
                            </span>
                         </td>
                        </tr>

                        <tr>
                        <td><h2 align="center">Phone no:</h2></td>
                         <td>
                              <input type="text" name="phoneno" value="<?php echo $phoneno; ?>">
                                <span>
                                 <?php echo $err_phoneno;?>   
                            </span>
                         </td>                    
                        </tr>

                        <tr>
                         <td><h2 align="center">Occupation:</h2></td>
                         <td>
                              <input type="text" name="occ" value="<?php echo $occ; ?>">
                                <span>
                                 <?php echo $err_occ;?>   
                                </span>
                         </td>  
                        </tr>
               </table>

               <div align="center">
                       <input type="submit" name="Insert" value="Submit">
               </div><br>

               <div>
			     <a href="manager_home.php" >Back to home page.</a>
		     </div>
      </form>
</body>
</html>