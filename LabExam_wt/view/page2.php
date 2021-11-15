<?php  
include ('../control/datacheck.php');
?>
<!DOCTYPE html>
<html>


 <h1>Education</h1>
 <form action=""method="post">
      University: <input type="text" name="uni"> <br> <?php echo $uni; ?> <br>
       Degree: <input type="text" name="degree"> <br> <?php echo $degree;?> <br>
       Major: <input type="text" name ="major"> <br>  <?php echo $major; ?> <br>
       Results: <input type="text" name="results"><br>  <?php echo $results; ?> <br>
        passing Years: <input type="date" name="pass_year"><br>  <?php echo  $pass_year;?> <br>
       <input type="submit" name= "submit"value ="submit">
 </form>
<body>
    
</body>
</html>