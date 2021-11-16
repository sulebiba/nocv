<?php
ob_start();
include("connection.php");
include("session.php");
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>General Conversation</title>
<meta name="description" content="This is a General Forum. Whatever posted here by the  Admin or others can be viewed by everyone in this Skill / Talent section. This section should be used to pass information or get everyones opinion about something relating to the Skill / Talent. Everything can be done here except to upload pictures, audios or videos. This section can be used to ask for invites or forum requests from people. For everyone seeing this, share your thoughts or opinions about the topic posted in this Forum" />

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

#status{
       color: red; 
    }
    
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



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-201263053-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-201263053-1');
</script>

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
<?php if(isset($_SESSION['nocv_id'])){

}
else{
echo"<li><a class='active' href='about.php'>About</a></li>";
}
?>
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
echo"<li><a class='active' href='announcement.php?nocv_id=$nocv_id'>General Forum</a></li>";
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
<?php if(isset($_SESSION['nocv_id'])){

}
else{
    echo"<li><a class='active' href='videos.php'>Videos</a></li>";
}
?>

<li><a class="active" href="blog.php">Blog</a></li>
</ul>
</div>
</div>
</nav>
<br>
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

<?php
if(isset($_GET['nocv_id'])){
    $nocv_id=$_GET['nocv_id'];

$select=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv_id'")or die(mysqli_error($db));
while($row=mysqli_fetch_array($select)){
$skill=$row['skill'];
$select=mysqli_query($db,"SELECT * FROM skills WHERE id='$skill'")or die(mysqli_error($db));
while($row=mysqli_fetch_array($select)){
$name=$row['name'];
echo"<h2 align='center' id='lost'><font face='Algerian'>$name</font></h2>";
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
          
            if(topic== " "){
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
          </script>
 <br>
<br>
<?php
if(isset($_SESSION['nocv_id'])){
    $nocv_id8= $_SESSION['nocv_id'];

if(isset($_GET['start_chat'])){
    $nocv_id9= $_GET['start_chat'];
}

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
    
<img src="images/<?php echo 'nocv.jpg' ?>"width="100%"height="410px">

 
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
         
         <th class='col-sm-3 text-center'><b id='greeen'><br><br>NOCV ID:</b></th><th class='col-sm-3'><a href='search_forum.php?forum_id=<?php echo $nocv_id; ?>'><br><br><?php echo $nocv_id; ?></a></th>
        
         
        
        
     </tr>
    <tr> 
  
         <th class='col-sm-3 text-center'><b id='greeen'><br><br>TOTAL FORUM MEMBERS:</b></th><th class='col-sm-3'><br><br><?php echo $total; ?></th>
        
        
        
     </tr>
        
         
            
     </table>
     
     <?php }} ?>
     <br>
     <br>
    
   
</div>
</div>
<div class="col-lg-6 col-md-3 col-sm-12 col-xs-12">
<div id="right">
<div id="right2">
<p><b>This is a General Forum. Whatever posted here by you (Admin) or others can be viewed by everyone in your Skill / Talent section. Use this section to pass information or get everyones opinion about something relating to your Skill / Talent. Everything can be done here except to upload pictures, audios or videos. You can use this section to ask for invites or forum requests from people. For everyone seeing this, share your thoughts or opinions about the topic posted below </b><br></p><br><br>

    
<?php
if(isset($_SESSION['nocv_id'])){
    $nocv_id= $_SESSION['nocv_id'];

if(isset($_GET['start_chat'])){
    $start_chats= $_GET['start_chat'];
    
if(isset($_GET['comment'])){
    $gencomment= $_GET['comment'];   
    
if(isset($_GET['status'])){
    $genstatus= $_GET['status'];
    
$getgenforum=mysqli_query($db,"SELECT * FROM announcement WHERE nocv_id='$start_chats'AND comment='$gencomment'")or die(mysqli_error($db));
if(mysqli_num_rows($getgenforum)>0){
while($getgenrow=mysqli_fetch_array($getgenforum)){
    $id=$getgenrow['id'];
    $getgencomment=$getgenrow['comment'];
    $getgen_date=$getgenrow['date'];
    $getgen_status=$getgenrow['status'];


echo"<h3><b>$getgencomment</b></h3><br><p>$getgen_date</p><br><p align='right' id='status'>Status:$getgen_status</p>";
    

}
}


    

}

}
}
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
if(isset($_GET['comment'])){
$adcomment= $_GET['comment'];   
if(isset($_GET['status'])){
$adstatus= $_GET['status'];
echo"
<div id='scroll-nocv1'>
<form onsubmit='return validat()'method='post'>
<textarea name='messag' class='form-control' onKeyUp='check_values()' placeholder='reply user'id='revie'required></textarea>
<br><input type='submit' name='submitss' class='btn btn-primary' value='submit'><br><p><a href='general.php?nocv_id=$adi&start_chat=$adii&chat=$adiii&comment=$adcomment&status=$adstatus#'>Cancel reply</a></p>
</div>
";
}
}
}
}
}
}
else{
 echo"
<form onsubmit='return validate()'method='post'>
<textarea name='message' class='form-control' onKeyUp='check_value()' placeholder='comment'id='review'required></textarea>
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
    
    if(isset($_GET['comment'])){
    $salcomment= $_GET['comment'];   
    
if(isset($_GET['status'])){
    $salstatus= $_GET['status'];
    
    $daddy=mysqli_query($db,"SELECT * FROM general WHERE start_chat='$bubu' AND topic='$salcomment' ORDER BY 1 ASC")or die(mysqli_error($db));
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
<p align='right'><a href='general.php?nocv_id=$ragnar&start_chat=$bubu&chat=$sal&comment=$salcomment&status=$salstatus&id=$id&name=ADMIN#nocv1'>Reply</a></p>
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
<p align='right'><a href='general.php?nocv_id=$ragnar&start_chat=$bubu&chat=$sal&comment=$salcomment&status=$salstatus&id=$id&name=$name#nocv1'>Reply</a></p>
</div>
<hr>
<br>             
                  
</div>";
 
      
  }
    
    }
    $lagertha=mysqli_query($db,"SELECT * FROM general_reply WHERE uid ='$id' ORDER BY 1 ASC ") or die (mysqli_error($db));
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
<p align='right'><a href='general.php?nocv_id=$ragnar&start_chat=$bubu&chat=$sal&comment=$salcomment&status=$salstatus&id=$uidra&name=ADMIN#nocv1'>Reply</a></p>

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
<p align='right'><a href='general.php?nocv_id=$ragnar&start_chat=$bubu&chat=$sal&comment=$salcomment&status=$salstatus&id=$uidra&name=$namelagertha#nocv1'>Reply</a></p>

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
    }
    }
