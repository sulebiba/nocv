<?php
ob_start();
include("connection.php");
include("session.php");
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Conversation</title>
<meta name="description" content="Welcome to nocv.ng Forum. This is where all interactions will take place. It is either you are learning, or you are giving advice on certain things relating to our Skill / Talent. It is fair to say you learn from each other here. Pictures, videos or audios will be uploaded here which can be used as the topic for the forum's discussions." />

<meta name="viewport"content="width-device-width,initial-scale=1" />
<link href="images/nocv.jpg" rel="icon">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="main2.js"></script>
<link href="stylo.css"rel="stylesheet" />


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
    
    function topi(){
          var topic= document.getElementById("topic").value;
         // var upload2= document.getElementById("upload2").value;
          //var upload3= document.getElementById("upload3").value;
          
            if(topic== "" || topic==" " ){
            alert("write something");
            return false; 
             }
            else if(topic.length>500){
                alert("topic too long");
                 return false;
                 }
              else{
                  return true;
              }
          }
    function check_val(){
        var bad = new Array(
"sex","escort","ashawo","butt","nude","naked","penis","vargina","cum","squirt","gun","ammunition","drug","pussy","bet","gamble","gambling",
"fuck","anal","paedophile","porn","erotic","bomb","explosives","bastard","retard","idiot","fool","breast","murder","kill","rape","gay","lesbian","die","death","prostitute","prostitution","masturbate","masturbation","olosho"
);
        var check = document.getElementById("topic").value;
        var error=0;
        for(var i=0;i<bad.length;i++){
            var val=bad[i];
            if((check.toLowerCase()).indexOf(val.toString())>-1){
                error=error+1;
            }
        }
        if(error>0){
            alert("The text contains a prohibited word");
            window.location.reload(true);
        }
        else{
            
        }
    }
          </script>
 <br>
<br>
<?php
if(isset($_SESSION['nocv_id'])){
    $nocv_id8= $_SESSION['nocv_id'];

if(isset($_GET['start_chat'])){
    $nocv_id9= $_GET['start_chat'];
}
if($nocv_id8==$nocv_id9){
$getfile=mysqli_query($db,"SELECT * FROM chat WHERE start_chat='$nocv_id9'")or die(mysqli_error($db));
if(mysqli_num_rows($getfile)==0){
echo"<form onsubmit='return valid()' onchange='demo()' method='post'enctype='multipart/form-data'>
<p style='word-break: break-all'><b>UPLOAD A PICTURE/AUDIO/VIDEO<br> AND LISTEN TO THE OPINION OF OTHERS<b></p><br><input type='file'name='file' id='upload'required>

<input type='submit' name='submit' class='btn btn-primary' value='upload File'>
<br>

";
?>
<input type='hidden' name='date' class='btn btn-primary' value="<?php echo date('Y-m-d h:i:s') ?>">
</form>
    

<?php }
    
    else{
        echo"<form method='post'>
<input type='submit' name='delete' class='btn btn-danger' value='Delete/Change Upload'><br><p><b>Delete when Chat session is Over</b></p></form>";
    }
   
$gettopic=mysqli_query($db,"SELECT * FROM topic WHERE start_chat='$nocv_id9'")or die(mysqli_error($db));
if(mysqli_num_rows($gettopic)==0){
  echo"<form onsubmit='return topi()' method='post'>
<br><textarea name='topic' id='topic' class='form-control' onKeyUp='check_val()'></textarea>
<br>
<br>

<input type='submit' name='submittopic' class='btn btn-primary' value='Post Topic / Discussion'></form>";

    
}
else{
        echo"<br><form method='post'>
<input type='submit' name='deletetopic' class='btn btn-danger' value='Change Topic'><br></form>";
    }

}
}
    ?>
    <?php
    if(isset($_GET['nocv_id'])){
        $delete=$_GET['nocv_id'];
        $selectupfile=mysqli_query($db,"SELECT * FROM chat WHERE nocv_id='$delete'");
     while($rowfile=mysqli_fetch_array($selectupfile)){
     $uppy=$rowfile['file']; 
    }
    }
    if(isset($_GET['start_chat'])){
        $delete2=$_GET['start_chat'];
    }
    if(isset($_GET['chat'])){
        $delete3=$_GET['chat'];
    }
    if(isset($_POST['delete'])){
        $delete_q=mysqli_query($db,"DELETE FROM chat WHERE nocv_id='$delete'");
        $path="chat/$uppy";
        unlink($path);
        header("Location:start_a_chat.php?nocv_id=$delete2&start_chat=$delete2&chat=$delete3#");
    }
    ?>
    <?php
    if(isset($_GET['nocv_id'])){
        $deletetopic=$_GET['nocv_id'];
    }
    if(isset($_GET['start_chat'])){
        $deletetopic2=$_GET['start_chat'];
    }
    if(isset($_GET['chat'])){
        $deletetopic3=$_GET['chat'];
    }
    if(isset($_POST['deletetopic'])){
        $delete_qtopic=mysqli_query($db,"DELETE FROM topic WHERE nocv_id='$deletetopic'");
        header("Location:start_a_chat.php?nocv_id=$deletetopic2&start_chat=$deletetopic2&chat=$deletetopic3#");
    }
    ?>
