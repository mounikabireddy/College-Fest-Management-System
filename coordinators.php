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
    <title>CO-ORDINATORS DETAILS</title>
    <center>
        <body style="background-image: linear-gradient(-45deg,orange,white)" >
            <h1>CO-ORDINATORS DETAILS</h1>
              <img style="height: 200;width: 300;" src="images/cordin.jpg"><br><br>
        <form action="cordi.php" method="POST">
        
     
            <b>First Name</b><input placeholder="enter first name" id="name" type="text" style="font-size: 16pt" name="firstname" required>&nbsp;&nbsp;
             <b>Last Name</b><input placeholder="enter last name" id="name" type="text" style="font-size: 16pt" name="lastname" required><br><br>
            <b>Email</b><input placeholder="enter the email id" id="em2" type="email" style="font-size: 16pt" name="email" required><br><br>
            <b>Contact No</b><input placeholder=" enter phone number" id="phno" type="text" style="font-size: 16pt" name="contact" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number starting with 6-9 and remaing 9 digit with 0-9" required><br><br>
            <b>Event Id</b><input placeholder=" enter event id" id="event" type="text" style="font-size: 16pt" name="eventid" required><br><br>
            <b>Role</b><input placeholder=" enter role" id="role" type="text" style="font-size: 16pt" name="role" required><br><br>
            <a href="main.php"><input type="button" class="button"  value="BACK"></a>&nbsp;&nbsp;
            <a href="main.php"s><input type="button" class="button" value="NEXT"></a>
            <input type="submit" class="button" value="SUBMIT">
            
            
             
            </form> 
            <script>
            function myFunction() {
               alert("registration successfull!");
               }
           </script>
           
           
        </body>
    </center>    
    </head>
</html>