?>

    <div id='scroll-nocv3'></div>
    
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
    $nocv_id2=$_SESSION['nocv_id'];
}
if(isset($_GET['start_chat'])){
    $start_chat2=$_GET['start_chat'];
}
if(isset($_GET['chat'])){
    $chat2=$_GET['chat'];
}
 if(isset($_GET['comment'])){
    $sallycomment= $_GET['comment'];   
 }
if(isset($_GET['status'])){
    $sallystatus= $_GET['status'];
}
if(isset($_POST['submits'])){   
$comment2=mysqli_real_escape_string($db,$_POST['message']); 
$badcomment = array("sex","escort","ashawo","butt","nude","naked","penis","vargina","cum","squirt","gun","ammunition","drug","pussy","bet","gamble","gambling",
"fuck","anal","paedophile","porn","erotic","bomb","explosives","bastard","retard","idiot","fool","breast","murder","kill","rape","gay","lesbian","die","death","prostitute","prostitution","masturbate","masturbation","olosho");
$replacecomment = array("No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No");
$comment2=str_replace($badcomment,$replacecomment,$comment2);
$date2=$_POST['date']; 
 
 $select_insert2=mysqli_query($db,"SELECT * FROM general WHERE start_chat='$start_chat2'AND topic='$sallycomment'");
 $select_insert3=mysqli_query($db,"SELECT * FROM announcement WHERE nocv_id='$start_chat2' AND status='closed'");
if(mysqli_num_rows($select_insert2)>500){
    echo"<script>alert('Chat is full.')</script>";
}
else if(mysqli_num_rows($select_insert3)>0){
    echo"<script>alert('This forum is closed')</script>";
}
else{

$insert2=mysqli_query($db,"INSERT INTO general (comment,date,nocv_id,start_chat,topic) VALUES ('$comment2','$date2','$nocv_id2','$start_chat2','$sallycomment')")or die(mysqli_error($db));
    
 $select_replied=mysqli_query($db,"SELECT * FROM replied WHERE topic='$sallycomment' AND nocv_id='$nocv_id2'");
    if(mysqli_num_rows($select_replied)<1){
      $insert_replied=mysqli_query($db,"INSERT INTO replied (date,nocv_id,start_chat,topic) VALUES ('$date2','$nocv_id2','$start_chat2','$sallycomment')")or die(mysqli_error($db));  
    }

header("Location:general.php?nocv_id=$start_chat2&start_chat=$start_chat2&chat=$chat2&comment=$sallycomment&status=$sallystatus#nocv3");


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
if(isset($_GET['comment'])){
    $rsallycomment= $_GET['comment'];   
 }
if(isset($_GET['status'])){
    $rsallystatus= $_GET['status'];
}
if(isset($_POST['submitss'])){   
$comment2r=mysqli_real_escape_string($db,$_POST['messag']);  
$badcomment = array("sex","escort","ashawo","butt","nude","naked","penis","vargina","cum","squirt","gun","ammunition","drug","pussy","bet","gamble","gambling",
"fuck","anal","paedophile","porn","erotic","bomb","explosives","bastard","retard","idiot","fool","breast","murder","kill","rape","gay","lesbian","die","death","prostitute","prostitution","masturbate","masturbation","olosho");
$replacecomment = array("No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No");
$comment2r=str_replace($badcomment,$replacecomment,$comment2r);
$date2r=$_POST['date']; 
 
 $select_insert2r=mysqli_query($db,"SELECT * FROM general_reply WHERE start_chat='$start_chat2r' AND topic='$rsallycomment'");
  $select_insert3r=mysqli_query($db,"SELECT * FROM announcement WHERE nocv_id='$start_chat2r' AND status='closed'");
if(mysqli_num_rows($select_insert2r)>500){
    echo"<script>alert('Chat is full')</script>";
}
else if(mysqli_num_rows($select_insert3r)>0){
    echo"<script>alert('Forum is closed')</script>";
}
else{


$insert2r=mysqli_query($db,"INSERT INTO general_reply (uid,comment,date,nocv_id,start_chat,name,topic) VALUES ('$uid','$comment2r','$date2r','$nocv_id2r','$start_chat2r','$uidname','$rsallycomment')")or die(mysqli_error($db));

$select_replied=mysqli_query($db,"SELECT * FROM replied WHERE topic='$rsallycomment' AND nocv_id='$nocv_id2r'");
    if(mysqli_num_rows($select_replied)<1){
      $insert_replied=mysqli_query($db,"INSERT INTO replied (date,nocv_id,start_chat,topic) VALUES ('$date2r','$nocv_id2r','$start_chat2r','$rsallycomment')")or die(mysqli_error($db));  
    }

header("Location:general.php?nocv_id=$start_chat2r&start_chat=$start_chat2r&chat=$chat2r&comment=$rsallycomment&status=$rsallystatus#nocv3");
}

}

?>



<?php
if(!isset($_SESSION['nocv_id'])){
    header("Location:index.php");
}
?>

<?php mysqli_close($db); ?>
