<?php
include("session.php");
include("connection.php");
if(isset($_GET['id'])){
$id=$_GET['id'];
}
if(isset($_GET['nocv_id'])){
$nid=$_GET['nocv_id'];
}
if(isset($_GET['start_chat'])){
$sid=$_GET['start_chat'];
}
if(isset($_GET['chat'])){
$cid=$_GET['chat'];
}
$delete=mysqli_query($db,"delete from chat_post where id='$id'") or die(mysqli_error($db));
$deletes=mysqli_query($db,"delete from reply_post where uid='$id'") or die(mysqli_error($db));
$nocv_id=$_SESSION['nocv_id'];
header("location:start_a_chat.php?nocv_id=$nid&start_chat=$sid&chat=$cid#nocv3");
//header("location:index.php?delete_post='successful'");
//session_destroy();
?>

<?php mysqli_close($db); ?>