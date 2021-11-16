<?php
ob_start();
include("connection.php");
include("session.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Skills</title>
<meta name="description" content="Contact Skilled and Talented Individuals in Nigeria. We offer Services like, Visual Art, Bag Making, Baking
Bead making, Carpentry, Tiling, Gardening, Graphics designing, Hair dressing & styling, Interior decoration, Make up, Manicure & Pedicure, Mobile application development, Photography, Real Estate, Shoemaking, Tailoring, Video Editing, Web development, wedding planning, Fashion designing, food services, Organic skincare Products, Data and Airtime services, Barbing, Soap making, Aluminium windows and doors services,Building services, Delivery services, Writing & poetry services, Digital Marketing, Music production, Land surveying, Disc Jockey, Crafting, Performing Arts, Henna design, Interior / Exterior painting design, lighting design and Home and industrial Cleaning services in Nigeria.  " />
<link href="images/nocv.jpg" rel="icon">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style.css"rel="stylesheet" />
<style>
#invite{
    border: 2px solid black;
    width: 100%;
    background: black;
    border-radius:5px;
    

}
#invite:hover{
    border: 2px solid black;
    width: 100%;
    background:black;
    color: white;
    border-radius:5px;

}
#searc{
        width: 100%;
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
$select_skill=mysqli_query($db,"SELECT * FROM skills ORDER BY 1")or die(mysqli_error($db));
?>

    <form class="form-inline active-cyan-4" method="post">
  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search for a Skill or Talent"
    aria-label="Search" name="search" id="searc">
    
</form>
     <div class="col-md-5 col-lg-12" style="position:relative;margin-top:-16px;">
                        <div class="list-group" id="show-list">
                        
                        </div>
                    </div>
                    <script>
                    $(document).ready(function(){
                     $("#searc").keyup(function(){
                        var searchText = $(this).val();
                         if(searchText!=''){
                             $.ajax({
                             url:'action.php',
                             method:'post',
                             data:{query:searchText},
                             success:function(response){
                                 $("#show-list").html(response);
                             }
                             });
                         }
                         else{
                             $("#show-list").html('');
                         }
                     });
                        $(document).on('click','a',function(){
                           $("#searc").val($(this).text());
                            $("#show-list").html('');
                        });
                    });
                    
                    
                    
                    </script>
<div id="box">
<?php
while($result_skill=mysqli_fetch_array($select_skill)){
    
    $id=$result_skill['id'];
    $name=$result_skill['name'];
    
    $select_image=mysqli_query($db,"SELECT * FROM skillsimages WHERE image_id=$id ORDER BY 1")or die(mysqli_error($db)); 
    
    while($result_skillimages=mysqli_fetch_array($select_image)){
    $idimages=$result_skillimages['image_id'];
    $images=$result_skillimages['images'];
        
   echo"<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
<a href='skill_type.php?name=$name&type=$id'><img src='skills/$images' class='img-res' height='300px' alt='$images in Nigeria'></a>  
  <div class='small'><a href='skill_type.php?name=$name&type=$id'><font size='5' align='center'face='Algerian' id='invite'>$name</font></a></div> 
</div> ";
    
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
if(isset($_POST['submit'])){
    $nocv=$_POST['nocv'];
    
    $select=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv'")or die(mysqli_error($db));
    if(mysqli_num_rows($select)>0){
    if(isset($_SESSION['nocv_id'])){
        //echo"<script>window.open('profile.php?nocv_id=$nocv','self')</script>";
        header("location:profile.php?nocv_id=$nocv");
        ob_end_flush();
    }
       
    else{
        //echo"<script>window.open('search.php?nocv_id=$nocv','self')</script>";
         header("location:search.php?nocv_id=$nocv");
         ob_end_flush();
    }
    
    }
    else{
        echo"<script>alert('user does not exist')</script>";
        
    }
}

?>


<?php mysqli_close($db); ?>