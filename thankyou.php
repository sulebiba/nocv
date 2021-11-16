<?php
include("connection.php");
$select_u=mysqli_query($db,"SELECT * FROM uploads");
while($row=mysqli_fetch_array($select_u)){
    $nocv=$row['nocv_id'];
$select_i=mysqli_query($db,"SELECT * FROM users WHERE nocv_id='$nocv'");
    while($roww=mysqli_fetch_array($select_i)){
    $email=$roww['email'];
}
}
$from="nocv.ng@nocv.ng";
        $to='mohammedsuleiman96@gmail.com';

        $subject="Thank You";
         $url="https://".$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"])."/";
        $message="Good day, I just wanted to thank everyone for using $url. I am so grateful and Pray all Your dreams come true.\r \n NOTE: $url will never ask you to pay for anything beware of Scammers out there.\r \n Thank you very much and have a lovely week ahead of you.";

        $headers="From:".$from;
        mail($to,$subject,$message,$headers);

?>