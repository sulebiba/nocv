<?php
ob_start();
include("connection.php");
include("session.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
    
     if(isset($_GET['token'])){
         $toke=$_GET['token'];
    $selec=mysqli_query($db,"SELECT * FROM blog_title WHERE token ='$toke'");
                while($ro=mysqli_fetch_array($selec)){
                    $headline=$ro['headline'];
                   
                  
                    
                    $toke=$ro['token'];
    echo"<title>$headline</title>";
     }
     }
     
    ?>
<?php
if(isset($_GET['token'])){
         $token=$_GET['token'];
           $select=mysqli_query($db,"SELECT * FROM blog_title WHERE token ='$token'");
                while($row=mysqli_fetch_array($select)){
                    $headlines=$row['headline'];
                   
                    $date=$row['date'];
                    
                    $token=$row['token'];
                    
                    
                    
              $select_content=mysqli_query($db,"SELECT * FROM blog_contents WHERE token ='$token' AND post NOT LIKE '%jpg%' AND post NOT LIKE '%png%'AND post NOT LIKE '%jpeg%'AND post NOT LIKE '%mp4%'AND post NOT LIKE '%.com%'AND post NOT LIKE '%.ng%'
                AND post NOT LIKE '%.edu%'AND post NOT LIKE '%.net%'AND post NOT LIKE '%.org%'AND post NOT LIKE '%.co%'AND post NOT LIKE '%.uk%' LIMIT 0,1");
                    while($row_content=mysqli_fetch_array($select_content)){
                    $pos=$row_content['post'];
                    $post=substr($pos, 0, 156);
echo"<meta name= '$headlines' content='$post'>";
}
}
}
?>
<link href="images/nocv.jpg" rel="icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="stylo.css"rel="stylesheet" />
<link href="blog.css"rel="stylesheet" />
<style>
#invite{
    border: 1px solid black;
    width: 100%;
    background: black;

}
#invite:hover{
    border: 1px solid green;
    width: 100%;
    background:black;
    color: white;

}
#lost{
            border: 1px solid black;
            color: white;
            background:darkred;
            border-radius: 5px;
            
            
        }
    #halima{
        color: darkred
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


<div class="landing-text">
<!--<h1>BOOTSTRAP</h1>
<H3>Learn the basic building blocks</H3>
<a href="#" class="btn btn-default btn-lg">Get Started</a>-->
</div>

<div class="padding">
<div class="container">
<div class="row">
<div class="">


<h2 align='center' id='lost'><font face='Algerian'>WELCOME TO NOCV.NG'S BLOG</font></h2> 
<div id="box">

<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    
                </div>
                <br>
             <?php
    
     if(isset($_GET['token'])){
         $token=$_GET['token'];
    $select=mysqli_query($db,"SELECT * FROM blog_title WHERE token ='$token'");
                while($row=mysqli_fetch_array($select)){
                    $headlines=$row['headline'];
                   
                    $date=$row['date'];
                    
                    $token=$row['token'];
    echo"<h2 align='center'><b>$headlines</b></h2>";
     }
     }
     
    ?>
    <br>
    <br>
    
 <div class="col-lg-12 col-md-3 col-sm-12 col-xs-12" align='center'>
     <?php
     if(isset($_GET['token'])){
         $token=$_GET['token'];
                echo"<img src='posts/$token' class = 'img-responsive' width='100%' height='400px'>";
     }
                ?>
                </div>
    
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                
                <?php
                
                if(isset($_GET['token'])){
         $token=$_GET['token'];
           $select=mysqli_query($db,"SELECT * FROM blog_title WHERE token ='$token'");
                while($row=mysqli_fetch_array($select)){
                    $headlines=$row['headline'];
                   
                    $date=$row['date'];
                    
                    $token=$row['token'];
                    
                    
                    echo"<br><br>";
             $select_content=mysqli_query($db,"SELECT * FROM blog_contents WHERE token ='$token' ORDER BY id asc");
                    while($row_content=mysqli_fetch_array($select_content)){
                    $pos=$row_content['post'];
                    $extention=explode('.',$pos); 
                    $end=end($extention); 
                    if($end =='mp4'  || $end =='MP4'){  
                    echo"<video controls='controls'width='100%' height='240'>
                    <source src='posts/$pos' type='video/mp4'>
                    </video>";    
                    }
                    else if($end =='jpg'  || $end =='JPG'){  
                    echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'>
                <img src='posts/$pos' class = 'img-responsive' width='100%' height='400'>
                </div>
                <br><br>";    
                    }
                else if($end =='jpeg'  || $end =='JPEG'){  
                    echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'>
                <img src='posts/$pos' class = 'img-responsive' width='100%'>
                </div>
                <br><br>";    
                    }
                else if($end =='png' || $end =='PNG' ){  
                    echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'>
                <img src='posts/$pos' class = 'img-responsive' width='100%'>
                </div>
                <br><br>";    
                    }
                        
                else{
                     echo"<div class='col-lg-12 col-md-3 col-sm-12 col-xs-12'><h3>$pos</h3></div>"; 
                     
                }
                }
                }
                }
                  
                 
                ?>
              
                <div class='sharethis-inline-share-buttons'></div>
            </div>
        </div>
        </div>
                </div>
            </div>
        </div>
        <div class="row mx-0">
        <div class="col-12 text-center pb-4 pt-4">
       
        
       
        
            
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

<div class="row mx-0">
        <div class="col-12 text-center pb-4 pt-4">
  
    </div>   
     </div>    
    
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