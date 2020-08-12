<?php

$con=mysqli_connect('localhost','root','');

   if(!$con)
   {
       echo 'Not connected to server';
   }
if(!mysqli_select_db($con,'fest'))
{
    echo 'database not selected';
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$eventid = $_POST['eventid'];
$role = $_POST['role'];



    $sql = "INSERT INTO coordinator(firstname,lastname,email,contact,eventid,role)VALUES('$firstname','$lastname','$email','$contact','$eventid','$role')";



if(!mysqli_query($con,$sql))
{
    echo 'values not inserted';
}


else
{
     echo 'values successfully inserted' ."<br>";
    echo "Registration Id:" . mysqli_insert_id($con);
    
   
    
}
?>
    
    