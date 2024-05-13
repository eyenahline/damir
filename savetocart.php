<?php
session_start();
$host = "localhost";
$user = "eyenahline";
$pass = "asdf1234";
$dbnm = "shop";
$connect = mysqli_connect($host, $user, $pass, $dbnm);

$sel = mysqli_query($connect, "SELECT * FROM cart WHERE itemid =".$_POST['itemid']." AND login ='".$_SESSION['login']."';"); 
$data = mysqli_fetch_array($sel);
if($data){
	$upd = mysqli_query($connect, "UPDATE cart SET amount =".($data['amount']+1)." WHERE itemid =".$_POST['itemid']." AND login ='".$_SESSION['login']."';");
}
else{
	$ins = mysqli_query($connect, "INSERT INTO cart(itemid, login, amount) VALUES (".$_POST['itemid'].",'".$_SESSION['login']."',1);");
}