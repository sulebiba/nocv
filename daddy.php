<?php
include("session.php");
include("connection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Customers</title>
<meta name="viewport"content="width-device-width,initial-scale=1" />
<link href="images/nocv.jpg" rel="icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="stylo.css"rel="stylesheet" />
<?php
if(isset($_SESSION['email'])){
if(isset($_GET['page'])){   
                $page=$_GET['page'];
                }
                else{
                    $page=1;
                }
                $num_per_page=100;
                $start_from = ($page-1)*100;
$select=mysqli_query($db,"SELECT * FROM contactuser ORDER BY 1 DESC LIMIT $start_from,$num_per_page");
while($row=mysqli_fetch_array($select)){
    //$id=$row['contact_id'];
    $name=$row['phone'];
    $message=$row['message'];
    $skill=$row['date'];
    $skilld=$row['nocv_id'];
    echo"<table border='1'><tr><th>Phone</th><th>Message</th><th>date</th><th>nocv id</th></tr>
    <tr><td>$name</td><td>$message</td><td>$skill</td><td>$skilld</td></tr></table>";
}
}
    else{
     header("Location:index.php");
        //ob_end_flush();
}
?>

<div class="row mx-0">
        <div class="col-12 text-center pb-4 pt-4">
  <?php
        $q=mysqli_query($db,"SELECT * FROM contactuser");
        $total_q=mysqli_num_rows($q);
        $total_page=ceil($total_q/$num_per_page);
        
        if($page>1){
            
          echo"<a href='daddy.php?page=".($page-1)."' class='btn btn-danger'>previous</a>";   
        }
        
        for($i=1;$i<$total_page;$i++){
          echo"<a href='daddy.php?page=".$i."' class='btn btn-primary'>$i</a>";   
        }
        
        
        if($i>$page){
            
          echo"<a href='daddy.php?page=".($page+1)."' class='btn btn-danger'>next</a>";   
        }
        ?>
        
    </div>   
     </div>    

<?php mysqli_close($db); ?>