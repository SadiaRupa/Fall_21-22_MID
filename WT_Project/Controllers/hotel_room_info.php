<?php  
     include '../Model/database.php';

     $name="";
     $err_name="";
     $roomno="";
     $err_roomno="";
     $descr="";
     $err_descr="";
     $categories="";
     $err_categories="";
     $err_db="";

     $hasError = false;

     $Categories = array("Single Bed","Double Bed","Tripple Bed","Queen","King");


/***********************************Insert Hotel*************************************/

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

          if(empty($_POST["roomno"]))
          {
               $err_roomno="RoomNO Required";
               $hasError = true;
          }

          else
          {
               $roomno=$_POST["roomno"];
          }

          if(empty($_POST["descr"]))
          {
               $err_descr="Description Required";
               $hasError = true;
          }

          else
          {  
               $descr=$_POST["descr"];
          }

          if(!isset($_POST["Category"]))
          {
               $err_categories="Room Type Required";
               $hasError = true;
          }

          else
          {
               $categories=$_POST["Category"];
          }

          //Database

          if(!$hasError)
          { 
          
               $rs= insertHotel("$name","$roomno","$descr","$categories");
               
               if($rs===true)
               {
                    header("manager_home.php");
               }

               $err_db= $rs;

          }
     }

     function all_hotel_rooms()
     {
     	$query= "SELECT * from hotel_room";
     	return $rs= get($query);
     }

     function get_hotel_room()
     {
          $query= "SELECT * from hotel_room where roomno = $roomno";
          $rs= get($query);
          return $rs[0];
     }
     function insertHotel($name,$roomno,$descr,$categories)
     {
          $query="INSERT INTO hotel_room VALUES('$name','$roomno','$descr','$categories')";
          return execute($query);
     }
?>