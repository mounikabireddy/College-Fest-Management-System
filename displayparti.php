<html>
<head>
   <title>details</title>
    <style type="text/css">
        table {
            border: 2px solid red;
            background-color: #FFC;
            
        }
        th {
            border-bottom: 5px solid #000;
        }
        td {
            border-bottom: 5px solid #666;
        }
    
    </style>
    </head>
<body>
    <h1>PARTICIPANTS DETAILS</h1>
    <?php
    include('connect-mysql.php');
    $sqlget = "SELECT * FROM parti";
    $sqldate = mysqli_query($dbcon, $sqlget) or die('error ');
   
    
    echo "<table>";
    echo "<tr><th>FIRST NAME</th><th>LAST NAME</th><th>REGISTRATION ID</th></tr>";
    
    while($row = mysqli_fetch_array($sqldate, MYSQLI_ASSOC)) {
          echo "<tr><td>";
        echo $row['fname'];
        echo "</td><td>";
        echo $row['lname'];
        echo "</td><td>";
        echo $row['regid'];
        echo "</td></tr>";
    }
    echo "</table>";

    ?>
    </body>
</html>