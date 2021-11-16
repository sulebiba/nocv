<?php
session_start();
unset($_SESSION['nocv_id']);
header("Location:index.php");
?>