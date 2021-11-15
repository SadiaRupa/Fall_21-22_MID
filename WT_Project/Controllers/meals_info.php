<?php  
     include '../Model/database.php';

     $name="";
     $err_name="";
     $price="";
     $err_price="";
     $dets="";
     $err_dets="";
     $err_db="";
     $categories="";
     $err_categories="";

     $hasError = false;

     $Categories = array("Lunch","Dinner","Breakfast");



/***********************************Insert Meal*************************************/

if(isset($_POST["Insert"]))
     {
           if(empty($_POST["name"]))
          {
               $err_name="Name Required";
               $hasError = true;
          }

          else
          {
               $name=$_POST["name"];
          }

          if(empty($_POST["price"]))
          {
               $err_price="Price Required";
               $hasError = true;
          }

          else
          {
               $price=$_POST["price"];
          }

          if(empty($_POST["dets"]))
          {
               $err_dets="Details Required";
               $hasError = true;
          }

          else
          {  
               $dets=$_POST["dets"];
          }

          if(!isset($_POST["Category"]))
          {
               $err_categories="Meal Type Required";
               $hasError = true;
          }

          else
          {
               $categories=$_POST["Category"];
          }

          //Database

          if(!$hasError)
          {
          
               $rs= insertMeal("$name","$price","$dets","$categories");
               
               if($rs===true)
               {
                    header("manager_home.php");
               }

               $err_db= $rs;

          }
     }

     function allMeals()
     {
     	$query= "SELECT * from meals";
     	return $rs= get($query);
     }

     function getMeals()
     {
          $query= "SELECT * from meals where catrgory= $categories";
          $rs= get($query);
          return $rs[0];
     }

     function insertMeal($name,$price,$dets,$categories)
     {
          $query="INSERT INTO meals VALUES('$name','$price','$dets','$categories')";
          return execute($query);
     }
?>