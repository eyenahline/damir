<?php
	session_start();
	$host = "localhost";
	$user = "eyenahline";
	$pass = "asdf1234";
	$dbnm = "shop";
	$connect = mysqli_connect($host, $user, $pass, $dbnm); //connection db
	$username = $_POST['regUsername'];
	$password = $_POST['regPassword'];

if (isset($_POST['signup'])){
	$sel = mysqli_query($connect, "SELECT * FROM users WHERE login = '$username';");
	if (mysqli_fetch_array($sel)){
		echo "<script>alert('That username already exists')</script>";
		echo "<script>document.location.href = 'registration.php';</script>";
	}
	else{
	$sql = mysqli_query($connect, "INSERT INTO users(login, password) VALUES ('$username', '$password')"); //insertion of pass and user
	if($sql){
		$_SESSION['login'] = $username;
		header("Location:index.php");
		}
	}
}

if (isset($_POST['signin'])){                                     
	$username = $_POST['authUsername'];
	$password = $_POST['authPassword'];
	$sel = mysqli_query($connect, "SELECT * FROM users WHERE login = '$username';"); // checking existing user
	$data = mysqli_fetch_array($sel);
		if($data['password']==$password){ //giving a pass if password if in db
			$_SESSION['login'] = $username;
			header("Location:index.php");
		
	}
	else{
		echo "<script>alert('Something is wrong')</script>";
		echo "<script>document.location.href = 'registration.php';</script>";
	}
}
