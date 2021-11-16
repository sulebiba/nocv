<?php
ob_start();
include("connection.php");
include("session.php");
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Forum Members</title>
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
    
#invite:hover{
    border: 1px solid green;
    width: 100%;
    background:black;
    color: white;

}  
#move{
      
        margin-left: 150px;
        margin-top: -33px;
        border: 1px solid red;
        widows: 100%;
        
        border-radius: 5px;
        
    }
    #move a{
        color: white;
        text-decoration: none;
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
if(isset($_GET['nocv_id'])){
    $nocv_id=$_GET['nocv_id'];

$select=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv_id'")or die(mysqli_error($db));
while($row=mysqli_fetch_array($select)){
$skill=$row['skill'];
$select=mysqli_query($db,"SELECT * FROM skills WHERE id='$skill'")or die(mysqli_error($db));
while($row=mysqli_fetch_array($select)){
$name=$row['name'];
echo"<h2 align='center'><font face='Algerian'>$name in Nigeria</font></h2>";
}
}
}
?>


<div id="box">
<?php
if(isset($_GET['forum_id'])){
    $forum_id=$_GET['forum_id'];
if(isset($_SESSION['nocv_id'])){
    $sendiv=$_SESSION['nocv_id'];
    $chats=substr($sendiv,-3,2);

if(isset($_GET['nocv_id'])){
    $nocv_id=$_GET['nocv_id'];
}
$select=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv_id'ORDER BY rand() LIMIT 0,200")or die(mysqli_error($db));
while($row=mysqli_fetch_array($select)){
$skill=$row['skill'];
$select2=mysqli_query($db,"SELECT * FROM users WHERE skill='$skill' AND nocv_id='$forum_id' ORDER BY rand() LIMIT 0,200")or die(mysqli_error($db));
while($row2=mysqli_fetch_array($select2)){
$profile=$row2['profile_picture'];
$name=$row2['Fullname'];
$nocv_id=$row2['nocv_id'];
$nunu=$row2['state_of_residence'];
$chatsas=substr($nocv_id,-3,2);
    
if($nocv_id!==$sendiv){
    
echo "<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>

<img src='users/$profile' class='img-res' height='300px'> 
  <div class='small'><font size='2'align='center'><b>$name</b><br><b>$nunu State</b>
  
  
  
  </font>
  <br><a href='search_forum.php?nocvi_id=$nocv_id&start_chat=$sendiv&chat=$chats'><h4 align='left'><div class='btn btn-primary'>Send an Invite</div></h4></a></div> 
  
  <p id ='move' class='btn btn-danger' ><a href='join_forum_chat.php?nocv_id=$nocv_id&start_chat=$nocv_id&chat=$chatsas'>Visit Forum</a></p>
  
</div>";
   
   
    
}
else{
    echo "<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>

<img src='users/$profile' class='img-res' height='300px'>
  <div class='small'><font size='2'align='center'><b>$name</b></font>
  </div>  
</div>";
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
    $nocv=$_POST['nocv'];
    
    $select=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv'")or die(mysqli_error($db));
    if(mysqli_num_rows($select)>0){
    if(isset($_SESSION['nocv_id'])){
        //echo"<script>window.open('profile.php?nocv_id=$nocv','self')</script>";
        header("location:search_forum.php?forum_id=$nocv");
        ob_end_flush();
    }
       
    else{
        //echo"<script>window.open('search.php?nocv_id=$nocv','self')</script>";
         header("location:search_forum.php?forum_id=$nocv");
         ob_end_flush();
    }
    
    }
    else{
        echo"<script>alert('user does not exist')</script>";
        
    }
}

?>









<?php
if(isset($_SESSION['nocv_id'])){
  $way=$_SESSION['nocv_id'];  

if(isset($_GET['nocvi_id'])){
    $invite=$_GET['nocvi_id'];

if(isset($_GET['start_chat'])){
    $invite_s=$_GET['start_chat'];
}
if(isset($_GET['chat'])){
    $invite_c=$_GET['chat'];
}
$date=date('Y-m-d h:i:s');
$selectcheck=mysqli_query($db,"SELECT * FROM invites WHERE nocv_id='$invite'") or die (mysqli_error($db));
if(mysqli_num_rows($selectcheck)>499){
 echo"<script>alert('This persons inbox is full. Please try another person')</script>";   
}
else{
$insert_invite=mysqli_query($db,"INSERT INTO invites (nocv_id,start_chat,chat,date) VALUES ('$invite','$invite_s','$invite_c','$date')") or die(mysqli_error($db));

$select_tbom=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$invite'") or die (mysqli_error($db));
while($row_tbom=mysqli_fetch_array($select_tbom)){
    $email_tbom=$row_tbom['email'];
}
        $from2="nocv.ng@nocv.ng";
        $to2=$email_tbom;

        $subject2="Nocv.ng Forum invite";
        $message2="Good day,You have been sent an invite to a Forum on nocv.ng. Participating in Forums help you collaborate on Jobs and increases your chances of getting Customers.\r \n Please log in to https://nocv.ng/log_in.php to accept the invite.Thanks and God bless.";

        $headers2="From:".$from2;
        mail($to2,$subject2,$message2,$headers2);

header("Location:search_forum.php?forum_id=$invite");
ob_end_flush();
//header("Location:forum_members.php?nocv_id=$way");
//ob_end_flush();
}
}
}
?>




<?php mysqli_close($db); ?>