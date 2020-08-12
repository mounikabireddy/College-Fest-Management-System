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
$usn = $_POST['usn'];
$department = $_POST['department'];
$collegeinfoid = $_POST['collegeinfoid'];
$eventid = $_POST['eventid'];
$fee = $_POST['fee'];


    $sql =  "INSERT INTO regis(firstname,lastname,usn,department,collegeinfoid,eventid,fee)VALUES('$firstname','$lastname','$usn','$department','$collegeinfoid','$eventid','$fee')";


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
    
    