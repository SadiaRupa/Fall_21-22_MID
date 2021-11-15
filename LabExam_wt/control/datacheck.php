<?php 
 include ('../model/db.php');
 $uni="";
 $degree="";
 $major="";
 $results="";
 $pass_year="";

 if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(!empty($_REQUEST["uni"])){
                $uni=$_REQUEST["uni"];
            }
            else
             {
                 echo "please input here";
             }
             if(!empty($_REQUEST["degree"])){
                 $degree=$_REQUEST["degree"];
             }
             else {
                 echo  "input <br>";
             }
              if(!empty($_REQUEST["major"]))
              {
                  $major=$_REQUEST["major"];
              }
              else{
                   echo  "fill it <br>";
              }
              if(!empty($_REQUEST["results"])){
                      $result=$_REQUEST["results"];
              }
              else 
              {
                  echo "Type here <br>";
              }
              if(!empty($_REQUEST["pass_year"])){
                   $passing=$_REQUEST["pass_year"];
              }
              else 
              {
                  echo  "type here<br>";
              }
 }

?>