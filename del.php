<?php

$coordid=$_POST['coordid'];

$connection = mysqli_connect('localhost','root','','fest');
if(!$connection)
{
    die("database connection failed".mysqli_error($connection));
}
$select_db=mysqli_select_db($connection,'fest');
if(!$select_db)
{
    die("database selection failed".mysqli_error($connection));
}

$query="DELETE FROM coordinator WHERE coordid='$coordid'";
       $result=mysqli_query($connection,$query) or die(mysqli_error($connection));
    echo "deleted seccessfully";

?>