<br>
<br>
<div class="col-sm-3">
<div id="left">
<div id="leftpic">
<?php
if(isset($_SESSION['nocv_id'])){
$vikinglagertha=$_SESSION['nocv_id'];
$chatviking=substr($vikinglagertha,-3,2);
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
    
<img src="users/<?php echo $Profile  ?>"width="100%"height="410px">

 
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
        
         <?php
         
        if($vikinglagertha==$noc_id){
           
        $select=mysqli_query($db,"SELECT * FROM requests WHERE start_chat='$noc_id'")or die(mysqli_error($db));
        $number=mysqli_num_rows($select);
         
        echo"<tr>
        <th class='col-sm-3 text-center'><b id='greeen'><br><br></b></th><th class='col-sm-3'><br><a href='forum_requests.php?nocv_id=$vikinglagertha'class='btn btn-primary glyphicon glyphicon-envelope'>ForumRequests($number)</a></th>
         </tr>
        
          <tr>
        <th class='col-sm-3 text-center'><b id='greeen'><br><br><br></b></th><th class='col-sm-3'><a href='join_forum.php?nocv_id=$vikinglagertha&start_chat=$vikinglagertha&chat=$chatviking'class='btn btn-primary glyphicon glyphicon-user'>ViewAvailableForums</a></th>
         </tr>
         
         <tr>
        <th class='col-sm-3 text-center'><b id='greeen'><br><br><br></b></th><th class='col-sm-3'><a href='removemembers.php?nocv_id=$vikinglagertha'class='btn btn-primary glyphicon glyphicon-user'>RemoveMembers</a></th>
         </tr>";
         
        }
            ?>
            
     </table>
     
     <?php }} ?>
     <br>
     <br>
    
   
