<?php 
 include ('../model/db.php');

 $username="";
 $password="";
 $full_name="";
 $mobile_no="";
 $dob="";

 if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(!empty($_REQUEST["username"])){
                $username=$_REQUEST["username"];
            }
            else
             {
                 echo "please input here";
             }
             if(!empty($_REQUEST["password"])){
                 $password=$_REQUEST["password"];
             }
             else {
                 echo "input <br>";
             }
              if(!empty($_REQUEST["full_name"]))
              {
                  $full_name=$_REQUEST["full_name"];
              }
              else{
                   echo "fill it <br>";
              }
              if(!empty($_REQUEST["mobile"])){
                      $mobile_no=$_REQUEST["mobile_no"];
              }
              else 
              {
                  echo  $mobile_no="Type here <br>";
              }
              if(!empty($_REQUEST["dob"])){
                   $dob=$_REQUEST["dob"];
              }
              else 
              {
                  echo  $mobile_no="type here<br>";
              }
              
              
 }










?>