<?php
ob_start();
include("connection.php");
include("session.php");
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Announcement</title>
<meta name="description" content="Whatever Posted here can be seen by every member registered under your section and should be used to pass information related to your skill or talent" />
<meta name="viewport"content="width-device-width,initial-scale=1" />
<link href="images/nocv.jpg" rel="icon">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="main.js"></script>
<link href="stylo.css"rel="stylesheet" />
<link href="posts.css"rel="stylesheet" />

<style>
 #searc{
        width: 100%;
    }     
#invite:hover{
    border: 1px solid green;
    width: 100%;
    background:black;
    color: white;

}  

        #lost{
            border: 1px solid black;
            color: red;
            background: black;
            border-radius: 5px;
            border: hidden;
            padding: 50px;
            
            
            
        }
         u{
        color: skyblue;
    }
    tbody{
        background: black;
    }
    thead{
        background: black;
    }
    th{
        color: white;
    }
    #red{
        color: red;
    }
    #black{
        color: black;
    }
   table, th, td {
  border: 2px solid white;
}
    
    #found{
        color: skyblue;
    }

 #or{
        color:red;
    }    
    
    #banner{
border:1px solid black;
width:100%;
height:90px;
background:black;
}

#oval{
border:1px solid black;
border-radius:50px;
width:100px;
height:50px;
margin-top:-30px;
float:right;
margin-right:10px;
background:white;
}

#porn{
    margin-top:12px;
    margin-left:15px;
    color:black;
  
}

a:hover{
    
      text-decoration:none;
}

#advert{
   color:white;
   margin-top:20px;
    margin-left:15px;
}  
#shift{
    margin-left:15px;
} 

#foundd{
        color: white;
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
echo"<h3 id='lost'><span id='foundd'><font face='Algerian' align='center'>$name in Nigeria</font></span><br><font face='Algerian'><br><span id='found'>Whatever Posted here can be seen by every member registered under your section and should be used to pass information related to your skill or talent.</span></font></h3>";
}
}
}
?>
<br><p id='shift'><b>This is a General Forum. You can use it to pass information you feel will be useful to everyone under your Skill / Talent section. You can also use this section to ask questions or post Topics for other members to see and answer.<br><br><u>HOW IT WORKS</u><br><br>STEP 1: Write a Question / Post/ Topic of Discussion in the Form below<br><br>STEP 2: Click on the Post or the Visit button at the far end.<br> It takes you to where the discussion takes place<br><br>STEP 3: Use the form there to Interact with the Question / Post / Topic<br><br><u>WHAT THE BUTTONS DO</u><br><br><span id='red'>DELETE :</span> This is irreversible. Use this button only when you are satisfied with the response of people<br><br><span id='red'>CLOSE :</span> This is irreversible. It prevents people from dropping comments in your forum section. <br>Use this button only when you are satisfied with peoples response but you don't want to delete <br>the post incase you need it later<br><br><span id='red'>VISIT :</span> This button takes you directly to your own post. It will be of use to you when there are too much posts and you can't find yours<br><br><span id='red'>SEARCH BAR :</span> You might not find what you are looking for so Use this to search for Posts / Topics / Questions. If it exists, you will see it  </b><br></p>
<div id="box">
    
 
    
<div class='table-responsive'>
<br>
<br>
<div class="col-sm-6">
  <div id='scroll-nocv3'>     

</div>
<form class="form-inline active-cyan-4" method="post">
  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search for a post / discussion"
    aria-label="Search" name="search" id="searc">
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
                             url:'action5.php',
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

</form>
</div>    
    
<br>
<br>
<table border='2' class="table table-dark">
                <thead class="thead-dark">
               <tr class='bg-fef2e0'>
                   <th id='black'>Post</th><th id='black'>Post Status</th>
            </tr> 
            </thead>
<?php


