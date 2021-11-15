<?php
     include ('../Controllers/meals_info.php');
?>

<!DOCTYPE html>
<html>
<head>
     <title>Add Meal Info</title>
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
                        <td><h2 align="center">Price: </h2></td>
                         <td>
                              <input type="text" name="price" value="<?php echo $price; ?>">
                                <span>
                                 <?php echo $err_price;?>   
                            </span>
                         </td>                    
                        </tr>

                        <tr>
                         <td><h2 align="center">Details: </h2></td>
                         <td>
                              <input type="text" name="dets" value="<?php echo $dets; ?>">
                                <span>
                                 <?php echo $err_dets;?>   
                                </span>
                         </td>  
                        </tr>

                        <tr>
                            <td><h2 align="center">Meal Type: </h2></td>
                            <td>
                                <select name="Category">
                                     <option selected disabled>meal</option>
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