<?php
$conn = new mysqli("localhost","root","","nocv");
if($conn->connect_error){
  die("Failed to connect!".$conn->connect_error);  
}
if(isset($_POST['query'])){
    $inpText=$_POST['query'];
    $query="SELECT * FROM blog_title WHERE headline LIKE '%$inpText%'";
    $result=$conn->query($query);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
           
                    $headline=$row['headline'];
                    $token=$row['token'];
                    $date=$row['date'];
            echo"<a href='blog_single.php?date=$date&headline=$headline&token=$token' class='list-group-item list-group-item-action border-1'>".$row['headline']."</a>";
        }
    }
    else{
        echo "<p class='list-group-item border-1'>No section</p>";
    }
}
    

?>