<?php
ob_start();
include("connection.php");
include("session.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Videos</title>
<meta name="description" content="Contact Skilled and Talented Individuals in Nigeria. We offer Services like, Visual Art, Bag Making, Baking
Bead making, Carpentry, Tiling, Gardening, Graphics designing, Hair dressing & styling, Interior decoration, Make up, Manicure & Pedicure, Mobile application development, Photography, Real Estate, Shoemaking, Tailoring, Video Editing, Web development, wedding planning, Fashion designing, food services, Organic skincare Products, Data and Airtime services, Barbing, Soap making, Aluminium windows and doors services,Building services, Delivery services, Writing & poetry services, Digital Marketing, Music production, Land surveying, Disc Jockey, Crafting, Performing Arts, Henna design, Interior / Exterior painting design, lighting design and Home and industrial Cleaning services in Nigeria.  " />
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
<script data-ad-client="ca-pub-8960280560306628" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
<div id="logo2"><a class="navbar-brand" href="index.php"><img src="images/nocv.png"width="70" />
</a></div>
</div>
<div class="collapse navbar-collapse"id="navbar-collapse-main">
<ul class="nav navbar-nav navbar-right">
<li><a class="active" href="index.php">Home</a></li>
<li><a class="active" href="about.php">About</a></li>
<li><a class="active" href="skill.php">Skill / Talent </a></li>
<?php if(isset($_SESSION['nocv_id'])){
    $nocv_id=$_SESSION['nocv_id'];
echo"<li><a class='active' href='forum_members.php?nocv_id=$nocv_id'>My Members</a></li>";
}
    else{
        
    }
    ?>
<?php if(isset($_SESSION['nocv_id'])){
    $nocv_id=$_SESSION['nocv_id'];
    $chat=substr($nocv_id,-3,2);
echo"<li><a class='active' href='start_a_chat.php?nocv_id=$nocv_id&start_chat=$nocv_id&chat=$chat'>My Forum</a></li>";
}
    else{
        
    }
    ?>
<li><a class="active" href="<?php if(isset($_SESSION['nocv_id'])){
    echo'profile.php';}else{echo 'register.php';
} ?>"><?php if(isset($_SESSION['nocv_id'])){ echo'Profile';}else{echo'Register';}?></a></li>
<li><a class="active" href="<?php if(isset($_SESSION['nocv_id'])){
    echo'log_out.php';}else{echo 'log_in.php';
} ?>"><?php if(isset($_SESSION['nocv_id'])){ echo'log out';}else{echo'log in';}?></a></li>
<?php if(isset($_SESSION['nocv_id'])){

}
else{
    echo"<li><a class='active' href='contact.php'>Contact</a></li>";
}
?>
<li><a class="active" href="videos.php">Videos</a></li>
<?php if(isset($_SESSION['nocv_id'])){

}
else{
echo"<li><a class='active' href='report.php'>Report</a></li>";
}
?>
</ul>
</div>
</div>
</nav>

<br>
<br>
<br>
    <br>
    <br>

<div class="landing-text">
<!--<h1>BOOTSTRAP</h1>
<H3>Learn the basic building blocks</H3>
<a href="#" class="btn btn-default btn-lg">Get Started</a>-->
</div>

<div class="padding">
<div class="container">
<div class="row">
<div class="">


<h2 align='center' id='lost'><font face='Algerian'>W.Y.S.I.W.Y.G</font></h2> 
<div id="box">
<?php
 if(isset($_GET['page'])){   
                $page=$_GET['page'];
                }
                else{
                    $page=1;
                }
                $num_per_page=20;
                $start_from = ($page-1)*20;
$select=mysqli_query($db,"SELECT * FROM uploads WHERE upload1 LIKE '%mp4%' ORDER BY rand() LIMIT $start_from,$num_per_page")or die (mysqli_error($db));
    
    
    
while($row=mysqli_fetch_array($select)){
    $nocv_id=$row['nocv_id'];
    $uploads=$row['upload1'];
$select20=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv_id' ORDER BY rand() LIMIT 0,1")or die (mysqli_error($db));

while($row20=mysqli_fetch_array($select20)){
    $state=$row20['state_of_residence'];

    
    
if(isset($_SESSION['nocv_id'])){
    
    echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
<a href='profile.php?nocv_id=$nocv_id'><video controls='controls'width='100%' height='240'>
   <source src='userspic/$uploads' type='video/mp4'>
   </video></a>  
  <div class='small'><a href='profile.php?nocv_id=$nocv_id'><font size='5' align='center'face='Algerian'>Location:$state</font></a><br>
  <a href='contact_user.php?nocv_id=$nocv_id'><h4 align='center'><div id='invite'>Contact me</div></h4></a> 
  </div> 
  
</div>";  
    

   
}
else{
    echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
<a href='search.php?nocv_id=$nocv_id'><video controls='controls'width='100%' height='240'>
   <source src='userspic/$uploads' type='video/mp4'>
   </video></a>  
  <div class='small'><a href='search.php?nocv_id=$nocv_id'><font size='5' align='center'face='Algerian'>Location:$state</font></a><br>
  <a href='contact_user.php?nocv_id=$nocv_id'><h4 align='center'><div id='invite'>Contact me</div></h4></a> 
  </div> 
</div>";

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
        $q=mysqli_query($db,"SELECT * FROM uploads WHERE upload1 LIKE '%mp4%'");
        $total_q=mysqli_num_rows($q);
        $total_page=ceil($total_q/$num_per_page);
        
        if($page>1){
            
          echo"<a href='videos.php?page=".($page-1)."' class='btn btn-primary'>previous</a>";   
        }
        
        for($i=1;$i<$total_page;$i++){
          //echo"<a href='videos.php?page=".$i."' class='btn btn-primary'>$i</a>";   
        }
        
        
        if($i>$page){
            
          echo"<a href='videos.php?page=".($page+1)."' class='btn btn-danger'>next</a>";   
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
<!--<h4>Advertisement</h4>
<h4>08126681561</h4> -->
</div>
<div class="col-sm-4">
    <br>
    <!--<a href="https://api.whatsapp.com/send?phone=2348126681561&text=chat%20with%20Owner"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
<h4><a href="https://api.whatsapp.com/send?phone=2348126681561&text=chat%20with%20Owner">08126681561</a></h4> -->

<a href="https://www.instagram.com/nocvng/"><i class="fa fa-instagram"></i></a>
<a href="https://www.facebook.com/Nocv.ng/"><i class="fa fa-facebook"></i></a>




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