</div>
</div>
<div class="col-lg-6 col-md-3 col-sm-12 col-xs-12">
<div id="right">
<div id="right2">
<?php
if(isset($_SESSION['nocv_id'])){
    $nocv_id= $_SESSION['nocv_id'];

if(isset($_GET['start_chat'])){
    $start_chats= $_GET['start_chat'];

$getimage=mysqli_query($db,"SELECT * FROM chat WHERE start_chat='$start_chats'")or die(mysqli_error($db));
if(mysqli_num_rows($getimage)>0){
while($getrow=mysqli_fetch_array($getimage)){
    $id=$getrow['id'];
    $get_file=$getrow['file'];
    $extention=explode('.',$get_file); 
    $end=end($extention);
    $get_date=$getrow['date'];

if($end =='mp4'|| $end =='MP4'){
echo"
    <div id='scroll-nocv2'><video controls='controls'width='100%' height='240'>
   <source src='chat/$get_file' type='video/mp4'>
   </video>
   <br><br><p style='word-break: break-all'>$get_date<br></p><br>
 </div>";
}
else if($end =='mp3'|| $end =='MP3'){
echo"<div id='scroll-nocv2'><audio controls='controls'>
   <source src='chat/$get_file' type='audio/mp3'>
   </audio><br><br>
   <p style='word-break: break-all'>$get_date<br>
   </div>";
}
else{
   echo"<div id='scroll-nocv2'><img src='chat/$get_file'class='img-res' height='500px'><br><br>
   <p style='word-break: break-all'>$get_date<br></p><br></div>"; 
}

    

}
}

$gettropic=mysqli_query($db,"SELECT * FROM topic WHERE start_chat='$start_chats'")or die(mysqli_error($db));
if(mysqli_num_rows($gettropic)>0){
while($gettropicrow=mysqli_fetch_array($gettropic)){
    $idtropic=$gettropicrow['id'];
    $get_tropic=$gettropicrow['topic'];
     
    


   
echo"<p><b>$get_tropic</b></p><br>";

    

}
}   
    
if(mysqli_num_rows($getimage)>0 && mysqli_num_rows($gettropic)< 1){    
echo"<p style='word-break: break-all'><b>WHAT DO YOU THINK?</b><br>";
}
    
if(mysqli_num_rows($getimage)<1 && mysqli_num_rows($gettropic)< 1){
if($nocv_id!==$start_chats){
echo"<p><b>Welcome to my Forum. This is where all interactions will take place. It is either I am teaching, or I need your advice on certain things relating to our Skill / Talent. It is fair to say we both learn from each other here. I will either upload pictures, videos or audios which we can use as the topic for our discussions. Please drop a 'Hi' comment to start our interaction. </b><br></p>";
}
else{
   echo"<p><b>This is your Forum. This is where all interactions will take place. It is either you are teaching, or you need advice on certain things relating to your Skill / Talent. You can either upload pictures, videos or audios which will be  the topic for your discussions. You can also write something in the Topic / Discussion section so that your members will have an idea about what will be discussed here. Go to your members section and invite as many members as you want for interactions to begin. </b><br></p>";
} 
}
}
if($nocv_id==$start_chats){
echo"<div id='rightpic'><h2 align='center'><form method='post'><input type='submit'name='deletecon'class='btn btn-danger'value='Clear chat'></form><form method='post'><input type='submit'name='deletechat'class='btn btn-danger'value='Delete invites'></form></h2>
    <br></div>";
}
else{
    
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
<script>
function validate(){
 var review=document.getElementById("review").value;
 if(review=="" || review==" "){
     alert("write something");
     return false;
    
    }
    else if(review.length>5000){
                alert("Comment too long");
                 return false;
                 }
    else{
        return true;
    }
}
function validat(){
 var revie=document.getElementById("revie").value;
 if(revie=="" || revie==" "){
     alert("write something");
     return false;
    
    }
    else if(revie.length>5000){
                alert("Comment too long");
                 return false;
                 }
    else{
        return true;
    }
}
function check_value(){
        var bad = new Array(
"sex","escort","ashawo","butt","nude","naked","penis","vargina","cum","squirt","gun","ammunition","drug","pussy","bet","gamble","gambling",
"fuck","anal","paedophile","porn","erotic","bomb","explosives","bastard","retard","idiot","fool","breast","murder","kill","rape","gay","lesbian","die","death","prostitute","prostitution","masturbate","masturbation","olosho"
);
        var check = document.getElementById("review").value;
        var error=0;
        for(var i=0;i<bad.length;i++){
            var val=bad[i];
            if((check.toLowerCase()).indexOf(val.toString())>-1){
                error=error+1;
            }
        }
        if(error>0){
            alert("The text contains a prohibited word");
            window.location.reload(true);
        }
        else{
            
        }
    }
    function check_values(){
        var bad = new Array(
"sex","escort","ashawo","butt","nude","naked","penis","vargina","cum","squirt","gun","ammunition","drug","pussy","bet","gamble","gambling",
"fuck","anal","paedophile","porn","erotic","bomb","explosives","bastard","retard","idiot","fool","breast","murder","kill","rape","gay","lesbian","die","death","prostitute","prostitution","masturbate","masturbation","olosho"
);
        var check = document.getElementById("revie").value;
        var error=0;
        for(var i=0;i<bad.length;i++){
            var val=bad[i];
            if((check.toLowerCase()).indexOf(val.toString())>-1){
                error=error+1;
            }
        }
        if(error>0){
            alert("The text contains a prohibited word");
            window.location.reload(true);
        }
        else{
            
        }
    }
</script>
<?php
if(isset($_SESSION['nocv_id'])){
$nocv_id=$_SESSION['nocv_id'];
if(isset($_GET['id'])){
if(isset($_GET['nocv_id'])){
$adi=$_GET['nocv_id'];
if(isset($_GET['start_chat'])){
$adii=$_GET['start_chat'];
if(isset($_GET['chat'])){
$adiii=$_GET['chat'];
echo"
<div id='scroll-nocv1'>
<form onsubmit='return validat()'method='post'>
<textarea name='messag' class='form-control' placeholder='reply user'id='revie'onKeyUp='check_values()'required></textarea>
<br><input type='submit' name='submitss' class='btn btn-primary' value='submit'><br><p><a href='start_a_chat.php?nocv_id=$adi&start_chat=$adii&chat=$adiii#'>Cancel reply</a></p>
</div>
";
}
}
}
}
else{
 echo"
<form onsubmit='return validate()'method='post'>
<textarea name='message' class='form-control' placeholder='comment' onKeyUp='check_value()' id='review'required></textarea>
<br><input type='submit' name='submits' class='btn btn-primary' value='submit'>
";
}
}
?>
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
<p align='right'><a href='start_a_chat.php?nocv_id=$ragnar&start_chat=$bubu&chat=$sal&id=$id&name=ADMIN#nocv1'>Reply</a></p>
</div>
<hr>
<br>                               
</div>";
      
if(isset($_SESSION['nocv_id'])){
$fat=$_SESSION['nocv_id'];
if($fat==$nocv_id){
echo"
<div id='comment col-lg-6 col-md-3 col-sm-12 col-xs-12'class='comment col-lg-12 col-md-3 col-sm-12 col-xs-12'>
<div id='ref'><a href='delete_chat.php?nocv_id=$fati&start_chat=$bubu&chat=$sal&id=$id'>del</a></div></div>";
 }
}
else{
    
}
 
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
<p align='right'><a href='start_a_chat.php?nocv_id=$ragnar&start_chat=$bubu&chat=$sal&id=$id&name=$name#nocv1'>Reply</a></p>
</div>
<hr>
<br>             
                  
</div>";
 if(isset($_SESSION['nocv_id'])){
$fat=$_SESSION['nocv_id'];
if($fat==$nocv_id){
echo"
<div id='comment col-lg-6 col-md-3 col-sm-12 col-xs-12'class='comment col-lg-12 col-md-3 col-sm-12 col-xs-12'>
<div id='ref'><a href='delete_chat.php?nocv_id=$fati&start_chat=$bubu&chat=$sal&id=$id'>del</a></div></div>";
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
<p align='right'><a href='start_a_chat.php?nocv_id=$ragnar&start_chat=$bubu&chat=$sal&id=$uidra&name=ADMIN#nocv1'>Reply</a></p>

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
<p align='right'><a href='start_a_chat.php?nocv_id=$ragnar&start_chat=$bubu&chat=$sal&id=$uidra&name=$namelagertha#nocv1'>Reply</a></p>

<hr>
<br>                               
</div>";   
    }
    }
    }
    
    }
    }
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
    
