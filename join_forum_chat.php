<?php
ob_start();
include("connection.php");
include("session.php");
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Join Forum</title>
<meta name="description" content="Welcome to nocv.ng Forum. This is where all interactions will take place. It is either you are learning, or you are giving advice on certain things relating to our Skill / Talent. It is fair to say you learn from each other here. Pictures, videos or audios will be uploaded here which can be used as the topic for the forum's discussions. If you are yet to join, please Request an Invite. " />
<meta name="viewport"content="width-device-width,initial-scale=1" />
<link href="images/nocv.jpg" rel="icon">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="main2.js"></script>
<link href="style.css"rel="stylesheet" />

<style>

#naija{
    color: skyblue;
}
#naijaa{
    color: skyblue;
    margin-left: 50px;
}
#fatima{
    color: white;
}
#fatim{
    color: greenyellow;
}
#lost{
            border: 1px solid black;
            color: white;
            background: black;
            border-radius: 5px;
            
            
            
        }
    #lost p{
        margin-left:10px;
        margin-right: 10px;
    }
    
     #ref, #ref:hover{
       border: 1px solid black;
            color: skyblue;
            background: #8B0000;
            border-radius: 5px;
            margin-top: -35px;
            width: 20%;
            margin-left: 80%;
    
    }
    #ref a{
        padding-left: 30%;
        color: aliceblue;
    }
     u{
        color: skyblue;
    }
    #fatimaa{
    color: black;
    margin-left: 50px;
}
    #fatibu{
        color: blue;
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
echo"<h2 align='center' id='lost'><font face='Algerian'>$name<br>Invite members, listen to their opinions and exchange ideas<br><u>Note: This Forum can also be used for teaching</u></font></h2>";
}
}
}
?>


<div id="box">
<script>
         function demo(){
           var upload= document.getElementById("upload");  
           if(upload.files[0].size > 62914560){
               alert("file should be less than 60mb");
               window.location.reload(true);
               return false;
           }
          }
          function valid(){
          var upload= document.getElementById("upload").value;
         // var upload2= document.getElementById("upload2").value;
          //var upload3= document.getElementById("upload3").value;
          
            if(upload== "" || upload==" "){
            alert("Upload an Image");
            return false; 
             }
            else if(!upload.match(/(\.jpg|\.jpeg|\.png|\.mp4|\.mp3)$/i)){
	        alert("Only Mp4 Videos,Pictures and Audio Allowed");
	        return false;
             }
            
              else{
                  return true;
              }
          }
          </script>
 <br>
<br>

    <?php
    if(isset($_GET['nocv_id'])){
        $delete=$_GET['nocv_id'];
    }
    if(isset($_GET['start_chat'])){
        $delete2=$_GET['start_chat'];
    }
    if(isset($_GET['chat'])){
        $delete3=$_GET['chat'];
    }
    if(isset($_POST['delete'])){
        $delete_q=mysqli_query($db,"DELETE FROM chat WHERE nocv_id='$delete'");
        header("Location:start_a_chat.php?nocv_id=$delete2&start_chat=$delete2&chat=$delete3#");
    }
    ?>
