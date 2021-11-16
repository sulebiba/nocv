<?php
include("session.php");
if(isset($_SESSION['email'])){
if(isset($_GET['submit'])){
    $no=$_GET['name'];
}
}
 else{
     header("Location:index.php");
        //ob_end_flush();
}
?>
<form method="get" action="seriously.php">
<p><input type="text" name="name"></p>
 <p><input type="submit" name="submit"></p>   
</form>