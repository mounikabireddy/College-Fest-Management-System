<html>
<head></head>
<center><body>
    <h1> co-ordinators details</h1>
    <?php
$conn = new PDO("mysql:host=localhost;dbname=fest",'root','');
$sql="CALL ListC()";
$result = $conn->prepare($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
$result->execute();
while($values= $result->fetch())
{
print"<prep>";
print_r($values);
}
?> 
    </body>
    </center>

</html>