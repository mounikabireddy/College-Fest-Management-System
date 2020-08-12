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
    <title>STUDENT DETAILS</title>
    <center>
        <body style="background-image: linear-gradient(-45deg,orange,white)" onload="myFunction1()">
            <h1>STUDENT DETAILS</h1>
        <img style="height: 200;width: 300;" src="images/user.jpg"><br><br>
        <form action="us.php" method="POST">
        
     
            <b>First Name</b><input placeholder="first name" id="first" type="text" style="font-size: 16pt" name="firstname" required>&nbsp;&nbsp;
            <b>Last name</b><input placeholder="last name" id="last" type="text" style="font-size: 16pt" name="lastname" required><br><br>
            <b>Email</b><input placeholder="enter the email id" id="em2" type="email" style="font-size: 16pt" name="email" required><br><br>
            <b>Contact No</b><input placeholder=" enter phone number" id="phno" type="text" style="font-size: 16pt" name="contact" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number starting with 6-9 and remaing 9 digit with 0-9" required><br><br>
            <b>Address</b><input placeholder=" enter address" id="dept" type="text" style="font-size: 16pt" name="address" required><br><br>
           <b>Regid</b><input placeholder=" enter regis id " id="reg" type="text" style="font-size: 16pt" name="regid" required><br><br>
            <a href="user.php">submit another response</a><br><br>
            <a href="main.php"><input type="button" class="button" value="NEXT"></a>&nbsp;&nbsp;
            <a href="regis.php"><input type="button" class="button" value="BACK"></a>
            <input type="submit" class="button" value="SUBMIT">
            </form> 
            <script>
            function myFunction() {
               alert("Registration succesfull!");
               }
           </script>
            <script>
             function myFunction1() {
                 alert("enter all students details if it is a group event");
                 }
                </script>
            
        </body>
    </center>    
    </head>
</html>