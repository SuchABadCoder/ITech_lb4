<?php 
    session_start(); 
    if(isset($_GET["textVal"]))
    {
        $_SESSION["session"]=$_GET["textVal"];
        echo $_SESSION["session"];
    }
?><br>
<form action="index3.php">
        <button type="submit">Далее</button><br>
</form>