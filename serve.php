<?php 
   session_start();

   $name1="";
   $email="";
   $errors=array();
    $description="";
   $db=mysqli_connect('localhost','root','','registration');
   $contact="";
  
   $room="";

   if(isset($_POST['register'])){
   	$name1 = ($_POST['name']);
   	$email = ($_POST['email']);
   	$contact = ($_POST['contact']);
   	$room =($_POST['room']);
      $description =($_POST['description']);

   if(empty($name1)){
   	array_push($errors,"name is required");
   }
   if(empty($email)){
   	array_push($errors,"Email is required");
   }
   if(empty($room)){
   	array_push($errors,"room is required");
   }
   if(empty($contact)){
      array_push($errors,"contact is required");
   }
   if(empty($description)){
      array_push($errors,"description is required");
   }
   
   if(count($errors)==0){
      $sql="INSERT INTO sell(name,email,contact,room,description,image) VALUES('$name1','$email','$contact','$room','$description','$tmp')";
      mysqli_query($db,$sql);
      }  
    }
 }
 ?>

