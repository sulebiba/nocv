<?php
include("connection.php");
include("session.php");
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Send Message</title>
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
    
#truth{
   color:green;
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
    
    <h3 align="center" id="header2"><b id="country">Contact me For your Products or Services<br><div id="truth">(DO NOT pay in advance but be TRUE TO YOUR WORDS that you are in need of what I offer)</div></b></h3> 
   
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
         /* function validate(){
              var phone= document.getElementById("phone").value;
              var message= document.getElementById("message").value;
              
              if(phone=="" || phone==" " ){
                alert("Please put your phone number");
                 return false;
                 }
            else if(isNaN(phone)){
	       alert("Please put a Phone number");
	        return false;
             }
              else if(phone.length<11){
                alert("number must not be less than 11 characters");
                 return false;
                 }
              else if(phone.length>11){
                alert("number must not be more than 11 characters");
                 return false;
                 }
              else if(message=="" || message==" " ){
                  alert("please write something");
                  return false;
              }
              else if(message.length>250){
                alert("Message too long");
                 return false;
                 }
              else{
                  return true;
              }
              
          }
          
          */
          </script>
          <form method="post" align="center"onsubmit="return validate()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="form-group">
              <label>Phone No:</label>
              <input type="text" class="form-control" name="phone" placeholder="Enter your Phone number" id="phone">
              </div>
          <div class="form-group">
              <label>Email (Optional):</label>
              <input type="text" class="form-control" name="email"placeholder="Optional (If you are interested in updates)">
              </div>
              <div class="form-group">
              <label>Message</label>
              <textarea name="message" class="form-control" id="message" placeholder="Contact me For your Products or Services" ></textarea>
              </div>	
              <input type="hidden" class="form-control" name="date" id="date" value="<?php echo date('Y-m-d h:i:s'); ?>">
              <div class="text-center">
              <input type="submit" name="submit" class="btn btn-primary" value="send">
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
if(isset($_GET['nocv_id'])){
$nocv_id=$_GET['nocv_id'];
}
if(isset($_POST['submit'])){
    
    $date=mysqli_real_escape_string($db,$_POST['date']);
    $phone=mysqli_real_escape_string($db,$_POST['phone']);
    $message=mysqli_real_escape_string($db,$_POST['message']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    
    $length = strlen($phone);
    if(empty($phone)){
    echo"<script>alert('please enter a phone number')</script>";
}
else if(!preg_match("/^[0-9]*$/",$phone)){
   echo"<script>alert('please enter only numbers')</script>"; 
}
else if($length < 11 || $length > 11){
    echo"<script>alert('phone number should be 11 digits')</script>";
}
else if((!empty($email)) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo"<script>alert('please enter a valid email Address')</script>";
}
else if(empty($message)){
    echo"<script>alert('please write a message')</script>";
}
else{
    $insert= mysqli_query($db,"INSERT INTO contactuser (phone,message,date,nocv_id) VALUES ('$phone','$message',
    '$date','$nocv_id')")or die (mysqli_error($db));
    
    $insert_email=mysqli_query($db,"INSERT INTO customeremail (email) VALUES ('$email')")or die (mysqli_error($db));
    
    $selectgov=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv_id'");
    while($rowgov=mysqli_fetch_array($selectgov)){
        $emailgov=$rowgov['email'];
    }
     $from="nocv.ng@nocv.ng";
        $to=$email;

        $subject="Nocv.ng";
        $message="Thank You for patronizing nocv.ng. You will receive a response in less than 24hrs. Always remember, your satisfaction is our satisfaction.\r \nIncase you are not satisfied please report the service renderer in the Report section on the website.";

        $headers="From:".$from;
        mail($to,$subject,$message,$headers);
        
         $from2="nocv.ng@nocv.ng";
        $to2=$emailgov;

        $subject2="Nocv.ng";
        $message2="Good day, You have been contacted by someone for your services. Please be polite and honest with your customers.Also Participate in your Forum, it increases your chances of people contacting you\r \n Please log in to https://nocv.ng/log_in.php Thanks and God bless.";

        $headers2="From:".$from2;
        mail($to2,$subject2,$message2,$headers2);
    
    echo "<script>alert('Submission Successful. You will receive a response in less than 48 hrs')</script>";
    
}
}
?>

<?php mysqli_close($db); ?>