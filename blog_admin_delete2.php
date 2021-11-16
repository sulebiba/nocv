<?php

ob_start();
include('connection.php');
include("session.php");
date_default_timezone_set('Africa/Lagos');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="images/nocv.jpg" rel="icon">
    <title>Delete news</title>
 <link rel="stylesheet" href="table.css">
</head>
<body>
        <h2 align='center'>Delete content</h2>
    <a href="blog_admin_delete.php">Delete News</a>
    <div style="overflow-x:auto;">
            <table border="2"class="content-table">
                <thead>
               <tr>
                   <th>Headline</th><th>Post</th>
            </tr> 
            </thead>
            <?php
           
            $select=mysqli_query($db,"SELECT * FROM blog_contents ORDER BY 1 DESC");
            while($row=mysqli_fetch_array($select)){
               
                $headline=$row['headline'];
                
                
                
                $id=$row['id'];
                $post=$row['post'];

                echo"<tbody><tr>
                <th>$headline</th><th>$post</th><th><a href='delete5.php?id=$id'>delete</a></th>
                
         </tr> </tbody></span>";
            }
           
            
            
           
            ?>
</table>
        
    </div>    
        
                
            
        
    
</body>
</html>
<?php
if(!isset($_SESSION['email'])){
    header("Location:index.php");
}
?>