<?php
ob_start();
include('connection.php');
date_default_timezone_set('Africa/Lagos');
include('session.php');
?> 
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>nocv</title>
<meta name="viewport"content="width-device-width,initial-scale=1" />
<link href="images/nocv.jpg" rel="icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style.css"rel="stylesheet" />
   <script src = "/scripts/jquery.min.js"></script>
      <script src = "/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
   <link href="style.css" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
     <link href="stylo.css"rel="stylesheet" />
    <link href="style.css" rel="stylesheet" type="text/css"/>
 
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
<li><a class="active" href="blog_admin_delete.php">Delete</a></li>

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
<br>
<br>
<br>
 <div class="container">
  <form method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Post Headline</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="headline" placeholder="Headline"required class='form-control'>
      </div>
    </div>
    <br>
   
      <br>
      <div class="row">
      <div class="col-25">
        <label for="lname">Headline Picture</label>
      </div>
      <div class="col-75">
        <input type="file" id="file" name="file" required class='form-control'>
      </div>
    </div>
    <br>
      <div class="row">
      <div class="col-25">
        <label for="lname">Post date</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="date" placeholder="month,day and year"required class='form-control'>
      </div>
    </div>
      <br>
   
      <br>
    <input type="hidden" value="<?php echo date('Y-m-d h:i:s');?>" name="datet">
    <div class="row">
      <input type="submit" value="Post" name='submit' class='form-control'>
    </div>
  </form>
</div> 
     </body>
</html>

<?php

if(isset($_POST['submit'])){
    
    $headline=mysqli_real_escape_string($db,$_POST['headline']);
    $author=mysqli_real_escape_string($db,$_POST['author']);
    $date=mysqli_real_escape_string($db,$_POST['date']);
    $category=mysqli_real_escape_string($db,$_POST['category']);
    $datet=$_POST['datet'];
    $file=$_FILES['file']['name'];
$extention=explode('.',$file);
$end=end($extention);
$token=md5(uniqid(rand(),true));
$file =$token.".".$end;
$tmp=$_FILES['file']['tmp_name'];
    $target="posts/";
    
    
    $insert=mysqli_query($db,"INSERT INTO blog_title (headline,date,token) VALUES ('$headline','$date','$file')") or die(mysqli_error($db));
    move_uploaded_file($tmp,$target.$file);
    header("location:blog_admin_upload_file.php?date=$date&headline=$headline&token=$file");
}


?>

<?php
if(!isset($_SESSION['email'])){
    header("Location:index.php");
}
?>
