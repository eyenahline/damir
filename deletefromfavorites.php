<?php
session_start();
$host = "localhost";
$user = "eyenahline";
$pass = "asdf1234";
$dbnm = "shop";
$connect = mysqli_connect($host, $user, $pass, $dbnm);

$del = mysqli_query($connect, "DELETE FROM favorites WHERE itemid =".$_POST['itemid']." AND login ='".$_SESSION['login']."';"); 
