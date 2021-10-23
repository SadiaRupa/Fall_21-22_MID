<?php 
   $name=""; 
   $err_name=""; 
   $lastname=""; 
   $err_lastname=""; 
   $age=""; 
   $err_age=""; 
   $designation=""; 
   $err_designation=""; 
   $preflanguage=[]; 
   $err_preflanguage=""; 
   $email=""; 
   $err_email="";
   $pass=""; 
   $err_pass="";  
    
   $hasError=false; 
    
    
   function preflanguageExist($preflanguage){ 
     global $preflanguages; 
     foreach($preflanguages as $l){ 
       if($l == $preflanguage){ 
         return true; 
       } 
     } 
     return false; 
   } 
 
 
   if($_SERVER["REQUEST_METHOD"] == "POST"){ 
      
     if(empty($_POST["name"])){ 
       $err_name="Name Required"; 
       $hasError = true; 
     } 
     else if(strlen($_POST["name"]) <=2){ 
       $err_name="Name Must be greater than 2"; 
       $hasError = true; 
     } 
     else{ 
       $name=$_POST["name"]; 
     } 
     if(empty($_POST["lastname"])){ 
       $err_lastname="Last name Required"; 
       $hasError = true; 
     } 
     else{ 
       $lastname =$_POST["lastname"]; 
     } 
     if(empty($_POST["age"])){ 
        $err_age="age Required"; 
        $hasError = true; 
      } 
      else{ 
        $age =$_POST["age"]; 
      } 
     if(!isset($_POST["designation"])){ 
       $err_designation="Select your designation"; 
       $hasError = true; 
     } 
     else{ 
       $designation = $_POST["designation"]; 
     }
     if(!isset($_POST["preflanguages"])){ 
       $err_preflanguages="You must select one language"; 
       $hasError = true; 
     } 
     else{ 
       $preflanguages = $_POST["preflanguages"]; 
     }

     if(empty($_POST["email"])){ 
        $err_email="Email Required"; 
        $hasError = true; 
      }  
      } 
      else{ 
        $email=$_POST["email"]; 
      } 
      if(empty($_POST["pass"])){ 
        $err_pass="Password Required"; 
        $hasError = true; 
      } 
       
      else{ 
        $pass=$_POST["pass"]; 
      } 
      
     if(!$hasError){ 
       echo $name."<br>"; 
       echo $_POST["lastname"]."<br>"; 
       echo $_POST["Age"]."<br>"; 
       echo $_POST["designation"]."<br>"; 
        
       $arr = $_POST["preflanguages"]; 
        
       foreach($arr as $e){ 
        echo "$e <br>"; 
       } 
     } 

   } 
?> 

<html> 
   <head></head> 
   <body> 
     <fieldset> 
       <form action="" method="post"> 
         <table > 
           <tr> 
             <td>Name: </td> 
             <td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td> 
             <td><span><?php echo $err_name;?></span></td> 
              
           </tr> 
           <tr> 
             <td>Last name: </td> 
             <td><input type="text" name="username" value="<?php echo $lastname;?>" placeholder="lastname"></td> 
             <td><span><?php echo $err_lastname;?></span></td> 
           </tr>
           <tr> 
             <td>Age: </td> 
             <td><input type="number" name="username" value="<?php echo $age;?>" placeholder="age"></td> 
             <td><span><?php echo $err_age;?></span></td> 
           </tr> 
           <tr> 
             <td>Password: </td> 
             <td><input type="password" name="password" placeholder="Password"></td> 
           </tr> 
 
 
           <tr> 
             <td>Designation: </td> 
             <td>
                <input type="radio" value="Junior Programmer" <?php if($designation == "Junior Programmer") echo "checked";?> name="designation"> Junior Programmer
                <input type="radio" value="Senior Programmer" <?php if($designation == "Senior Programmer") echo "checked";?> name="designation"> Senior Programmer
                <input type="radio" value="Project Lead" <?php if($designation == "Project Lead") echo "checked";?> name="designation"> Project Lead
            </td> 
             <td><span><?php echo $err_designation;?></span></td> 
           </tr> 
           <tr> 
             <td>Hobbies:  </td> 
             <td> 
               <input type="checkbox" value="JAVA" <?php if(preflanguageExist("JAVA")) echo "checked";?>  name="preflanguages[]"> JAVA
               <input type="checkbox" value="PHP" <?php if(preflanguageExist("PHP")) echo "checked";?> name="preflanguages[]"> PHP 
               <input type="checkbox" value="C++" <?php if(preflanguageExist("C++")) echo "checked";?> name="preflanguages[]"> C++
             </td> 
             <td><span><?php echo $err_preflanguages;?></span></td> 
           </tr> 
           <tr> 
             <td align="right" colspan="2"><input type="submit" value="Register"></td> 
           </tr> 
            
         </table> 
      </form> 
     </fieldset> 
   </body> 
 </html>