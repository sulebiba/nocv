<?php
include("session.php");
$conn = new mysqli("localhost","root","","nocv");
if($conn->connect_error){
  die("Failed to connect!".$conn->connect_error);  
}
if(isset($_POST['query'])){
    $inpText=$_POST['query'];
    $query="SELECT * FROM users WHERE nocv_id LIKE '%$inpText%' ORDER BY rand() LIMIT 0,10";
    $result=$conn->query($query);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
           
                    $nocvid=$row['nocv_id'];
                    $fname=$row['Fullname'];
                    $skill=$row['skill'];
            
    $queryt="SELECT * FROM skills WHERE id = '$skill' LIMIT 0,10";
          $resultt=$conn->query($queryt);
    
        while($rowt=$resultt->fetch_assoc()){
           
                    $namess=$rowt['name'];   
        }
            if(isset($_SESSION['nocv_id'])){
            echo"<a href='profile.php?nocv_id=$nocvid' class='list-group-item list-group-item-action border-1'>".$nocvid. '<br><p align="right">'. $fname."</p><p align='right'>$namess</p></a>";
            }
            else{
             echo"<a href='search.php?nocv_id=$nocvid' class='list-group-item list-group-item-action border-1'>".$nocvid. '<br><p align="right">'. $fname."</p><p align='right'>$namess</p></a>";   
            }
        
        }
    }
    else{
        echo "<p class='list-group-item border-1'>Nothing Like That</p>";
    }
}
    

?>