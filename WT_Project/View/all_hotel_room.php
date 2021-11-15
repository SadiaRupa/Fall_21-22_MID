<?php  
     include '../Controllers/hotel_room_info.php';
     $hotel = all_hotel_rooms();
?>

<!DOCTYPE html>
<html>
<head>
	<title>All Hotel Room Info</title>
</head>
<body>
      <table align="center" border="1">
      	      <th>Sl</th>
      	      <th>Name</th>
      	      <th>Room No</th>
      	      <th>Descrption</th>
             <th>Room Type</th>

      	      <?php  
                   $i=1;
                   foreach ($hotel as $h) 
                   {
                   	 echo "<tr>";
                             echo "<td>$i</td>";
                             echo "<td>".$h["name"]."</td>";
                             echo "<td>".$h["roomno"]."</td>";
                             echo "<td>".$h["descr"]."</td>";
                             echo "<td>".$h["categories"]."</td>";
                      echo "</tr>";
                      $i++;
                   }
      	      ?>
      </table>
</body>
</html>
