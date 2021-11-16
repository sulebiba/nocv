<?php
ob_start();
include("session.php");
include("connection.php");
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Edit</title>
<meta name="viewport"content="width-device-width,initial-scale=1" />
<link href="images/nocv.jpg" rel="icon">

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
    <h1 align="center" id="header"><b><font face='Algerian'>My NOCV ACCOUNT</font></b></h1> 
    <h4 align="center" id="header2"><i id="country"><b><font face='Algerian'>Edit your Page</font></b></i></h4> 
   
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
          
          function demo(){
           var upload= document.getElementById("file");  
           if(upload.files[0].size > 5000000){
                alert("Profile picture should be less than 5mb");
               window.location.reload(true);
               return false;
           }
          }    
          
          function validate()  { 
          var name=document.getElementById('name').value;
          var email=document.getElementById("email").value;
          
          var state=document.getElementById("state").value;
          var skill=document.getElementById("skill").value;
          var file=document.getElementById("file").value;
          var pass=document.getElementById("pass").value;
          var confirm=document.getElementById("confirm").value;
          var error1=document.getElementById('error1');
          var error2=document.getElementById("error2");
          
          var error4=document.getElementById("error4");
          var error5=document.getElementById("error5");
          var error6=document.getElementById("error6");
          var error7=document.getElementById("error7");
          var error8=document.getElementById("error8");
             
          if(name== "" || name==" "){
           error1.style.visibility="visible";
            return false; 
             }
           else if(email== "" || email==" "){
            error2.style.visibility = "visible";
            return false; 
             }
            else if(state== "state"){
            error4.style.visibility = "visible";
            return false; 
             }
            else if(skill== "skill"){
            error5.style.visibility = "visible";
            return false; 
             }
            else if(file== "" || file==" "){
            error6.style.visibility = "visible";
            return false; 
             }
            else if(!file.match(/(\.jpg|\.jpeg|\.png)$/i)){
	        error6.style.visibility = "visible";
	        return false;
             }
            else if(pass== "" || pass==" "){
            error7.style.visibility = "visible";
            return false; 
             }
            else if(confirm== "" || confirm==" "){
            error8.style.visibility = "visible";
            return false; 
             }
            else{
                return true;
            }
          }
         
          </script>
          <?php
          $state=['Abia','Adamawa','Akwa-ibom','Anambra','Bauchi','Bayelsa','Benue','Borno','Cross-river','Delta','Ebonyi','Edo','Ekiti','Enugu','Gombe','Imo','Jigawa',
                 'Kaduna','Kano','Katsina','Kebbi','Kogi','Kwara','Lagos','Nasarawa','Niger','Ogun','Ondo','Osun','Oyo','Plateau','Rivers','Sokoto','Taraba',
                 'Yobe','Zamfara','Abuja'];
          sort($state);
              $query=mysqli_query($db,"SELECT * FROM skills")or die (mysqli_error($db));
          ?>
          <?php
           if(isset($_SESSION['nocv_id'])){
          $udale=$_SESSION['nocv_id'];
          if(isset($_GET['nocv_id'])){
          $nocv_id=$_GET['nocv_id'];  
          if($udale==$nocv_id){
          $select=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv_id'")or die(mysqli_error($db)); 
          while($result=mysqli_fetch_array($select)){
          $user_id=$result['user_id'];
          $Fullname=$result['Fullname'];
          $email=$result['email'];
          $states=$result['state_of_residence'];
          $skill=$result['skill'];
          $Profile=$result['profile_picture'];
          $password=$result['password'];
          $select_skill=mysqli_query($db,"SELECT * FROM skills WHERE id = $skill")or die(mysqli_error($db));
          while($result_skill=mysqli_fetch_array($select_skill)){
          $skill_id=$result_skill['id'];
          $name=$result_skill['name'];
    
          
          if(isset($_POST['submit'])){
          $Fullname1=mysqli_real_escape_string($db,$_POST['name']);
          $email1=mysqli_real_escape_string($db,$_POST['email']);
          $states1=mysqli_real_escape_string($db,$_POST['state']);
          $skill1=mysqli_real_escape_string($db,$_POST['skill']);
          $Profile1=$_FILES['file']['name'];
          $filesize=$_FILES['file']['size'];
          $extention=explode('.',$Profile1);
          $end=end($extention);
          $token=md5(uniqid(rand(),true));
          $Profile1=$token.".".$end;
          $tmp=$_FILES['file']['tmp_name'];
          $password1=mysqli_real_escape_string($db,(md5($_POST['pass'])));
          $confirm1=md5($_POST['confirm']);
          $target="users/";
          
         
$acceptext=array("png", "PNG", "JPEG", "jpeg","jpg","JPG");
$poppy=pathinfo($Profile1,PATHINFO_EXTENSION);
if(empty($Fullname1)){
    echo"<script>alert('please enter your name')</script>";
}
else if(!preg_match("/^[a-zA-z ]*$/",$Fullname1)){
   echo"<script>alert('please enter only alphabets')</script>"; 
}
else if(empty($email1)){
   echo"<script>alert('please enter your email Address')</script>"; 
}
else if(!filter_var($email1, FILTER_VALIDATE_EMAIL)){
    echo"<script>alert('please enter a valid email Address')</script>";
}
else if($states1 == 'state'){
  echo"<script>alert('please select a state')</script>";  
}
else if($skill1 == 'skill'){
  echo"<script>alert('please select a skill')</script>";  
}
else if(empty($end)){
   echo"<script>alert('please upload a profile picture')</script>";  
}
else if(!in_array($poppy,$acceptext)){
    echo"<script>alert('JPEG,JPG and PNG only')</script>";
}
else if($filesize > 5000000 ){
    echo"<script>alert('file too large')</script>";
}
else if(empty($_POST['pass'])){
   echo"<script>alert('please enter your password')</script>";  
}
else if(empty($_POST['confirm'])){
   echo"<script>alert('please confirm your password')</script>";  
}
   else{
             
          $select8=mysqli_query($db,"SELECT * FROM users WHERE email ='$email1'")or die (mysqli_error($db));
          if((mysqli_num_rows($select8)>0) && $email!==$email1){
          echo"<script>alert('Email exists')</script>";
           }
         else if($password1!==$confirm1){
            echo"<script>alert('Passwords do not match')</script>";
          }
        else if((mysqli_num_rows($select8)>0) && $email==$email1){
          $update=mysqli_query($db,"UPDATE users SET Fullname='$Fullname1',email='$email1',
          state_of_residence='$states1', skill='$skill1',
          profile_picture='$Profile1',password='$password1' WHERE nocv_id='$nocv_id'") or die(mysqli_error($db));
          require_once("vendor/autoload.php");
          \Tinify\setKey("p4Qyy3sws4WtXJ86t3MqdQfHvlPv9NN2");
          $source=\Tinify\fromFile($tmp);
          $source->toFile($target.$Profile1);
          $_SESSION['nocv_id']=$nocv_id;
          header("Location:profile.php?update=update_successful");
          ob_end_flush();
           } 
        else{
          $update=mysqli_query($db,"UPDATE users SET Fullname='$Fullname1',email='$email1',
          state_of_residence='$states1', skill='$skill1',
          profile_picture='$Profile1',password='$password1' WHERE nocv_id='$nocv_id'") or die(mysqli_error($db));
          require_once("vendor/autoload.php");
          \Tinify\setKey("p4Qyy3sws4WtXJ86t3MqdQfHvlPv9NN2");
          $source=\Tinify\fromFile($tmp);
          $source->toFile($target.$Profile1);
          $_SESSION['nocv_id']=$nocv_id;
          header("Location:profile.php?update=update_successful");
          ob_end_flush();
          }
         
          
    }
    }
          }
          }
          ?>
          <form method="post"align="center"onsubmit="return validate()" onchange='demo()'enctype="multipart/form-data">
          <div class="form-group">
              <label>FullName</label>
              <input type="text" class="form-control" name="name" id="name"value="<?php echo $Fullname; ?>"><span id="error1" class="error">*</span>
              </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" name="email" id="email"value="<?php echo $email; ?>"><span id="error2" class="error">*</span>
              </div>
              
              <div class="form-group">
    				  		    <label>State of residence</label><span id="error4" class="error">*</span>
    				  		    <select class="form-control" id="state" name="state">
    				  		        <option value="state">Select a state</option>
                                    <?php
                                    for($i=0;$i<count($state);$i++){
                                    echo "<option value='$state[$i]'>$state[$i]</option>";
                                     }
                                    ?>
    				  		    </select>
    				  		</div>
              
              <div class="form-group">
    				  		    <label>Skill</label><span id="error5" class="error">*</span>
    				  		    <select class="form-control" id="skill" name="skill">
    				  		        <option value="skill">Select a preferred skill</option>
                                     <?php
                                    while($row=mysqli_fetch_array($query)){
                                        $id=$row['id'];
                                        $skills=$row['name'];
                                        echo "<option value=$id>$skills</option>";
                                    }
                                    ?>
                                    
    				  		    </select>
    				  		</div>
              <div class="form-group">
              <label>Profile Picture</label><span id="error6" class="error">*</span>
              <input type="file" class="form-control" name="file" id="file" value="<?php echo $Profile; ?>">
              </div>
              <div class="form-group">
              <label>New Password</label>
              <input type="password" class="form-control" name="pass" id="pass"value="<?php echo $password; ?>"><span id="error7" class="error">*</span>
              </div>
              <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" class="form-control" name="confirm" id="confirm"value="<?php echo $Fullname; ?>"><span id="error8" class="error">*</span>
              </div>
              <input type="hidden"name="date"value="<?php echo date('Y-m-d h:i:s'); ?>"/>
              <div class="text-center">
              <input type="submit" name="submit" class="btn btn-primary"value="upload">
                  
              </div>
          </form>
          
        </div>
      </div>
    </div>  
</div>
</div>

<?php 
} 
else{
    header("location:index.php");
}
}
}
else{
    header("location:index.php");
}
?>

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

<a href="https://www.instagram.com/nocv.ng/"><i class="fa fa-instagram"></i></a>
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