$select_walter=mysqli_query($db,"SELECT * FROM chat_post WHERE start_chat='$white'"); 
$select_walte=mysqli_query($db,"SELECT * FROM reply_post WHERE start_chat='$white'");
echo "<div align='right'>".mysqli_num_rows($select_walter)."/500</div>";
echo "<div align='right'>".mysqli_num_rows($select_walte)."/500</div>";
if($walter!==$white){
echo"<br><div id='scroll-nocv3'><div align='right'><form method='post' action='report.php?start_chat=$white'><input type='submit'value='Report Admin' class='btn btn-danger'></form></div></div>";
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

if(isset($_POST['submit'])){
if(isset($_GET['start_chat'])){
    $start_chat=$_GET['start_chat'];
}
if(isset($_GET['chat'])){
    $chat=$_GET['chat'];
}
if(isset($_SESSION['nocv_id'])){
$nocv_id=$_SESSION['nocv_id'];  
$date=$_POST['date'];
$file=$_FILES['file']['name'];
$extention=explode('.',$file); 
$end=end($extention);
$token=md5(uniqid(rand(),true));
$file =$token.".".$end;
$tmp=$_FILES['file']['tmp_name'];
$target="chat/";
    
    $insert=mysqli_query($db,"INSERT INTO chat (file,nocv_id,start_chat,date) VALUES ('$file','$nocv_id','$start_chat','$date')")or die (mysqli_error($db));
move_uploaded_file($tmp,$target.$file);

//echo"<script>alert('upload Successful')</script>";
header("Location:start_a_chat.php?nocv_id=$start_chat&start_chat=$start_chat&chat=$chat#nocv2");
ob_end_flush();
     }
    else{
        echo"<script>alert('You have to be logged in')</script>";
    }
}
?>


<?php

if(isset($_POST['submittopic'])){
if(isset($_GET['start_chat'])){
    $start_chattopic=$_GET['start_chat'];
}
if(isset($_GET['chat'])){
    $chattopic=$_GET['chat'];
}
if(isset($_SESSION['nocv_id'])){
$nocv_idtopic=$_SESSION['nocv_id'];  
$topic=mysqli_real_escape_string($db,$_POST['topic']);
$badcomment = array("sex","escort","ashawo","butt","nude","naked","penis","vargina","cum","squirt","gun","ammunition","drug","pussy","bet","gamble","gambling",
"fuck","anal","paedophile","porn","erotic","bomb","explosives","bastard","retard","idiot","fool","breast","murder","kill","rape","gay","lesbian","die","death","prostitute","prostitution","masturbate","masturbation","olosho");
$replacecomment = array("No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No");
 $topic=str_replace($badcomment,$replacecomment,$topic);   
    $inserttopic=mysqli_query($db,"INSERT INTO topic (topic,nocv_id,start_chat) VALUES ('$topic','$nocv_idtopic','$start_chattopic')")or die (mysqli_error($db));


//echo"<script>alert('upload Successful')</script>";
header("Location:start_a_chat.php?nocv_id=$start_chattopic&start_chat=$start_chattopic&chat=$chattopic#nocv2");
ob_end_flush();
     }
    else{
        echo"<script>alert('You have to be logged in')</script>";
    }
}
?>



<?php
if(isset($_SESSION['nocv_id'])){
    $nocv_id2=$_SESSION['nocv_id'];
}
if(isset($_GET['start_chat'])){
    $start_chat2=$_GET['start_chat'];
}
if(isset($_GET['chat'])){
    $chat2=$_GET['chat'];
}
if(isset($_POST['submits'])){   
$comment2=mysqli_real_escape_string($db,$_POST['message']);
$badcomment = array("sex","escort","ashawo","butt","nude","naked","penis","vargina","cum","squirt","gun","ammunition","drug","pussy","bet","gamble","gambling",
"fuck","anal","paedophile","porn","erotic","bomb","explosives","bastard","retard","idiot","fool","breast","murder","kill","rape","gay","lesbian","die","death","prostitute","prostitution","masturbate","masturbation","olosho");
$replacecomment = array("No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No");
 $comment2=str_replace($badcomment,$replacecomment,$comment2);
$date2=$_POST['date']; 
 
 $select_insert2=mysqli_query($db,"SELECT * FROM chat_post WHERE start_chat='$start_chat2'");
if(mysqli_num_rows($select_insert2)>500){
    echo"<script>alert('Chat is full. Clear Chat')</script>";
}
else{
$selectcheck=mysqli_query($db,"SELECT * FROM invites WHERE nocv_id='$nocv_id2' AND start_chat='$start_chat2'");
if(mysqli_num_rows($selectcheck)>0){
$insert2=mysqli_query($db,"INSERT INTO chat_post (comment,date,nocv_id,start_chat) VALUES ('$comment2','$date2','$nocv_id2','$start_chat2')")or die(mysqli_error($db));

$select_tbom=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$start_chat2'") or die (mysqli_error($db));
while($row_tbom=mysqli_fetch_array($select_tbom)){
    $email_tbom=$row_tbom['email'];
}
        $from2="nocv.ng@nocv.ng";
        $to2=$email_tbom;

        $subject2="Nocv.ng Forum Activity";
        $message2="Good day, A member in nocv.ng has dropped a comment in your Forum.\r \n Please log in to https://nocv.ng/log_in.php to continue the conversation.Thanks and God bless.";

        $headers2="From:".$from2;
        mail($to2,$subject2,$message2,$headers2);
header("Location:start_a_chat.php?nocv_id=$start_chat2&start_chat=$start_chat2&chat=$chat2#nocv3");
}
else if($nocv_id2==$start_chat2){
  
    $insert2=mysqli_query($db,"INSERT INTO chat_post (comment,date,nocv_id,start_chat) VALUES ('$comment2','$date2','$nocv_id2','$start_chat2')")or die(mysqli_error($db));
header("Location:start_a_chat.php?nocv_id=$start_chat2&start_chat=$start_chat2&chat=$chat2#nocv3");
    
}
else{
    echo"<script>alert('No invite has been sent to you')</script>";
}
}
}
?>


<?php
if(isset($_SESSION['nocv_id'])){
    $nocv_id2r=$_SESSION['nocv_id'];
}
if(isset($_GET['id'])){
    $uid=$_GET['id'];
}
if(isset($_GET['name'])){
    $uidname=$_GET['name'];
}
if(isset($_GET['start_chat'])){
    $start_chat2r=$_GET['start_chat'];
}
if(isset($_GET['chat'])){
    $chat2r=$_GET['chat'];
}
if(isset($_POST['submitss'])){   
$comment2r=mysqli_real_escape_string($db,$_POST['messag']);  
$badcomment = array("sex","escort","ashawo","butt","nude","naked","penis","vargina","cum","squirt","gun","ammunition","drug","pussy","bet","gamble","gambling",
"fuck","anal","paedophile","porn","erotic","bomb","explosives","bastard","retard","idiot","fool","breast","murder","kill","rape","gay","lesbian","die","death","prostitute","prostitution","masturbate","masturbation","olosho");
$replacecomment = array("No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No");
 $comment2r=str_replace($badcomment,$replacecomment,$comment2r);
$date2r=$_POST['date']; 
 
 $select_insert2r=mysqli_query($db,"SELECT * FROM reply_post WHERE start_chat='$start_chat2r'");
if(mysqli_num_rows($select_insert2r)>500){
    echo"<script>alert('Chat is full. Clear Chat')</script>";
}
else{
$selectcheckr=mysqli_query($db,"SELECT * FROM invites WHERE nocv_id='$nocv_id2r' AND start_chat='$start_chat2r'");
if(mysqli_num_rows($selectcheckr)>0){
$insert2r=mysqli_query($db,"INSERT INTO reply_post (uid,comment,date,nocv_id,start_chat,name) VALUES ('$uid','$comment2r','$date2r','$nocv_id2r','$start_chat2r','$uidname')")or die(mysqli_error($db));

$select_tbomm=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$start_chat2r'") or die (mysqli_error($db));
while($row_tbomm=mysqli_fetch_array($select_tbomm)){
    $email_tbomm=$row_tbomm['email'];
}
        $from2m="nocv.ng@nocv.ng";
        $to2m=$email_tbomm;

        $subject2m="Nocv.ng Forum Activity";
        $message2m="Good day, A member in nocv.ng has dropped a comment in your Forum.\r \n Please log in to https://nocv.ng/log_in.php to continue the conversation.Thanks and God bless.";

        $headers2m="From:".$from2m;
        mail($to2m,$subject2m,$message2m,$headers2m);
header("Location:start_a_chat.php?nocv_id=$start_chat2r&start_chat=$start_chat2r&chat=$chat2r#nocv3");
}
else if($nocv_id2r==$start_chat2r){
  
    $insert2r=mysqli_query($db,"INSERT INTO reply_post (uid,comment,date,nocv_id,start_chat,name) VALUES ('$uid','$comment2r','$date2r','$nocv_id2r','$start_chat2r','$uidname')")or die(mysqli_error($db));
header("Location:start_a_chat.php?nocv_id=$start_chat2r&start_chat=$start_chat2r&chat=$chat2r#nocv3");
    
}
else{
    echo"<script>alert('No invite has been sent to you')</script>";
}
}
}
?>



<?php
if(!isset($_SESSION['nocv_id'])){
    header("Location:index.php");
}
?>

<?php mysqli_close($db); ?>
