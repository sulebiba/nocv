<?php
ob_start();
include("connection.php");
include("session.php");
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Available Forum(s)</title>
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
 #searc{
        width: 100%;
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
         u{
        color: blue;
    }
    .small{
        border: 1px solid black;
        width: 100%;
        height: 350px;
        background: black;
       
    }
    #white{
        color: white;
        margin-left: 10px;
        
    }
     #move{
      
        margin-left: 150px;
        
        widows: 100%;
        
        border-radius: 5px;
        
    }
    #move a{
        color: white;
        text-decoration: none;
    }
    #red{
        color:skyblue;
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

<div id="box">
<?php
if(isset($_SESSION['nocv_id'])){
    $sendiv=$_SESSION['nocv_id'];
    //$chats=substr($sendiv,-3,2);

if(isset($_GET['nocv_id'])){
    $nocv_id=$_GET['nocv_id'];
}
$select=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv_id'")or die(mysqli_error($db));
while($row=mysqli_fetch_array($select)){
$skill=$row['skill'];
$select2=mysqli_query($db,"SELECT * FROM users WHERE skill='$skill' ORDER BY rand() LIMIT 0,200")or die(mysqli_error($db));
while($row2=mysqli_fetch_array($select2)){
//$profile=$row2['profile_picture'];
//$name=$row2['Fullname'];
$nocv_id=$row2['nocv_id'];
//$nunu=$row2['state_of_residence'];
$selectu=mysqli_query($db,"SELECT * FROM topic WHERE nocv_id='$nocv_id' AND start_chat='$nocv_id' ORDER BY rand()")or die(mysqli_error($db));
while($row2u=mysqli_fetch_array($selectu)){
$comment=$row2u['topic'];
$cumment=$row2u['nocv_id'];
$comments=substr($comment, 0, 500);
$comments_nocvid=$row2u['nocv_id']; 
$comments_startid=$row2u['start_chat']; 
$comments_chats=substr($comments_nocvid,-3,2);
$selectcount=mysqli_query($db,"SELECT * FROM topic WHERE start_chat='$comments_nocvid'");
$selectcuunt=mysqli_query($db,"SELECT * FROM invites WHERE start_chat='$cumment'");
$regina=mysqli_num_rows($selectcount);
$rugina=mysqli_num_rows($selectcuunt) + 1;
if($nocv_id!==$sendiv){
 

       echo "<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>


  <div class='small'><font size='2'align='center'><b id='white'>$comments</b></font><br><br><p id='red'><b>Total Primary Comments: $regina</b><br><p id='red'><b>No of members: $rugina</b></p>
  </div>  
  <p id ='move' align='center'class='btn btn-info'><a href='join_forum_chat.php?nocv_id=$comments_nocvid&start_chat=$comments_startid&chat=$comments_chats'>Visit this Forum</a></p>
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
if(!isset($_SESSION['nocv_id'])){
    header("Location:index.php");
}
?>

<?php mysqli_close($db); ?>