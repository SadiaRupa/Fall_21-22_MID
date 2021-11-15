<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="cv";
 
 $conn=new mysqli($servername,$username,$password,$dbname);
 if($conn->connect_error){
     die("connection failed".$connect_error);

 }
 $test=TRUE;
 $username=$_REQUEST["username"];
 $password=$_REQUEST["password"];
 $full_name=$_REQUEST["full_name"];
 $mobile_no=$_REQUEST["mobile_no"];
 $dob=$_REQUEST["dob"];
 $uni=$_REQUEST["uni"];
 $degree=$_REQUEST["degree"];
 $major=$_REQUEST["major"];
 $results=$_REQUEST["results"];
 $pass_year=$_REQUEST["pass_year"];
 
 $sql="INSERT INTO employee(username,password,full_name,mobile_no,dob,uni,degree,major,results,pass_year) 
 VALUES ( '$username','$password','$full_name',' $mobile_no','$dob','$uni','$degree','$major','$results','$pass_year')";
 if($conn->query($sql)==$test)
 {
     if($_REQUEST["submit"]==TRUE){
        echo "successfully inserted!";
    }                                                                                                                                          
 }
 else{
     echo "error:". $sql. "<br>".$conn->error;

 }
 $conn->close();

?>