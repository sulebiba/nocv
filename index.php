<?php
ob_start();
include("connection.php");
include("session.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Home</title>
<meta name="description" content="ARE YOU A SKILLED/TALENTED NIGERIAN tired of waiting for
this country to provide JOBS for you? Then you are 
    in the right place. NO-CV is a site that connects you
     to various skilled/talented Nigerians who are very good
    at one skill,talent,or the other regardless of their educational 
    qualifications.If you have specialized services to offer, all you have to do is register your preferred skill or talent  
    from tailoring to baking and many more. So that you can be contacted by people who are
    in need of your skill/talent. The Idea of this site is to create a job network so that skilled/talented youths can be easily reached
    by individuals across the country who may require these services.For those people, all they have to do is come to this website.For the skilled and talented, this is an ultimate money spinner.<br>
    ALL JOBS DO NOT REQUIRE CV" />
<link href="images/nocv.jpg" rel="icon">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style.css"rel="stylesheet" />
<style>
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
    
<form class="form-inline active-cyan-4" method="post">
  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="nocv1166542627ay"
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
                             url:'action2.php',
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
    <h4 align="center" id="header2"><i id="country"><b><font face='Algerian'>A HOME TO THE SKILLED AND TALENTED</font></b></i></h4> 
   
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
<?php
 $select_image=mysqli_query($db,"SELECT * FROM skillsimages ORDER BY RAND()")or die(mysqli_error($db)); 
 $select_image2=mysqli_query($db,"SELECT * FROM skillsimages ORDER BY RAND()")or die(mysqli_error($db));
 $select_image3=mysqli_query($db,"SELECT * FROM skillsimages ORDER BY RAND()")or die(mysqli_error($db));
 $select_image4=mysqli_query($db,"SELECT * FROM skillsimages ORDER BY RAND()")or die(mysqli_error($db));
    while($result_skillimages=mysqli_fetch_array($select_image)){
    $idimages=$result_skillimages['image_id'];
    $images=$result_skillimages['images'];
    }
    while($result_skillimages=mysqli_fetch_array($select_image2)){
    $idimages2=$result_skillimages['image_id'];
    $images2=$result_skillimages['images'];
    }
    while($result_skillimages=mysqli_fetch_array($select_image3)){
    $idimages3=$result_skillimages['image_id'];
    $images3=$result_skillimages['images'];
    }
    while($result_skillimages=mysqli_fetch_array($select_image4)){
    $idimages4=$result_skillimages['image_id'];
    $images4=$result_skillimages['images'];
    }
?>
<?php echo"<a href='skill_type.php?type=$idimages'><img src='skills/$images' height='300px' alt='$images' /></a>"; ?>
</div>
<div class="col-sm-6 text-center">
<h2><font face='Algerian'>About NO-CV</font></h2>
<p class="lead">ARE YOU A SKILLED/TALENTED NIGERIAN tired of waiting for
this country to provide JOBS for you? Then you are 
    in the right place. NO-CV is a site that connects you
     to various skilled/talented Nigerians who are very good
    at one skill,talent,or the other regardless of their educational 
    qualifications.If you have specialized services to offer, all you have to do is <a href="register.php">register</a> your preferred skill or talent  
    from tailoring to baking and many more. So that you can be contacted by people who are
    in need of your skill/talent. When your registeration is complete a profile with your <b>unique id</b> will be created which you will then use to <b>upload pictures, audios and videos</b> of what you
    engage in. These pictures, audios and videos will be viewed by various nigerians who will then contact you for 
    your services to be rendered. 
 </p><p class="lead">The Idea of this site is to create a job network so that skilled/talented youths can be easily reached
    by individuals across the country who may require these services.For those people, all they have to do is come to this website.For the skilled and talented, this is an ultimate money spinner.<br>
    ALL JOBS DO NOT REQUIRE CV</p>
</div>
</div>
</div>

<div class="padding">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<h4><b><font face='Algerian'>OUR DESTINY IS IN OUR HANDS</font></b></h4>
    <p>The more <b>pictures, audios and videos</b> of your work you post, the more likely your
    skill or talent will be spotted by someone in need of your service.</p>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<?php echo"<a href='skill_type.php?type=$idimages2'><img src='skills/$images2' height='300px' alt='$images2' /></a>"; ?>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<h4><b><font face='Algerian'>Search</font></b></h4>
<p>Search for skilled/talented Nigerians in the <a href="skill.php">skill or talent</a>
    link
</p>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<?php echo"<a href='skill_type.php?type=$idimages3'><img src='skills/$images3' height='300px' alt='$images3' /></a>"; ?>
</div>

</div>
</div>
</div>
<div class="padding">
<div class="container">
<div class="row">
<div class="col-sm-6">
<h4><b><font face='Algerian'>Hello users,</font></b></h4>
<p> Take control of your destiny don't let your skill/talent go to waste. Upload multiple
    pictures,audios and videos of you practicing your skill/talent also participate in the <b>Forum</b> in which your skill or talent falls in.
    Provide advice to your colleagues practicing the same skill or talent as you in your forum.</p>
<p>Have fun doing what you love the most at nocv.ng users..................
    <br>ALL THE BEST </p>
    </div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<?php echo"<a href='skill_type.php?type=$idimages4'><img src='skills/$images4' height='300px' alt='$images4 in Nigeria' /></a>"; ?>
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
if(isset($_GET['delete'])){
echo"<script>alert('Succesfully Deleted Please Re Login')</script>";
}
?>
<?php
if(isset($_GET['delete_post'])){
echo"<script>alert('Succesfully Deleted Please Re Login')</script>";
}
?>

<?php mysqli_close($db); ?>