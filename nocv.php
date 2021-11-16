<?php
include("session.php");
include("connection.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>NoCv</title>
<meta name="viewport"content="width-device-width,initial-scale=1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style.css"rel="stylesheet" />
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
<li><a class="active" href="index.php">Home</a></li>
<li><a class="active" href="about.php">About</a></li>
<li><a class="active" href="skill.php">Skills</a></li>
<?php if(isset($_SESSION['nocv_id'])){
    $nocv_id=$_SESSION['nocv_id'];
echo"<li><a class='active' href='forum_members.php?nocv_id=$nocv_id'>My Forum</a></li>";
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
<li><a class="active" href="contact.php">Contact</a></li>
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
<div class="col-sm-3">

<br>
<?php
if(isset($_SESSION['email'])){
$select=mysqli_query($db,"SELECT * FROM users") or die(mysqli_error($db)); 
$select2=mysqli_query($db,"SELECT * FROM uploads") or die(mysqli_error($db));
$select3=mysqli_query($db,"SELECT * FROM post") or die(mysqli_error($db));
$select4=mysqli_query($db,"SELECT * FROM contact") or die(mysqli_error($db));
$select5=mysqli_query($db,"SELECT * FROM contactuser") or die(mysqli_error($db));
$select6=mysqli_query($db,"SELECT * FROM invites") or die(mysqli_error($db));
$select7=mysqli_query($db,"SELECT * FROM chat") or die(mysqli_error($db));
$select8=mysqli_query($db,"SELECT * FROM chat_post") or die(mysqli_error($db));
$select9=mysqli_query($db,"SELECT * FROM customeremail") or die(mysqli_error($db));
$select10=mysqli_query($db,"SELECT * FROM report") or die(mysqli_error($db));
$select11=mysqli_query($db,"SELECT * FROM announcement") or die(mysqli_error($db)); 
}
else{
     header("Location:index.php");
        //ob_end_flush();
}
?>
<h4>No of users:<?php echo mysqli_num_rows($select); ?></h4>
<br>
<h4>No of uploads:<?php echo mysqli_num_rows($select2); ?></h4>
<br>
<h4>No of posts:<?php echo mysqli_num_rows($select3); ?></h4>
<br>
<h4>No of messages for me:<?php echo mysqli_num_rows($select4); ?></h4>
<br>
<h4>No of contactusers:<?php echo mysqli_num_rows($select5); ?></h4>
<br>
<h4>No of invites:<?php echo mysqli_num_rows($select6); ?></h4>
<br>
<h4>No of invites_post:<?php echo mysqli_num_rows($select7); ?></h4>
<br>
<h4>No of invites_comment:<?php echo mysqli_num_rows($select8); ?></h4>
<br>
<h4>No of announcement:<?php echo mysqli_num_rows($select11); ?></h4>
<br>
<h4>No of Emails:<?php echo mysqli_num_rows($select9); ?></h4>
<br>
<h4>No of Reports:<?php echo mysqli_num_rows($select10); ?></h4>
</div>
<div class="col-sm-6 text-center">

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
<!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<h4>And less</h4>
<p>dddddddddddddddddddddddddd
ddddddddddddddddddddddddddddd
ddddddddddddddddddddddddddddd
ddddddddddddddddddddddddddddd
ddddddddddddddddddddddddddddd</p>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<img src="images/9.jpg" class="img-responsive" />
</div>-->
<!--</div>
</div>-->
<!--<div id="fixed">
</div>

<div class="padding">
<div class="container">
<div class="row">
<div class="col-sm-6">
<h4>Hello dear.</h4>
<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
</div>
<div class="col-sm-6">
<img src="images/12.jpg" />
</div>

</div>-->


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



    </a>
</div>

<div class="col-sm-4">

</div>

</div>
    <h4>Copyright &copy; 2019</h4>
</footer>
</body>
</html>


<?php mysqli_close($db); ?>