if(isset($_GET['nocv_id'])){
    $nocv_id=$_GET['nocv_id'];

 if(isset($_GET['page'])){
                $page=$_GET['page'];
                }
                else{
                    $page=1;
                }
                $num_per_page=10;
                $start_from = ($page-1)*10;    
    
$select=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv_id' ORDER BY 1 DESC LIMIT 0,1")or die(mysqli_error($db));
while($row=mysqli_fetch_array($select)){
$skill=$row['skill'];
$select2=mysqli_query($db,"SELECT * FROM announcement WHERE skill='$skill' ORDER BY 1 DESC LIMIT $start_from,$num_per_page")or die(mysqli_error($db));
while($row2=mysqli_fetch_array($select2)){
$name=$row2['Fullname'];
$comment=$row2['comment'];
$comment=str_replace("'", '',$row2['comment']);
$nocv_id=$row2['nocv_id'];
$status=$row2['status'];
$skill=$row2['skill'];
$date=$row2['date'];
$chat=substr($nocv_id,-3,2);
 
$getcomments=mysqli_query($db,"SELECT * FROM general WHERE start_chat='$nocv_id'");
$getreplies=mysqli_query($db,"SELECT * FROM general_reply WHERE start_chat='$nocv_id'");
$nocomments=mysqli_num_rows($getcomments);
$noreplies=mysqli_num_rows($getreplies);
$total = $nocomments + $noreplies;
    if($status=='Closed'){
 echo"<tbody><tr class='bg-fef2e0'>
                <th><h4><a href='general.php?nocv_id=$nocv_id&start_chat=$nocv_id&chat=$chat&comment=$comment&status=$status'> $comment <i class='glyphicon glyphicon-comment'></i>$total</a></h4></th><th id='black'>$status</th><th><a href='general.php?nocv_id=$nocv_id&start_chat=$nocv_id&chat=$chat&comment=$comment&status=$status'class='btn btn-primary glyphicon glyphicon-search'>Visit</a></th>
         </tr> </tbody>";

     }
    else{
        
       echo"<tbody><tr class='bg-fef2e0'>
                <th><h4><a href='general.php?nocv_id=$nocv_id&start_chat=$nocv_id&chat=$chat&comment=$comment&status=$status'> $comment <i class='glyphicon glyphicon-comment'></i>$total</a></h4></th><th id='red'>$status</th><th><a href='general.php?nocv_id=$nocv_id&start_chat=$nocv_id&chat=$chat&comment=$comment&status=$status'class='btn btn-primary glyphicon glyphicon-search'>Visit</a></th>
         </tr> </tbody>"; 
         
         
    
        
    }
}
     }
}
    
    ?>
</table>
    
     <div class="row mx-0">
        <div class="col-12 text-center pb-4 pt-4">
        <?php
        if(isset($_GET['nocv_id'])){
        $noc = $_GET['nocv_id'];
         
        $selectt=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$noc' ORDER BY 1 DESC LIMIT 0,1");
        while($rowl=mysqli_fetch_array($selectt)){
        $skilll=$rowl['skill'];
        }
        $q=mysqli_query($db,"SELECT * FROM announcement WHERE skill ='$skilll'");
        $total_q=mysqli_num_rows($q);
        $total_page=ceil($total_q/$num_per_page);
        
        if($page>1){
            
          echo"<a href='announcement.php?nocv_id=$noc&page=".($page-1)."' class='btn btn-danger'>previous</a>";   
        }
        
        for($i=1;$i<$total_page;$i++){
          //echo"<a href='announcement.php?nocv_id=$noc&page=".$i."' class='btn btn-primary'>$i</a>";   
        }
        
        
        if($i>$page){
            
          echo"<a href='announcement.php?nocv_id=$noc&page=".($page+1)."' class='btn btn-primary'>next</a>";   
        }
        }
        ?>
        
       
        
            
             </div>
        </div>
    
    </div>
