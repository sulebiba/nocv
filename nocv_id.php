<?php
error_reporting(E_ALL & ~E_NOTICE);
include("connection.php");
include("session.php");
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Profile</title>
<meta name="viewport"content="width-device-width,initial-scale=1" />
<link href="images/nocv.jpg" rel="icon">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="stylo.css"rel="stylesheet" />

<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5e57e8770ce7f10012241f02&product=inline-share-buttons&cms=website' async='async'></script>



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
<div class="col-sm-3">
 <div id="left">
  <div id="leftpic"> 
<?php
    if(isset($_GET['nocv_id'])){
        $nocv_id=$_GET['nocv_id'];
       
    }
    else if(isset($_SESSION['nocv_id'])){
         $nocv_id=$_SESSION['nocv_id'];
         
    }
    else{
        
        exit();
    }
     if(isset($_SESSION['nocv_id'])){
    $nocv_id2=$_SESSION['nocv_id'];
    }
    $select=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv_id'")or die(mysqli_error($db)); 
    while($result=mysqli_fetch_array($select)){
    $user_id=$result['user_id'];
    $Fullname=$result['Fullname'];
    $skill=$result['skill'];
    $Profile=$result['profile_picture'];
    $nocv_id=$result['nocv_id'];
    $select_skill=mysqli_query($db,"SELECT * FROM skills WHERE id = $skill")or die(mysqli_error($db));
    while($result_skill=mysqli_fetch_array($select_skill)){
    $skill_id=$result_skill['id'];
    $name=$result_skill['name'];
    
        
    
    }
    }
?>
   <img src="users/<?php echo $Profile; ?>"width="100%"height="410px"> 
    </div>
     <br>
     <br>
     <table class="col-sm-3 text-center">
    
     <tr>
         <th class="col-sm-3 text-center"><b id="greeen">FullName:</b></th><th class="col-sm-3"><?php echo $Fullname; ?></th>
     </tr>
    <tr>
         <th class="col-sm-3 text-center"><b id="greeen"><br><br>Skill:</b></th><th class="col-sm-3"><br><br><?php echo $name; ?></th>
     </tr>
    <tr>
        <?php
        echo"
         <th class='col-sm-3 text-center'><b id='greeen'><br><br>NOCV ID:</b></th><th class='col-sm-3'><br><br>$nocv_id</th>";
         
          
        ?>
     </tr>
    <tr>
        
     </tr>
    <tr>
        <?php 
        if(isset($_SESSION['nocv_id'])){
        if($nocv_id==$nocv_id2){
        $raw=mysqli_query($db,"SELECT * FROM invites WHERE nocv_id='$nocv_id'")or die(mysqli_error($db));
        $select=mysqli_query($db,"SELECT * FROM contactuser WHERE nocv_id='$nocv_id'")or die(mysqli_error($db));
        $number=mysqli_num_rows($select);
        $numberz=mysqli_num_rows($raw);
        
        $get=$_GET['nocv_id'];
        echo "<tr><th class='col-sm-3 text-center'><b id='greeen'><br><br></b></th><th class='col-sm-3'><br><br><a href='contact_user.php?nocv_id=$get' class='btn btn-primary glyphicon glyphicon-envelope'>SendMessage</a></th>";
        echo"<div class='sharethis-inline-share-buttons'></div>";
         
      
}
else{
            $get=$_GET['nocv_id'];
            echo "<tr><th class='col-sm-3 text-center'><b id='greeen'><br><br></b></th><th class='col-sm-3'><br><br><a href='contact_user.php?nocv_id=$get' class='btn btn-primary glyphicon glyphicon-envelope'>SendMessage</a></th>";
              echo"<div class='sharethis-inline-share-buttons'></div>";
        }
}
        else{
            $get=$_GET['nocv_id'];
            echo "<tr><th class='col-sm-3 text-center'><b id='greeen'><br><br></b></th><th class='col-sm-3'><br><br><a href='contact_user.php?nocv_id=$get' class='btn btn-primary glyphicon glyphicon-envelope'>SendMessage</a></th>";
              echo"<div class='sharethis-inline-share-buttons'></div>";
        }
        ?>
     </tr>
   
              
     </table>
     <br>
     <br>
    
     
</div>   


</div>
<div id="box">
<?php
if(isset($_GET['nocv_id'])){
    $nocv_id2=$_GET['nocv_id'];
}
else if(isset($_SESSION['nocv_id'])){
    $nocv_id=$_SESSION['nocv_id'];
}
$select=mysqli_query($db,"SELECT * FROM uploads WHERE nocv_id='$nocv_id' ORDER BY 1 DESC LIMIT 0,100")or die(mysqli_error($db));

while($row=mysqli_fetch_array($select)){
    $id=$row['upload_id'];
    $upload1=$row['upload1'];
    $extention=explode('.',$upload1); 
    $end=end($extention);
$select_post=mysqli_query($db,"SELECT * FROM post WHERE upload1='$upload1'")or die(mysqli_error($db));
 $number=mysqli_num_rows($select_post);   
    if($nocv_id==$nocv_id2){
    if($end =='mp3'){
echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
   <audio controls='controls'>
   <source src='userspic/$upload1' type='audio/mp3'>
   </audio>
  <hr>
</div>
";         
}
else if($end=='mp4'){
    echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
   <video controls='controls'width='100%' height='240'>
   <source src='userspic/$upload1' type='video/mp4'>
   </video> 
 <hr>
</div>
"; 
}
else{
    echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
<img src='userspic/$upload1' class='img-res' height='300px'> 
<hr>
</div>
"; 
}
}    
$select2=mysqli_query($db,"SELECT * FROM uploads WHERE nocv_id='$nocv_id2'")or die(mysqli_error($db));
while($row=mysqli_fetch_array($select2)){
    $id=$row['upload_id'];
    $uploads1=$row['upload1'];
     $extention=explode('.',$uploads1); 
    $end=end($extention);
 if($nocv_id!==$nocv_id2){
      if($end =='mp3'){
echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
   <audio controls='controls'>
   <source src='userspic/$uploads1' type='audio/mp3'>
   </audio><hr> 
</div>
";                     
}
else if($end =='mp4'){
    echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
   <video controls='controls'width='100%' height='240'>
   <source src='userspic/$uploads1' type='video/mp4'>
   </video><hr> 
</div>
"; 
}
else{
     echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
<img src='userspic/$uploads1' class='img-res' height='300px'>
  <hr>
</div>
"; 
}
}
}
}
?>


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
if(isset($_GET['register'])){
    echo"<script>alert('Registeration Complete Please Upload Photos/audios/videos of your work')</script>";
}
?>
<?php
if(isset($_GET['update'])){
    echo"<script>alert('Upload Successful')</script>";
}
?>


<?php mysqli_close($db); ?>