<?php
ob_start();
include("connection.php");
include("session.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Upload</title>
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
#naija{
    color:green;
}
#lab{
    color:red;
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
<div id="logo"><a class="navbar-brand" href="index.php"><img src="images/flag.jpg"width="100" /></a></div>
<div id="">
<div class="landing-text">
<!--<h1>BOOTSTRAP</h1>
<H3>Learn the basic building blocks</H3>
<a href="#" class="btn btn-default btn-lg">Get Started</a>-->
</div>
</div>
<div class="padding">
<div class="container">
<div class="row">
<div class="col-sm-6">
    


</div>
<div class="col-sm-3 text-center">

</div>
</div>
</div>
</div>
<div class="padding">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    
   
</div>
    <h1 align="center" id="header"><b><font face='Algerian'>UPLOAD</font></b></h1> 
    <h4 align="center" id="header2"><i id="country"><b><font face='Algerian'>UPLOAD PICTURES/AUDIOS/VIDEOS OF YOUR SKILL / TALENT <br><span id='naija'>(PAGE LIMIT:100 Posts(Including 5 videos and 5 audios))</span></b></font></b></i></h4> 
   
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
<div class="col-md-9">
    <div class="box">
      <div class="box-header">
        <center>
          
          </center>
          <script>
         /* function demo(){
           var upload= document.getElementById("upload");  
           if(upload.files[0].size > 62914560){
               alert("file should be less than 60mb");
               window.location.reload(true);
               return false;
           }
          } 
          function validate(){
          var upload= document.getElementById("upload").value;
         // var upload2= document.getElementById("upload2").value;
          //var upload3= document.getElementById("upload3").value;
          
            if(upload== "" || upload==" "){
            alert("Upload an Image");
            return false; 
             }
            else if(!upload.match(/(\.jpg|\.jpeg|\.png|\.mp3|\.mp4)$/i)){
	        alert("Only Pictures, Mp3 Audio and Mp4 Video");
	        return false;
             }
            
              else{
                  return true;
              }
          }*/
          </script>
          
          <form method="post" align="center"onsubmit="return validate()" onchange="demo()"enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
         
              <div class="form-group">
              <label id='lab'>Uploads not related to your skill/talent will be deleted</label>
              <input type="file" class="form-control" name="file" id="upload" required>
              </div>
              
             
              
              <div class="text-center">
              <input type="submit" name="submit" class="btn btn-primary"value="Click to upload">
                  
              </div>
          </form>
          
        </div>
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
if(isset($_SESSION['nocv_id'])){
$nocv_id=$_SESSION['nocv_id'];  
$file=$_FILES['file']['name'];
$filesize=$_FILES['file']['size'];
$extention=explode('.',$file); 
$end=end($extention);
$token=md5(uniqid(rand(),true));
$file =$token.".".$end;
$tmp=$_FILES['file']['tmp_name'];
$target="userspic/";
  $acceptext=array("png", "PNG", "JPEG", "jpeg","jpg","JPG","mp3","MP3","MP4","mp4");
$poppy=pathinfo($file,PATHINFO_EXTENSION);
if(empty($end)){
    echo"<script>alert('please upload a file')</script>";
}
else if(!in_array($poppy,$acceptext)){
    echo"<script>alert('Pictures, audios and videos only')</script>";
}
else if($filesize > 5000000 ){
    echo"<script>alert('too large')</script>";
}
   else{ 
  $select_insert2=mysqli_query($db,"SELECT * FROM uploads WHERE nocv_id='$nocv_id'");
  $selectmp3=mysqli_query($db,"SELECT * FROM uploads WHERE nocv_id='$nocv_id' AND upload1 LIKE '%mp3%'");
  $selectmp4=mysqli_query($db,"SELECT * FROM uploads WHERE nocv_id='$nocv_id' AND upload1 LIKE '%mp4%'");
  $mp3e=mysqli_num_rows($selectmp3);
  $mp4e=mysqli_num_rows($selectmp4);
    
  if($end=='mp3'){
      if($mp3e>4){
        echo"<script>alert('Audio limit reached. Delete Audio')</script>";  
      }
      else if(mysqli_num_rows($select_insert2)>99){
        echo"<script>alert('Post limit reached. Delete Posts')</script>";  
      }
      
      else{
$insert=mysqli_query($db,"INSERT INTO uploads (upload1,nocv_id) VALUES ('$file','$nocv_id')")or die (mysqli_error($db));
require_once("vendor/autoload.php");
\Tinify\setKey("p4Qyy3sws4WtXJ86t3MqdQfHvlPv9NN2");

if($end =='mp3'||$end =='mp4'){
move_uploaded_file($tmp,$target.$file);
}
else{
$source=\Tinify\fromFile($tmp);
$source->toFile($target.$file);
}

header("Location:profile.php");
ob_end_flush();
      }
  }
    
    else if($end=='mp4'){
      if($mp4e>4){
        echo"<script>alert('Video limit reached. Delete a Video')</script>";  
      }
      else if(mysqli_num_rows($select_insert2)>99){
        echo"<script>alert('Post limit reached. Delete Posts')</script>";  
      }
      
      else{
$insert=mysqli_query($db,"INSERT INTO uploads (upload1,nocv_id) VALUES ('$file','$nocv_id')")or die (mysqli_error($db));
require_once("vendor/autoload.php");
\Tinify\setKey("p4Qyy3sws4WtXJ86t3MqdQfHvlPv9NN2");

if($end =='mp3'||$end =='mp4'){
move_uploaded_file($tmp,$target.$file);
}
else{
$source=\Tinify\fromFile($tmp);
$source->toFile($target.$file);
}

header("Location:profile.php");
ob_end_flush();
      }
  }
    
else{
    
    
if(mysqli_num_rows($select_insert2)>99){
    echo"<script>alert('Post limit reached. Delete Posts')</script>";
}
    else{ 
       
     
    $insert=mysqli_query($db,"INSERT INTO uploads (upload1,nocv_id) VALUES ('$file','$nocv_id')")or die (mysqli_error($db));
require_once("vendor/autoload.php");
\Tinify\setKey("p4Qyy3sws4WtXJ86t3MqdQfHvlPv9NN2");

if($end =='mp3'||$end =='mp4'){
move_uploaded_file($tmp,$target.$file);
}
else{
$source=\Tinify\fromFile($tmp);
$source->toFile($target.$file);

}

header("Location:profile.php");
ob_end_flush();
     }
}    
}
}
else{
        echo"<script>alert('You have to be logged in')</script>";
    }
}

?>

<?php
if(isset($_GET['register'])){
    echo"<script>alert('Registeration Complete Please Upload Photos/audios/videos of your work')</script>";
}
?>

<?php mysqli_close($db); ?>
