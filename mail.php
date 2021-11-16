<?php
$email="mohammedsuleiman96@gmail.com";
$from="nocv.ng@nocv.ng";
$to=$email;

$subject="Nocv.ng";
$message="Thank You for registering with nocv.ng. Please upload Pictures of your work and Also Login frequently to check your NOCV inbox incase you have been contacted by someone in need of your services.\r \n Have fun with nocv.ng";

$headers="From:".$from;
mail($to,$subject,$message,$headers);
?>