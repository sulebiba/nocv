<?php
include("session.php");
$conn = new mysqli("localhost","root","","nocv");
if($conn->connect_error){
  die("Failed to connect!".$conn->connect_error);  
}
if(isset($_POST['query'])){
    $inpText=$_POST['query'];
    $query="SELECT * FROM users WHERE nocv_id LIKE '%$inpText%' ORDER BY rand() LIMIT 0,5";
    
    $result=$conn->query($query);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
           
                    $nocv_id=$row['nocv_id'];
                    //$id=$row['id'];
            if(isset($_SESSION['nocv_id'])){
            echo"<a href='search_announcement.php?forum_id=$nocv_id' class='list-group-item list-group-item-action border-1'>".$nocv_id."</a>";
        }
        else{
            echo"<a href='search_announcement.php?forum_id=$nocv_id' class='list-group-item list-group-item-action border-1'>".$nocv_id."</a>";
        }
        }
    }
    else{
        echo "<p class='list-group-item border-1'>Nothing Like that</p>";
    }
}
    

?>

