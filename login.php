

    
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
    
            body {font-family: Arial, Helvetica, sans-serif;}
/* Style all input fields */


/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 15px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "?"
;
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "?";
}       
</style>
        </head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <body style="background-image: linear-gradient(-45deg,orange,white)">
    

    
<div class="a">
    <br><br><br><br>
    <head><center><h3>Admin Login</h3></center></head>

</div>
    
    <center><img src="images/admin.jpg" width=60px ></center>
    
    
<div class="container">
  <form action="log.php" method="POST">
      <br><br>
      <center><b><label for="Email">Email-ID</label></b></center><br>
      <center><input type="email" id="Email" name="Email" required placeholder="Enter your Email-ID" style="font-size: 16pt"></center><br>

      <center><b> <label for="psw">Password</label></b></center><br>
      <center><input type="Password" id="Password" name="Password" placeholder="Enter your Password" style="font-size: 16pt" required></center><br><br>
    
      <center><input type="submit" class="button" value="Submit"></center>
      
      
  </form>
</div>

<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
				

    <p><b><center>GO BACK <a href="main.php">HOME</a></center></b></p>

</body>
</html>