<?php
error_reporting(E_ALL & ~E_NOTICE);
ob_start();
include("connection.php");
include("session.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Skill Types</title>
<meta name="viewport"content="width-device-width,initial-scale=1" />
<link href="images/nocv.jpg" rel="icon">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="stylo.css"rel="stylesheet" />
<style>
#invite{
    border: 1px solid black;
    width: 100%;
    background: black;

}
#invite:hover{
    border: 1px solid green;
    width: 100%;
    background:black;
    color: white;

}
#lost{
            border: 1px solid black;
            color: white;
            background: black;
            border-radius: 5px;
            
            
        }
</style>

</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"data-target="#navbar-collapse-main">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div id="logo2"><a class="navbar-brand" href="index.php"><img src="images/nocv.jpg"width="70" />
</a></div>
</div>
<div class="collapse navbar-collapse"id="navbar-collapse-main">
<ul class="nav navbar-nav navbar-right">

</ul>
</div>
</div>
</nav>


<div class="landing-text">
<!--<h1>BOOTSTRAP</h1>
<H3>Learn the basic building blocks</H3>
<a href="#" class="btn btn-default btn-lg">Get Started</a>-->
</div>

<div class="padding">
<div class="container">
<div class="row">
<div class="">


    
   
<div id="box">
<?php
if(isset($_GET['page'])){   
                $page=$_GET['page'];
                }
                else{
                    $page=1;
                }
                $num_per_page=100;
                $start_from = ($page-1)*100;    
    
$select=mysqli_query($db,"SELECT * FROM uploads ORDER BY 1 desc LIMIT $start_from,$num_per_page")or die (mysqli_error($db));
while($row=mysqli_fetch_array($select)){
    $nocv_id=$row['nocv_id'];
    $uploads=$row['upload1'];
    $extention=explode('.',$uploads); 
    $end=end($extention);
$select20=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv_id' LIMIT 0,100")or die (mysqli_error($db));
while($row20=mysqli_fetch_array($select20)){
    $skill=$row20['skill'];
$select21=mysqli_query($db,"SELECT * FROM skills WHERE id='$skill' LIMIT 0,100")or die (mysqli_error($db));
while($row21=mysqli_fetch_array($select21)){
    $name=$row21['name'];

    
    
if(isset($_SESSION['email'])){
    if($end =='mp3'){
        
echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
<audio controls='controls'>
   <source src='userspic/$uploads' type='audio/mp3'>
   </audio>  
  <a href='notseriously.php?name=$uploads'><div class='small'><font size='5' align='center'face='Algerian'>Section:$name</font></a><br>
  <a href='notseriously.php?name=$uploads'><h4 align='center'><div id='invite'>Delete</div></h4></a> 
  </div> 
  
</div>";        
    }
else if($end =='mp4'){
    
    echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
<video controls='controls'width='100%' height='240'>
   <source src='userspic/$uploads' type='video/mp4'>
   </video> 
   
  <a href='notseriously.php?name=$uploads'><div class='small'><font size='5' align='center'face='Algerian'>Section:$name</font></a><br>
  <a href='notseriously.php?name=$uploads'><h4 align='center'><div id='invite'>Delete</div></h4></a> 
  </div> 
  
</div>";  
    
}
    else{
        echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
<img src='userspic/$uploads' class='img-res' height='250px'>  
  <a href='notseriously.php?name=$uploads'><div class='small'><font size='5' align='center'face='Algerian'>Section:$name</font></a><br>
  <a href='notseriously.php?name=$uploads'><h4 align='center'><div id='invite'>Delete</div></h4></a> 
  </div> 
</div>";
        
    }
}
else{
     header("Location:index.php");
        //ob_end_flush();
}
       

    
}
}

}

?>




</div>


</div>
</div>
</div>
</div>
<div class="padding">
<div class="container">
<div class="row">
    
<div class="row mx-0">
        <div class="col-12 text-center pb-4 pt-4">
  <?php
        $q=mysqli_query($db,"SELECT * FROM uploads");
        $total_q=mysqli_num_rows($q);
        $total_page=ceil($total_q/$num_per_page);
        
        if($page>1){
            
          echo"<a href='notserious.php?page=".($page-1)."' class='btn btn-danger'>previous</a>";   
        }
        
        for($i=1;$i<$total_page;$i++){
          echo"<a href='notserious.php?page=".$i."' class='btn btn-primary'>$i</a>";   
        }
        
        
        if($i>$page){
            
          echo"<a href='notserious.php?page=".($page+1)."' class='btn btn-danger'>next</a>";   
        }
        ?>
        
    </div>   
     </div>        
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    
   
</div>
    
</div>
<div class="col-sm-6">

</div>
<div class="col-sm-6 text-center">

</div>
</div>
</div>

<div class="padding">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

</div>

</div>
</div>
</div>
<div class="padding">
<div class="container">
<div class="row">
<div class="col-sm-6">

    </div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

</div>
</div>
</div>
</div>

<footer class="container-fluid text-center">
<div class="row">
<div class="col-sm-4">
<br>
<h4>Advertisement</h4>
<h4>08126681561</h4>
</div>
<div class="col-sm-4">
    <br>
<a href="https://api.whatsapp.com/send?phone=2348126681561&text=chat%20with%20Owner"><i class="fa fa-whatsapp" aria-hidden="true"></i>
<h4><a href="https://api.whatsapp.com/send?phone=2348126681561&text=chat%20with%20Owner">08126681561</a></h4>
<a href="https://twitter.com/NocvNg"><i class="fa fa-twitter"></i></a>
<a href="https://www.instagram.com/nocvng/"><i class="fa fa-instagram"></i></a>
<a href="https://www.facebook.com/Nocv.ng/"><i class="fa fa-facebook"></i></a>



    </a>
</div>

<div class="col-sm-4">

</div>

</div>
    <h4>Copyright &copy; 2019</h4>
    <h4><a class="active" href="disclaimer.php">About Privacy Policy Disclaimer</a></h4>
</footer>
</body>
</html>



<?php mysqli_close($db); ?>