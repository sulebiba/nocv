<?php
include("connection.php");
if(isset($_GET['name'])){
    $nocv_id2=$_GET['name'];
    $selectfile=mysqli_query($db,"SELECT * FROM uploads WHERE upload1='$nocv_id2'");
  while($rowfile=mysqli_fetch_array($selectfile)){
     $uppy=$rowfile['upload1']; 
  }
}
$select2=mysqli_query($db,"DELETE FROM uploads WHERE upload1='$nocv_id2'")or die(mysqli_error($db));
$select6=mysqli_query($db,"DELETE FROM post WHERE upload1='$nocv_id2'")or die(mysqli_error($db));
$path="userspic/$uppy";
   unlink($path);
header("Location:serious.php");
?>

<?php mysqli_close($db); ?>