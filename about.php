<?php
ob_start();
include("connection.php");
include("session.php");
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>About</title>
<meta name="description" content="NO-CV is a site that connects you to various skilled/talented nigerians who are very good
    at one skill,talent,or the other regardless of their educational 
    qualifications.If you have specialized services to offer all you have to do is register your preferred skill or talent
    from tailoring to baking and many more. So that you can be contacted by people who are
    in need of your skill/talent. It is also a website that makes it possible for the skilled and talented to interact with each other, exchange ideas and get better at what they do. The interactions takes place in the various Forums which are automatically created for each individual after registering" />
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
<div class="landing-text">
<!--<h1>BOOTSTRAP</h1>
<H3>Learn the basic building blocks</H3>
<a href="#" class="btn btn-default btn-lg">Get Started</a>-->
</div>

<div class="padding">
<div class="container">
<div class="row">
<div class="">


<h2 align='center' id='lost'><font face='Algerian'>Welcome to the About Page</font></h2>



<div id="box">

 
<div class="col-sm-3">
<div id="left">
<div id="leftpic">

    
<img src="images/nocv.jpg" width="100%" height="410px">

 
</div>
<br>
     <br>
     <table class="col-sm-3 text-center">
    
     <tr>
         <th class="col-sm-3 text-center"><b id="greeen">Founder:</b></th><th class="col-sm-3">Mohammed Suleiman</th>
     </tr>
    <tr>
         <th class="col-sm-3 text-center"><b id="greeen"><br><br>DOB:</b></th><th class="col-sm-3"><br><br>October 12, 1996</th>
     </tr>
    <tr>
         <th class="col-sm-3 text-center"><b id="greeen"><br><br>Profession:</b></th><th class="col-sm-3"><br><br>Web Developer and Digital Marketer</th>
     </tr>
   
       <tr>
         <th class="col-sm-3 text-center"><b id="greeen"><br><br>Hobbies:</b></th><th class="col-sm-3"><br><br>Playing and watching movies</th>
     </tr>
     
         <tr>
         <th class="col-sm-3 text-center"><b id="greeen"><br><br>Favourite Quote:</b></th><th class="col-sm-3"><br><br>The hardest choices require the strongest wills</th>
     </tr> 
            
     </table> 
    
</div>
</div>
<div class="col-lg-6 col-md-3 col-sm-12 col-xs-12">
<div id="right">
<h1><font face='Algerian'align='center'>About <b>Founder</b></font></h1>
<p>I am a web developer who studied Computer Science in Babcock university.I had this idea of a job network immediately I finished school and decided to put it into practice with the goal of helping skilled/talented Nigerians out there display their work so that people who are in need of their services can easily see it. It is also a website that makes it possible for the skilled and talented to interact with each other, exchange ideas and get better at what they do.</p>
<h1><font face='Algerian'align='center'>About <b>Nocv.ng</b></font></h1>
<p>NO-CV is a site that connects you to various skilled/talented nigerians who are very good
    at one skill,talent,or the other regardless of their educational 
    qualifications.If you have specialized services to offer all you have to do is <a href="register.php">register</a> your preferred skill or talent
    from tailoring to baking and many more. So that you can be contacted by people who are
    in need of your skill/talent. It is also a website that makes it possible for the skilled and talented to interact with each other, exchange ideas and get better at what they do. The interactions takes place in the various Forums which are automatically created for each individual after registering</p>
<div id="right2">

    





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

<?php mysqli_close($db); ?>
