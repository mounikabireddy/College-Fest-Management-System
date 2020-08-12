<?php session_start(); ?>
<html>
<head>
    <style>
 .button {
  background-color:coral; /* Green */
  border:none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration:none;
  display: inline-block;
  font-size: 16px;
  opacity: 0.6;
            }
    .button:hover{opacity: 1}
     .button {
     border-radius: 35px;
     cursor: pointer;
     transition: 0.3s;
            }   
    </style>
    <title>REGISTRATION FORM</title>
    <center>
        <body style="background-image: linear-gradient(-45deg,orange,white)">
            <h1>REGISTRATION FORM</h1>
        <img style="height: 200;width: 300;" src="images/reg.jpg"><br><br>
        <form action="connect.php" method="POST">
        
     
            <b> Firstname</b><input placeholder="first name" id="first" type="text" style="font-size: 16pt" name="firstname" required>&nbsp;&nbsp;
            <b>Lastname</b><input placeholder="last name" id="last" type="text" style="font-size: 16pt" name="lastname" required><br><br>
            <b>USN</b><input placeholder=" enter USN" id="usn" type="text" style="font-size: 16pt"  name="usn" required><br><br>
            <b>Department</b><input placeholder=" enter department" id="dept" type="text" style="font-size: 16pt" name="department" required><br><br>
            <b>College Info id</b><input placeholder=" enter college name" id="coll" type="text" style="font-size: 16pt" name="collegeinfoid" required><br><br>
            <b>Event id</b><input placeholder=" enter event id" id="eventid" type="text" style="font-size: 16pt" name="eventid" required><br><br>
           
            
            <b>Registration fee</b><input placeholder="enter the amount" id="t1" type="text" style="font-size: 16pt" name="fee" required><br><br>
            <a href="user.php"><input type="button" class="button" value="NEXT"></a>&nbsp;&nbsp;
            <a href="college.php"><input type="button" class="button" value="Back"></a>
            <input type="submit" class="button" value="SUBMIT">
            </form> 
            <script>
            function myFunction() {
               alert("Registration Successful!");
               }
           </script>
            
            
        </body>
    </center>    
    </head>
</html>