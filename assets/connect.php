<?php
ob_start();
session_start();
error_reporting(0);
$con = mysqli_connect("localhost","root","","tree");
//if($con){ echo "connect";}
?>