<br>
<br>
<div class="col-sm-3">
<div id="left">
<div id="leftpic">
<?php
if(isset($_GET['start_chat'])){
    $noc_id=$_GET['start_chat'];

$select2=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$noc_id'")or die(mysqli_error($db));
    while($result=mysqli_fetch_array($select2)){
    $Fullname=$result['Fullname'];
    $skill=$result['skill'];
    $state=$result['state_of_residence'];
    $Profile=$result['profile_picture'];
    $nocv_id=$result['nocv_id'];
    $select_skill=mysqli_query($db,"SELECT * FROM skills WHERE id = $skill")or die(mysqli_error($db));
    $select_skil=mysqli_query($db,"SELECT * FROM users WHERE skill = $skill")or die(mysqli_error($db));
    $total=mysqli_num_rows($select_skil);
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
         <th class="col-sm-3 text-center"><b id="greeen"><br><br>State of residence:</b></th><th class="col-sm-3"><br><br><?php echo $state; ?></th>
     </tr>
    <tr>
         
         <th class='col-sm-3 text-center'><b id='greeen'><br><br>NOCV ID:</b></th><th class='col-sm-3'><a href='profile.php?nocv_id=<?php echo $nocv_id; ?>'><br><br><?php echo $nocv_id; ?></a></th>
        
         
        
        
     </tr>
    <tr> 
  
         <th class='col-sm-3 text-center'><b id='greeen'><br><br>TOTAL FORUM MEMBERS:</b></th><th class='col-sm-3'><br><br><?php echo $total; ?></th>
        
        
        
     </tr>      
     </table>
     
     <?php } ?>
     <br>
     <br>
    
   
</div>
</div>
<div class="col-lg-6 col-md-3 col-sm-12 col-xs-12">
<div id="right">
<div id="right2">

    
    
    <div id='scroll-nocv2'><img src='images/nocv.jpg'class='img-res' height='500px'></div>
     <p style='word-break: break-all'><b>Request an Invite to Unlock this Forum</b><br></div> 
       <?php
    
    if(isset($_SESSION['nocv_id'])){
    $nocv_id= $_SESSION['nocv_id'];
    
    if(isset($_GET['start_chat'])){
    $start_chats= $_GET['start_chat'];

    $gettropic=mysqli_query($db,"SELECT * FROM topic WHERE start_chat='$start_chats'")or die(mysqli_error($db));
if(mysqli_num_rows($gettropic)>0){
while($gettropicrow=mysqli_fetch_array($gettropic)){
    $idtropic=$gettropicrow['id'];
    $get_tropic=$gettropicrow['topic'];
     
    


   
echo"<p><b>$get_tropic</b></p><br>";

    

}
}   
    
if(mysqli_num_rows($gettropic)<1){    
echo"<p><b>Welcome to my Forum. This is where all interactions will take place. It is either I am teaching, or I need your advice on certain things relating to our Skill / Talent. It is fair to say we both learn from each other here. I will either upload pictures, videos or audios which we can use as the topic for our discussions. If you are yet to join, please Request an Invite. </b><br></p>";
}
    

}

}

?>
    <?php
if(isset($_GET['nocv_id'])){
  $walter=$_GET['nocv_id'];  

if(isset($_GET['start_chat'])){
  $white=$_GET['start_chat'];

if(isset($_GET['chat'])){
  $saul=$_GET['chat'] ; 
    
echo"<div id='scroll-nocv3'><div align='right'><form method='post' action='join_forum_chat.php?nocvi_id=$walter&start_chat=$white&chat=$saul'><input type='submit'value='Request an invite' class='btn btn-primary'></form></div></div>";
}
}
}
?>
    
<?php
    if(isset($_GET['nocv_id'])){
        $deletecon=$_GET['nocv_id'];
    }
    if(isset($_GET['start_chat'])){
        $deletecon2=$_GET['start_chat'];
    }
    if(isset($_GET['chat'])){
        $deletecon3=$_GET['chat'];
    }
    if(isset($_POST['deletecon'])){
        //$deletecon_q=mysqli_query($db,"DELETE FROM chat WHERE start_chat='$deletecon2'");
        $deletecon_y=mysqli_query($db,"DELETE FROM chat_post WHERE start_chat='$deletecon2'");
        $deletecon_ty=mysqli_query($db,"DELETE FROM reply_post WHERE start_chat='$deletecon2'");
       // $deletecon_i=mysqli_query($db,"DELETE FROM invites WHERE start_chat='$deletecon2'");
        header("Location:start_a_chat.php?nocv_id=$deletecon2&start_chat=$deletecon2&chat=$deletecon3#nocv3");
    }
    ?>
    
<?php
    if(isset($_GET['nocv_id'])){
        $deletecon=$_GET['nocv_id'];
    }
    if(isset($_GET['start_chat'])){
        $deletecon2=$_GET['start_chat'];
    }
    if(isset($_GET['chat'])){
        $deletecon3=$_GET['chat'];
    }
    if(isset($_POST['deletechat'])){
       
       $deletecon_i=mysqli_query($db,"DELETE FROM invites WHERE start_chat='$deletecon2'");
        header("Location:start_a_chat.php?nocv_id=$deletecon2&start_chat=$deletecon2&chat=$deletecon3#");
    }
    ?>        
    
    
    
 
<br>


<input type='hidden' name='date' class='btn btn-primary' value="<?php echo date('Y-m-d h:i:s') ?>">
</form>
<br>
<div class="commentbox">
<?php
    if(isset($_SESSION['nocv_id'])){
    $fati=$_SESSION['nocv_id'];
    
    if(isset($_GET['nocv_id'])){
    $ragnar=$_GET['nocv_id'];
        
    if(isset($_GET['start_chat'])){
    $bubu=$_GET['start_chat'];
    
    if(isset($_GET['chat'])){
    $sal=$_GET['chat'] ; 
        
    $daddy=mysqli_query($db,"SELECT * FROM chat_post WHERE start_chat='$bubu'ORDER BY 1 ASC")or die(mysqli_error($db));
    while($daddy_row=mysqli_fetch_array($daddy)){
        $nocv_id=$daddy_row['nocv_id'];
        $comment=$daddy_row['comment'];
        $date=$daddy_row['date'];
        $id=$daddy_row['id'];
    
    $mummy=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv_id'ORDER BY 1 ASC")or die(mysqli_error($db));
    while($mummy_row=mysqli_fetch_array($mummy)){
        $name=$mummy_row['Fullname'];
        
   
       
  if($bubu==$nocv_id){      
echo"<div id='comment col-lg-6 col-md-3 col-sm-12 col-xs-12'class='comment col-lg-12 col-md-3 col-sm-12 col-xs-12'>
<div id='lost'>
<p id='naija'><b>ADMIN<font color='black'><i class='glyphicon glyphicon-knight'></i></font></b></p>
<br>
<p id='naija'><b>$comment</b></p>
<br>
<p id='naija'><b>$date</b></p>
<br>

</div>
<hr>
<br>                               
</div>";  

  }
  else{
      echo"<div id='comment col-lg-6 col-md-3 col-sm-12 col-xs-12'class='comment col-lg-12 col-md-3 col-sm-12 col-xs-12'>
<div id='lost'>
<p id='fatim'>$name</p>
<br>
<p id='fatima'>$comment</p>
<br>
<p id='fatima'>$date</p>
<br>

</div>
<hr>
<br>             
                  
</div>";
 if(isset($_SESSION['nocv_id'])){
$fat=$_SESSION['nocv_id'];
if($fat==$nocv_id){
echo"
<div id='comment col-lg-6 col-md-3 col-sm-12 col-xs-12'class='comment col-lg-12 col-md-3 col-sm-12 col-xs-12'>
";
 }
}
else{
    
}
      
  }
    
    }
    $lagertha=mysqli_query($db,"SELECT * FROM reply_post WHERE uid ='$id' ORDER BY 1 ASC ") or die (mysqli_error($db));
   while($bjorn=mysqli_fetch_array($lagertha)){    
        $nocv_idra=$bjorn['nocv_id'];
        $commentra=$bjorn['comment'];
        $datera=$bjorn['date'];
        $uidra=$bjorn['uid'];
        $fatibu=$bjorn['name'];
     $mummylagertha=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv_idra'ORDER BY 1 ASC")or die(mysqli_error($db));
    while($mummy_rowlagertha=mysqli_fetch_array($mummylagertha)){
        $namelagertha=$mummy_rowlagertha['Fullname'];
     
        
    if($bubu==$nocv_idra){  
        
       echo"<div id='comment col-lg-6 col-md-3 col-sm-12 col-xs-12'class='comment col-lg-12 col-md-3 col-sm-12 col-xs-12'>

<p id='fatimaa'><b>ADMIN<font color='black'><i class='glyphicon glyphicon-knight'></i></font></b></p>
<br>
<p id='fatimaa'><b><span id='fatibu'>@$fatibu</span> $commentra</b></p>
<br>
<p id='fatimaa'><b>$datera</b></p>
<br>


<hr>
<br>                               
</div>"; 
    }
    else{
       echo"<div id='comment col-lg-6 col-md-3 col-sm-12 col-xs-12'class='comment col-lg-12 col-md-3 col-sm-12 col-xs-12'>

<p id='fatimaa'><b>$namelagertha</b></p>
<br>
<p id='fatimaa'><b><span id='fatibu'>@$fatibu</span> $commentra</b></p>
<br>
<p id='fatimaa'><b>$datera</b></p>
<br>


<hr>
<br>                               
</div></div>";   
    }
    }
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
$selectcheck=mysqli_query($db,"SELECT * FROM requests WHERE start_chat='$invite_s'") or die (mysqli_error($db));
if(mysqli_num_rows($selectcheck)>499){
 echo"<script>alert('This persons inbox is full. Please try another person')</script>";   
}
else{
$insert_invite=mysqli_query($db,"INSERT INTO requests (nocv_id,start_chat,chat,date) VALUES ('$way','$invite_s','$invite_c','$date')") or die(mysqli_error($db));

$select_tbom=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$invite'") or die (mysqli_error($db));
while($row_tbom=mysqli_fetch_array($select_tbom)){
    $email_tbom=$row_tbom['email'];
}
        $from2="nocv.ng@nocv.ng";
        $to2=$email_tbom;

        $subject2="Nocv.ng Forum Request";
        $message2="Good day,You have been sent a Forum request by a member of nocv.ng.\r \n Please log in to https://nocv.ng/log_in.php to check your forum requests inbox in your Forum section.Thanks and God bless.";

        $headers2="From:".$from2;
        mail($to2,$subject2,$message2,$headers2);
//header("Refresh:1;forum_members.php?nocv_id=$way");
//ob_end_flush();

header("Location:join_forum_chat.php?nocv_id=$invite&start_chat=$invite_s&chat=$invite_c&sent=sent");
ob_end_flush();
}
}
}
?>

<?php
if(isset($_GET['sent'])){
    echo"<script>alert('Your request has been sent. If accepted, an invite will be sent to you')</script>";
}
?>
<?php
if(!isset($_SESSION['nocv_id'])){
    header("Location:index.php");
    ob_end_flush();
}
?>

<?php mysqli_close($db); ?>