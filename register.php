<?php
ob_start();
include("session.php");
include("connection.php");
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Register</title>
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
    
#country2{
    color: red;
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
    <h1 align="center" id="header"><b><font face='Algerian'>WELCOME TO NO-CV</font></b></h1> 
    <h4 align="center" id="header2"><i id="country"><b><font face='Algerian'>Create your Page</font></b></i></h4> 
       <h4 align="center" id="header2"><i id="country2"><b><font face='Algerian'>NOTE: Fill all the sections</font></b></i></h4> 

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
          var phone=document.getElementById("phone").value;
          var state=document.getElementById("state").value;
          var skill=document.getElementById("skill").value;
          var pass=document.getElementById("pass").value;
          var confirm=document.getElementById("confirm").value;
          var error1=document.getElementById('error1');
          var error2=document.getElementById("error2");
          var error3=document.getElementById("error3");
          var error4=document.getElementById("error4");
          var error5=document.getElementById("error5");
          var error6=document.getElementById("error6");
          var error7=document.getElementById("error7");
          var error8=document.getElementById("error8");
             
          if(name== "" || name==" "){
           error1.style.visibility="visible";
            return false; 
             }
          else if(!name.match(/^[a-zA-Z ]+$/)){
           error1.style.visibility="visible";
            return false; 
             }
           else if(email== "" || email==" "){
            error2.style.visibility = "visible";
            return false; 
             }
            else if(phone== "" || phone==" "){
            error3.style.visibility = "visible";
            return false; 
             }
            else if(isNaN(phone)){
	        error3.style.visibility = "visible";
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
          <form method="post"align="center"onsubmit="return validate()" onchange='demo()' enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="form-group">
              <label>FullName</label>
              <input type="text" class="form-control" name="name" id="name"placeholder="Name required "><span id="error1" class="error">*</span>
              </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email Required"><span id="error2" class="error">*</span>
              </div>
              <div class="form-group">
              <label>Phone No</label>
              <input type="text" class="form-control" name="phone" id="phone"placeholder="Number required"><span id="error3" class="error">*</span>
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
    				  		    <label>Skill / talent </label><span id="error5" class="error">*</span>
    				  		    <select class="form-control" id="skill" name="skill">
    				  		        <option value="skill">Select a preferred skill / talent</option>
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
              <label>New Password</label>
              <input type="password" class="form-control" name="pass" id="pass"placeholder="New Password"><span id="error7" class="error">*</span>
              </div>
              <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" class="form-control" name="confirm" id="confirm"placeholder="Re-type Password"><span id="error8" class="error">*</span>
              </div>
              <input type="hidden"name="date"value="<?php echo date('Y-m-d h:i:s'); ?>"/>
              <div class="text-center">
              <input type="submit" name="submit" class="btn btn-primary"value="register">
                  
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
$name=mysqli_real_escape_string($db,$_POST['name']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$phone=mysqli_real_escape_string($db,$_POST['phone']);
$state=mysqli_real_escape_string($db,$_POST['state']);
$skill=mysqli_real_escape_string($db,$_POST['skill']);
$file='nocv.jpg';
$pass=mysqli_real_escape_string($db,(md5($_POST['pass'])));
$confirm=md5($_POST['confirm']);
$status = "not Activated";
$nocv_id="nocv".mt_rand().substr($name,-3,2);
$date = $_POST['date'];   
$length = strlen($phone);
if(empty($name)){
    echo"<script>alert('please enter your name')</script>";
}
else if(!preg_match("/^[a-zA-z ]*$/",$name)){
   echo"<script>alert('please enter only alphabets')</script>"; 
}
else if(empty($email)){
   echo"<script>alert('please enter your email Address')</script>"; 
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo"<script>alert('please enter a valid email Address')</script>";
}
else if(empty($phone)){
    echo"<script>alert('please enter a phone number')</script>";
}
else if(!preg_match("/^[0-9]*$/",$phone)){
   echo"<script>alert('please enter only numbers')</script>"; 
}
else if($length < 11 || $length > 11){
    echo"<script>alert('phone number should be 11 digits')</script>";
}
else if($state == 'state'){
  echo"<script>alert('please select a state')</script>";  
}
else if($skill == 'skill'){
  echo"<script>alert('please select a skill')</script>";  
}
else if(empty($_POST['pass'])){
   echo"<script>alert('please enter your password')</script>";  
}
else if(empty($_POST['confirm'])){
   echo"<script>alert('please confirm your password')</script>";  
}
else{
$select=mysqli_query($db,"SELECT * FROM users WHERE email ='$email'OR phone_no=$phone")or die (mysqli_error($db));
 if(mysqli_num_rows($select)>0){
      echo"<script>alert('Email/Phone exists')</script>";
 }
else if($pass!==$confirm){
    
    echo"<script>alert('Passwords do not match')</script>";
}
    else{
        

        
        $insert=mysqli_query($db,"INSERT INTO users (Fullname,email,phone_no,state_of_residence,skill,profile_picture,password,nocv_id,
        status,date) VALUES ('$name','$email','$phone','$state','$skill','$file','$pass','$nocv_id','$status','$date')")or die (mysqli_error($db));
        
        move_uploaded_file($tmp,$target.$file);
        $_SESSION['nocv_id']=$nocv_id;
        header("Location:uploads.php?register=Registeration_successful");
        ob_end_flush();
        
        $from="nocv.ng@nocv.ng";
        $to=$email;

        $subject="Nocv.ng";
        $message="Thank You for registering with nocv.ng. Please upload Pictures of your work on the website and Also Login frequently everyday to check your NOCV inbox incase you have been contacted by someone in need of your services. Please participate in your Forum to exchange ideas and become better at what you engage in\r \n Have fun with nocv.ng";

        $headers="From:".$from;
        //mail($to,$subject,$message,$headers);
        
    }
    


    
    
}
    
  
}

?>



<?php mysqli_close($db); ?>