<script>
function validate(){
 var review=document.getElementById("review").value;
 if(review=="" || review==" "){
     alert("write something");
     return false;
    
    }
    else if(review.length>250){
                alert("Comment too long");
                 return false;
                 }
    else{
        return true;
    }
}
function check_val(){
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
</script>
<?php
if(isset($_SESSION['nocv_id'])){
$nocv_id=$_SESSION['nocv_id'];
$selectann=mysqli_query($db,"SELECT * FROM announcement WHERE nocv_id='$nocv_id'");
if(mysqli_num_rows($selectann)<1){
echo"
<form onsubmit='return validate()'method='post'action='".htmlspecialchars($_SERVER["PHP_SELF"])."'>
<textarea name='message' class='form-control' onKeyUp='check_val()' placeholder='write something'id='review'required></textarea>
<input type='submit' name='submits' class='btn btn-primary' value='submit'>
";
}
else{
    echo"<br><br>
<form onsubmit='return validate()'method='post'>
<input type='submit' name='delete' class='btn btn-danger' value='delete'>
";
 echo"
<form onsubmit='return validate()'method='post'>
<input type='submit' name='update' class='btn btn-primary' value='Close'>
";
echo"
<form onsubmit='return validate()'method='post'>
<input type='submit' name='visit' class='btn btn-primary' value='visit'>
";
echo"
<form onsubmit='return validate()'method='post'>
<input type='submit' name='replied' class='btn btn-primary' value='Posts I replied'>
";
}
}
?>
<input type='hidden' name='date' class='btn btn-primary' value="<?php echo date('Y-m-d h:i:s') ?>">
</form>




    </div>
    
   
    
</div>


</div>
</div>
</div>



<div class="padding">
<div class="container">
<div class="row">

    
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





<?php
if(isset($_SESSION['nocv_id'])){
    $nocv_id2=$_SESSION['nocv_id'];


if(isset($_POST['submits'])){
$selectall=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv_id2'");
while($rowl=mysqli_fetch_array($selectall)){
$name=$rowl['Fullname'];
$skill=$rowl['skill'];
}
$comment2=mysqli_real_escape_string($db,$_POST['message']); 
$badcomment = array("sex","escort","ashawo","butt","nude","naked","penis","vargina","cum","squirt","gun","ammunition","drug","pussy","bet","gamble","gambling",
"fuck","anal","paedophile","porn","erotic","bomb","explosives","bastard","retard","idiot","fool","breast","murder","kill","rape","gay","lesbian","die","death","prostitute","prostitution","masturbate","masturbation","olosho");
$replacecomment = array("No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No","No");
$comment2=str_replace("'", '',$_POST['message']);
$comment2=str_replace($badcomment,$replacecomment,$comment2);
$date2=$_POST['date']; 
$answer='Open';
if(empty($comment2)){
     echo"<script>alert('Please write something')</script>";
 }
 else{
$insert2=mysqli_query($db,"INSERT INTO announcement (Fullname,comment,nocv_id,status,skill,date) VALUES ('$name','$comment2','$nocv_id2','$answer','$skill','$date2')")or die(mysqli_error($db));
header("Location:announcement.php?nocv_id=$nocv_id2#nocv3");
}
}
}
?>

<?php
if(!isset($_SESSION['nocv_id'])){
    header("Location:index.php");
}
?>


 <?php
    if(isset($_SESSION['nocv_id'])){
        $delete=$_SESSION['nocv_id'];
    
    if(isset($_POST['delete'])){
        $delete_q=mysqli_query($db,"DELETE FROM announcement WHERE nocv_id='$delete'");
        header("Location:announcement.php?nocv_id=$delete#nocv3");
        $delete_g=mysqli_query($db,"DELETE FROM general WHERE start_chat='$delete'");
        header("Location:announcement.php?nocv_id=$delete#nocv3");
        $delete_r=mysqli_query($db,"DELETE FROM general_reply WHERE start_chat='$delete'");
        header("Location:announcement.php?nocv_id=$delete#nocv3");
    }
    }
    ?>

<?php
    if(isset($_SESSION['nocv_id'])){
        $update=$_SESSION['nocv_id'];
    
    if(isset($_POST['update'])){
        $update_q=mysqli_query($db,"UPDATE announcement SET status ='Closed' WHERE nocv_id='$update'");
        header("Location:announcement.php?nocv_id=$update#nocv3");
    }
    }
    ?>

<?php
    if(isset($_SESSION['nocv_id'])){
        $visit=$_SESSION['nocv_id'];
        $chatvisit=substr($visit,-3,2);
    if(isset($_POST['visit'])){
        $visit_q=mysqli_query($db,"SELECT * FROM announcement WHERE nocv_id='$visit'");
        while($visitrow=mysqli_fetch_array($visit_q)){
           
            $vcomment=$visitrow['comment'];
            $vstatus=$visitrow['status'];
        }
        header("Location:general.php?nocv_id=$visit&start_chat=$visit&chat=$chatvisit&comment=$vcomment&status=$vstatus");
    }
    }
    ?>

<?php
    if(isset($_SESSION['nocv_id'])){
        $replied=$_SESSION['nocv_id'];
    if(isset($_POST['replied'])){
        header("Location:replied.php?nocv_id=$replied");
    }
    }
    ?>

<?php
if(isset($_POST['submit'])){
    $nocv=mysqli_real_escape_string($db,$_POST['nocv']);
    
    $select=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv'")or die(mysqli_error($db));
    if(mysqli_num_rows($select)>0){
    if(isset($_SESSION['nocv_id'])){
        //echo"<script>window.open('profile.php?nocv_id=$nocv','self')</script>";
       header("location:search_announcement.php?forum_id=$nocv");
        ob_end_flush();
    }
       
    else{
        //echo"<script>window.open('search.php?nocv_id=$nocv','self')</script>";
        header("location:search_announcement.php?forum_id=$nocv");
         ob_end_flush();
    }
    
    }
    else{
        echo"<script>alert('user does not exist')</script>";
        
    }
}

?>



<?php mysqli_close($db); ?>