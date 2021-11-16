<?php
include("connection.php");
if(isset($_GET['name'])){
    $nocv_id2=$_GET['name'];
}
$select2=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv_id2'")or die(mysqli_error($db));
while($row=mysqli_fetch_array($select2)){
    //$id=$row['contact_id'];
    $name=$row['Fullname'];
    $message=$row['skill'];
    $skill=$row['phone_no'];
    $skilld=$row['nocv_id'];
    echo"<table border='1'><tr><th>Fullname</th><th>Skill</th><th>phone no</th><th>nocv id</th></tr>
    <tr><td>$name</td><td>$message</td><td>$skill</td><td>$skilld</td></tr></table>";
}

?>

<?php mysqli_close($db); ?>