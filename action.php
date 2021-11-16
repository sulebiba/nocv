<?php
$conn = new mysqli("localhost","root","","nocv");
if($conn->connect_error){
  die("Failed to connect!".$conn->connect_error);  
}
if(isset($_POST['query'])){
    $inpText=$_POST['query'];
    $query="SELECT * FROM skills WHERE name LIKE '%$inpText%'";
    $result=$conn->query($query);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
           
                    $name=$row['name'];
                    $id=$row['id'];
            echo"<a href='skill_type.php?name=$name&type=$id' class='list-group-item list-group-item-action border-1'>".$row['name']."</a>";
        }
    }
    else{
        echo "<p class='list-group-item border-1'>No section</p>";
    }
}
    

?>