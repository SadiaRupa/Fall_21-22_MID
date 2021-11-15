<?php  
     include '../Controllers/emp_info.php';
     $emp = allEmp();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>All Employee Info</title>
</head>
<body>
      <table align="center" border="1">
      	      <th>Sl</th>
      	      <th>Name</th>
      	      <th>Phoneno</th>
      	      <th>Occupation</th>

      	      <?php  
                   $i=1;
                   foreach ($emp as $e) 
                   {
                   	 echo "<tr>";
                             echo "<td>$i</td>";
                             echo "<td>".$e["name"]."</td>";
                             echo "<td>".$e["phoneno"]."</td>";
                             echo "<td>".$e["occ"]."</td>";
                      echo "</tr>";
                      $i++;
                   }
      	      ?>
      </table>
</body>
</html>