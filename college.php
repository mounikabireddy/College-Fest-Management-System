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
    <title>COLLEGE DETAILS</title>
    <center>
        <body style="background-image:url(images/hogwarts.jpg);background-size:cover">
            <br><br><br>
            <h1>COLLEGE DETAILS</h1>
        <br><br>

    
        <form action="col.php" method="POST">
        
     
            <b> College Name : </b>
                           <select onclick="solo()" id="s1"  name="colname" placeholder="Select option" style="font-size: 12pt" required >
           <option value="BIT" >BANGALORE INSTITUTE OF TECHNOLOGY</option>
           <option value="BMS">B.M.S INSTITUTE OF TECHNOLOGY </option>
           <option value="PES">P.E.S UNIVERSITY</option>
           <option value="RV">R.V INSTITUTE OF TECHNOLOGY</option>
           <option value="MSRIT">M.S RAMAIAH INSTITUTE OF TECHNOLOGY</option>
           <option value="SJBIT">S.J.B INSTITUTE OF TECHNOLOGY</option>
           <option value="SIT">SIDAGANGA INSTIUTE OF TECHNOLOGY</option>
           <option value="DSU">DAYANAND INSTITUTE OF TECHNOLOGY</option>
                             </select><br><br><br>
            
            <b>Collegeid : </b> <input  id="t1" type="text"  placeholder="Id of your College" name="collid" style="font-size: 16pt" required><br><br><br> 
            <b>Contact No</b><input type="text" name="contact" pattern="[6-9]{1}[0-9]{9}" 
       title="Phone number starting with 6-9 and remaining 9 digit with 0-9" style="font-size: 16pt" required><br><br>
            <b>Address</b><input placeholder=" enter address" id="dept" type="text" style="font-size: 16pt" name="address" style="font-size: 16pt" required><br><br>
            <a href="regis.php"><input type="button" class="button" value="NEXT"></a>&nbsp;&nbsp;
            <a href="main.php"><input type="button" class="button" value="BACK"></a>
            <input type="submit" class="button" value="SUBMIT">
            </form> 
            <script>
            function myFunction() {
               alert("students details entered successfully!");
               }
           </script>
            <script type="text/javascript" src="collegejs.js"></script>
           
           
        </body>
    </center>    
    </head>
</html>
