<?php
ob_start();
include("connection.php");
include("session.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
<?php
    if(isset($_GET['type'])){
    if(isset($_GET['state'])){
    $quotetype2=$_GET['type'];
    $quotestate2=$_GET['state'];
    $selectquote2=mysqli_query($db,"SELECT * FROM quote WHERE id='$quotetype2'");
    while($rowquote2=mysqli_fetch_array($selectquote2)){
    $quote2=$rowquote2['quote'];
    $quotephrase2=$rowquote2['quotephrase'];
   
         
        echo"<meta name= 'description' content='$quote2 $quotestate2<br> - $quotephrase2 $quotestate2'>";
    }
    }
    }
    ?>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
    
    if(isset($_GET['type'])){
    if(isset($_GET['state'])){   
    $typetitle=$_GET['type'];
    $namestate=$_GET['state'];
    $selecttitle=mysqli_query($db,"SELECT * FROM skills WHERE id='$typetitle'");
    while($rowtitle=mysqli_fetch_array($selecttitle)){
    $nametitle=$rowtitle['name'];
    echo"<title>$nametitle in $namestate</title>";   
    }
    }
    }
    
    ?>
<meta name="viewport"content="width-device-width,initial-scale=1" />
<link href="images/nocv.jpg" rel="icon">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style.css"rel="stylesheet" />
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

<div class="landing-text">
<!--<h1>BOOTSTRAP</h1>
<H3>Learn the basic building blocks</H3>
<a href="#" class="btn btn-default btn-lg">Get Started</a>-->
</div>

<div class="padding">
<div class="container">
<div class="row">
<div class="">

<?php
          $state=['Abia','Adamawa','Akwa-ibom','Anambra','Bauchi','Bayelsa','Benue','Borno','Cross-river','Delta','Ebonyi','Edo','Ekiti','Enugu','Gombe','Imo','Jigawa',
                 'Kaduna','Kano','Katsina','Kebbi','Kogi','Kwara','Lagos','Nasarawa','Niger','Ogun','Ondo','Osun','Oyo','Plateau','Rivers','Sokoto','Taraba',
                 'Yobe','Zamfara','Abuja'];
          sort($state);
    ?>
<form class="form-inline active-cyan-4" method="post">
 <!-- <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="e.g Lagos"
    aria-label="Search"name="nocv"> -->
    
     <div class="form-group">
    				  		    <span id="error4" class="error">*</span>
    				  		    <select class="form-control" id="state" name="nocv">
    				  		        <option value="state">Select a state</option>
                                    <?php
                                    for($i=0;$i<count($state);$i++){
                                    echo "<option value='$state[$i]'>$state[$i]</option>";
                                     }
                                    ?>
    				  		    </select>
    				  		</div>
    
    <button type="submit" class="fa fa-search" name="submit"></button>
    <?php
    if(isset($_GET['type'])){
    $type=$_GET['type'];
    
    $select=mysqli_query($db,"SELECT * FROM skills WHERE id='$type'");
    while($row=mysqli_fetch_array($select)){
    $name=$row['name'];
    echo"<h2 align='center' id='lost'>$name</h2>";   
    }
    }
    
    ?>

<?php
    if(isset($_GET['type'])){
    if(isset($_GET['state'])){
    $quotetype=$_GET['type'];
    $quotestate=$_GET['state'];
    $selectquote=mysqli_query($db,"SELECT * FROM quote WHERE id='$quotetype'");
    while($rowquote=mysqli_fetch_array($selectquote)){
    $quote=$rowquote['quote'];
    $quotephrase=$rowquote['quotephrase'];
   
        echo"<p align='center'>$quote $quotestate<br><b> - $quotephrase $quotestate</b></p>";  
    }
    }
    }
    ?>    
    
</form>
<div id="box">
<?php
if(isset($_GET['type'])){
$type=$_GET['type'];

if(isset($_GET['state'])){
$state=$_GET['state'];

$select=mysqli_query($db,"SELECT * FROM users WHERE skill='$type' AND state_of_residence= '$state' ORDER BY rand() LIMIT 0,100")or die (mysqli_error($db));
while($row=mysqli_fetch_array($select)){
    $state=$row['state_of_residence'];
    $skill=$row['skill'];
    $nocv_id=$row['nocv_id'];
$select20=mysqli_query($db,"SELECT * FROM uploads WHERE nocv_id='$nocv_id' ORDER BY rand() LIMIT 0,1")or die (mysqli_error($db));

while($row20=mysqli_fetch_array($select20)){
    $uploads=$row20['upload1'];
    $extention=explode('.',$uploads); 
    $end=end($extention);

    
    
 if(isset($_SESSION['nocv_id'])){
     if($end =='mp3'){ 
echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
<a href='profile.php?nocv_id=$nocv_id'><audio controls='controls'>
   <source src='userspic/$uploads' type='audio/mp3'>
   </audio></a>  
   <h3><B>Price: Highly Negotiable<B></h3>
  <div class='small'><a href='profile.php?nocv_id=$nocv_id'><font size='5' align='center'>Location:$state</font></a><br>
  
  <a href='contact_user.php?nocv_id=$nocv_id'><h4 align='center'><div id='invite'>Contact me</div></h4></a> 
  </div> 
  
</div>";
     }
else if($end =='mp4'){
    echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
<a href='profile.php?nocv_id=$nocv_id'><video controls='controls'width='100%' height='240'>
   <source src='userspic/$uploads' type='video/mp4'>
   </video></a>  
   <h3><B>Price: Highly Negotiable<B></h3>
  <div class='small'><a href='profile.php?nocv_id=$nocv_id'><font size='5' align='center'>Location:$state</font></a><br>
  <a href='contact_user.php?nocv_id=$nocv_id'><h4 align='center'><div id='invite'>Contact me</div></h4></a> 
  </div> 
  
</div>";
}
     else{
         echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
<a href='profile.php?nocv_id=$nocv_id'><img src='userspic/$uploads' class='img-res' height='300px'></a>  
<h3><B>Price: Highly Negotiable<B></h3>
  <div class='small'><a href='profile.php?nocv_id=$nocv_id'><font size='5' align='center'>Location:$state</font></a><br>
  
  <a href='contact_user.php?nocv_id=$nocv_id'><h4 align='center'><div id='invite'>Contact me</div></h4></a> 
  </div> 
  
</div>";
     }
}
else{
    if($end =='mp3'){ 
echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
<a href='search.php?nocv_id=$nocv_id'><audio controls='controls'>
   <source src='userspic/$uploads' type='audio/mp3'>
   </audio></a>  
   <h3><B>Price: Highly Negotiable<B></h3>
  <div class='small'><a href='search.php?nocv_id=$nocv_id'><font size='5' align='center'>Location:$state</font></a><br>
  
  <a href='contact_user.php?nocv_id=$nocv_id'><h4 align='center'><div id='invite'>Contact me</div></h4></a> 
  </div> 
  
</div>";        
}
else if($end =='mp4'){ 
    echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
<a href='search.php?nocv_id=$nocv_id'><video controls='controls'width='100%' height='240'>
   <source src='userspic/$uploads' type='video/mp4'>
   </video></a> 
   <h3><B>Price: Highly Negotiable<B></h3>
  <div class='small'><a href='search.php?nocv_id=$nocv_id'><font size='5' align='center'>Location:$state</font></a><br>
  
  <a href='contact_user.php?nocv_id=$nocv_id'><h4 align='center'><div id='invite'>Contact me</div></h4></a> 
  </div> 
  
</div>"; 
}
else{
    echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
<a href='search.php?nocv_id=$nocv_id'><img src='userspic/$uploads' class='img-res' height='300px'></a>  
<h3><B>Price: Highly Negotiable<B></h3>
  <div class='small'><a href='search.php?nocv_id=$nocv_id'><font size='5' align='center'>Location:$state</font></a><br>
  <a href='contact_user.php?nocv_id=$nocv_id'><h4 align='center'><div id='invite'>Contact me</div></h4></a> 
  </div> 
  
</div>";
    
}
}
       

    
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
<?php
if(isset($_POST['submit'])){
    $state=$_POST['nocv'];
    
    $select=mysqli_query($db,"SELECT * FROM users WHERE state_of_residence='$state' AND skill='$type'")or die(mysqli_error($db));
    if(mysqli_num_rows($select)>0){
    if(isset($_SESSION['nocv_id'])){
        //echo"<script>window.open('profile.php?nocv_id=$nocv','self')</script>";
        header("location:search_state.php?state=$state&type=$type");
        ob_end_flush();
    }
       
    else{
        //echo"<script>window.open('search.php?nocv_id=$nocv','self')</script>";
         header("location:search_state.php?state=$state&type=$type");
         ob_end_flush();
    }
    
    }
    else{
        echo"<script>alert('No Registered User in the State, Please Check back later')</script>";
        
    }
}

?>


<?php mysqli_close($db); ?>