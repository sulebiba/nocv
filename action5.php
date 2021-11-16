<?php
include("session.php");
$conn = new mysqli("localhost","root","","nocv");
if($conn->connect_error){
  die("Failed to connect!".$conn->connect_error);  
}
if(isset($_SESSION['nocv_id'])){
    $noc=$_SESSION['nocv_id'];
if(isset($_POST['query'])){
    $inpText=$_POST['query'];
    $selector=mysqli_query($conn,"SELECT * FROM users WHERE nocv_id='$noc'");
    while($rowc=mysqli_fetch_array($selector)){
      $skill=$rowc['skill'];  
    }
    $query="SELECT * FROM announcement WHERE comment LIKE '%$inpText%' and skill='$skill' ORDER BY rand() LIMIT 0,5";
    
    $result=$conn->query($query);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
           
                    $nocv_id=$row['nocv_id'];
                    $comment=$row['comment'];
                    $status=$row['status'];
                    $chat=substr($nocv_id,-3,2);
                    //$id=$row['id'];
            if(isset($_SESSION['nocv_id'])){
            echo"<a href='general.php?nocv_id=$nocv_id&start_chat=$nocv_id&chat=$chat&comment=$comment&status=$status' class='list-group-item list-group-item-action border-1'>".$comment."</a>";
        }
        else{
            echo"<a href='general.php?nocv_id=$nocv_id&start_chat=$nocv_id&chat=$chat&comment=$comment&status=$status' class='list-group-item list-group-item-action border-1'>".$comment."</a>";
        }
        }
    }
    else{
        echo "<p class='list-group-item border-1'>Nothing Like that</p>";
    }
}
    
}
?>

