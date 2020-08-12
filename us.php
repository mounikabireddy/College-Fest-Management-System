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
$address = $_POST['address'];
$regid = $_POST['regid'];



    $sql = "INSERT INTO student(firstname,lastname,email,contact,address,regid)VALUES('$firstname','$lastname','$email','$contact','$address','$regid')";



if(!mysqli_query($con,$sql))
{
    echo 'values not inserted';
}


else
{
    
    echo 'values successfully inserted' . "<br>";
     echo "Student Id:" . mysqli_insert_id($con);
}
?>
    
    