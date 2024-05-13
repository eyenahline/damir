<?php
session_start();
$host = "localhost";
$user = "eyenahline";
$pass = "asdf1234";
$dbnm = "shop";
$connect = mysqli_connect($host, $user, $pass, $dbnm);

$sel = mysqli_query($connect, "SELECT * FROM favorites WHERE itemid =".$_POST['itemid']." AND login ='".$_SESSION['login']."';"); 
$data = mysqli_fetch_array($sel);
if(!$data){
	$ins = mysqli_query($connect, "INSERT INTO favorites(itemid, login) VALUES (".$_POST['itemid'].",'".$_SESSION['login']."');");
}
