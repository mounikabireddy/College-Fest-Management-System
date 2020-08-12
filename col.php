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

$colname = $_POST['colname'];
$collid = $_POST['collid'];
$contact = $_POST['contact'];
$address = $_POST['address'];



    $sql = "INSERT INTO college(colname,collid,contact,address)VALUES('$colname','$collid','$contact','$address')";



if(!mysqli_query($con,$sql))
{
    echo 'values not inserted';
}


else
{
    
    echo 'values successfully inserted' ."<br>";
    echo "New college info Id:" . mysqli_insert_id($con);
} 
?>
    
    