<?php  
     include '../Model/database.php';

     $name="";
     $err_name="";
     $phoneno="";
     $err_phoneno="";
     $occ="";
     $err_occ="";
     $err_db="";
     
     $hasError = false;




/***********************************Insert employee*************************************/

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

          if(empty($_POST["phoneno"]))
          {
               $err_phoneno="Phone No Required";
               $hasError = true;
          }

          else
          {
               $phoneno=$_POST["phoneno"];
          }

          if(empty($_POST["occ"]))
          {
               $err_occ="Occupation Required";
               $hasError = true;
          }
          else
          {  
               $occ=$_POST["occ"];
          }
          //Database

          if(!$hasError)
          {
               $rs= addEmp("$name","$phoneno","$occ");
               
               if($rs===true)
               {
                    header("manager_home.php");
               }

               $err_db= $rs;

          }
    }

     function allEmp()
        {
     	$query= "SELECT * from employee";
     	return $rs= get($query);
        }

     function getEmp()
        {
          $query= "SELECT * from employee where occupation= $occ";
          $rs= get($query);
        
          return $rs[0];
        }
    
    function addEmp($name,$phoneno,$occ)
        {
          $query="INSERT INTO employee values('$name','$phoneno','$occ')";
          return execute($query);
        }
?>
