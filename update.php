<html>
<head>
    <style>


.button {
  background-color:tan;
  border:none;
  color: white;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  opacity: 0.6;
    transition: 0.3s;
         }
 .button{
            border-radius: 35px;
            cursor:pointer;
            transition: 0.3s;
        }
    .button:hover{opacity: 1}
        h1{
            
         text-shadow: 0 0 10px orange, 0 0 20px green
    }
        }
</style>
 
<title>update</title>
     <center> <body style="background-image: linear-gradient(-45deg,orange,white)" ><br><br><br>
       <h1>UPDATING MAX NUMBER OF PARTICIPANTS</h1>
         <form action="upd.php" method="POST">
         <b>Enter event id</b><input type="text" placeholder="enter the event id" style="font-size: 16pt" name="eventid"><br><br>
             <b>Enter no of participants</b><input type="text" placeholder="enter the no of participants" style="font-size: 16pt" name="Noofparticipants"><br><br>
         <input type="submit" class="button" value="UPDATE">
         
         
        

         </form> 
        
    
              
        
            

           
        </body>
 </center>
    </head>
</html>