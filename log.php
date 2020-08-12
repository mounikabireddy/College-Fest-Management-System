<?php
$Email=$_POST['Email'];
$Password=$_POST['Password'];
	

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

$query="SELECT  Email,Password FROM login WHERE Email='$Email' and Password='$Password'";
	$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		echo "Login successful";
        exit(header("refresh:0;url=changes.php"));
	}
	else
		echo "Invalid login";
?>
