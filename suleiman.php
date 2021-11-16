<?php
include("session.php");
include("connection.php");
if(isset($_SESSION['email'])){
if(isset($_GET['id'])){
    $del=$_GET['id'];
    $delete=mysqli_query($db,"DELETE FROM contact WHERE contact_id='$del'");
}
$select=mysqli_query($db,"SELECT * FROM contact");
while($row=mysqli_fetch_array($select)){
    $id=$row['contact_id'];
    $name=$row['fullname'];
    $message=$row['message'];
    $skill=$row['skill_to_add'];
    $skilld=$row['skill_description'];
    echo"<table border='1'><tr><th>Email</th><th>Message</th><th>Skill</th><th>Skill desc</th></tr>
    <tr><td>$name</td><td>$message</td><td>$skill</td><td>$skilld</td></tr></table><a href='suleiman.php?id=$id'>delete</a>";
}
}
else{
     header("Location:index.php");
        //ob_end_flush();
}
?>


<?php mysqli_close($db); ?>