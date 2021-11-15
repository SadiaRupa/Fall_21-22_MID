<?php  
     include '../Controllers/meals_info.php';
     $meal = allMeals();
?>

<!DOCTYPE html>
<html>
<head>
	<title>All Meal Info</title>
</head>
<body>
      <table align="center" border="1">
      	      <th>Sl</th>
      	      <th>Name</th>
      	      <th>Price</th>
      	      <th>Details</th>
              <th>Meal Type</th>

      	      <?php  
                   $i=1;
                   foreach ($meal as $m) 
                   {
                   	 echo "<tr>";
                             echo "<td>$i</td>";
                             echo "<td>".$m["name"]."</td>";
                             echo "<td>".$m["price"]."</td>";
                             echo "<td>".$m["dets"]."</td>";
                             echo "<td>".$m["categories"]."</td>";
                      echo "</tr>";
                      $i++;
                   }
      	      ?>
      </table>
</body>
</html>