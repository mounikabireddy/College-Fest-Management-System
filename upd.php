<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$Noofparticipants=$_POST['Noofparticipants'];
$eventid=$_POST['eventid'];

$sql = "UPDATE events SET participants='$Noofparticipants' WHERE eventid='$eventid'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>