<?php
include("session.php");
include("connection.php");
if(isset($_GET['id'])){
$id=$_GET['id'];
}
$delete=mysqli_query($db,"delete from replied where id='$id'") or die(mysqli_error($db));
$nocv_id=$_SESSION['nocv_id'];
header("location:replied.php?nocv_id=$nocv_id");
//header("location:index.php?delete_post='successful'");
//session_destroy();
?>


<?php mysqli_close($db); ?>