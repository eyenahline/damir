<?php
session_start();
$host = "localhost";
$user = "eyenahline";
$pass = "asdf1234";
$dbnm = "shop";
$connect = mysqli_connect($host, $user, $pass, $dbnm);

$sel = mysqli_query($connect, "SELECT * FROM cart WHERE itemid =".$_POST['itemid']." AND login ='".$_SESSION['login']."';"); 
$data = mysqli_fetch_array($sel);
if($data['amount'] > 1){
	$upd = mysqli_query($connect, "UPDATE cart SET amount =".($data['amount']-1)." WHERE itemid =".$_POST['itemid']." AND login ='".$_SESSION['login']."';");
}
else{
	$del = mysqli_query($connect, "DELETE FROM cart WHERE itemid =".$_POST['itemid']." AND login ='".$_SESSION['login']."';");
}