<?php  
     include '../Controllers/hotel_room_info.php';
?>

<!DOCTYPE html>
<html>
<head>
     <title>Add Hotel Room</title>
</head>
<body>
      <form action="" method="post">
               <table align="center">
                        <tr>
                         <td><h2 align="center">Name: </h2></td>
                         <td>
                              <input type="text" name="name" value="<?php echo $name; ?>">
                                <span>
                                 <?php echo $err_name;?>   
                            </span>
                         </td>
                        </tr>

                        <tr>
                        <td><h2 align="center">Room No: </h2></td>
                         <td>
                              <input type="text" name="roomno" size="50" value="<?php echo $roomno; ?>">
                                <span>
                                 <?php echo $err_roomno;?>   
                            </span>
                         </td>                    
                        </tr>

                        <tr>
                         <td><h2 align="center">Description: </h2></td>
                         <td>
                              <input type="text" name="descr" size="50" value="<?php echo $descr; ?>">
                                <span>
                                 <?php echo $err_descr;?>   
                                </span>
                         </td>  
                        </tr>

                        <tr>
                            <td><h2 align="center">Room Type: </h2></td>
                            <td>
                                <select name="Category">
                                     <option selected disabled>room type</option>
                                          <?php
                                          foreach($Categories as $cd)
                                          {
                                             if($categories == $cd)
                                                  echo "<option selected>$cd</option>" ;
                                             else
                                                  echo "<option>$cd</option>";
                                          }
                                          ?>
                                </select>
                                <span>
                                      <?php echo $err_categories;?>   
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