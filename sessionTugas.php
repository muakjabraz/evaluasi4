<?php
session_start();

if(!isset($_SESSION['log'])){
	
} else {
	header('location:index.php');
};

include 'koneksi.php';

	if(isset($_POST['login']))
	{
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$pass = mysqli_real_escape_string($conn,$_POST['password']);
	$queryuser = mysqli_query($conn,"SELECT * FROM user WHERE username='$username' AND password='$pass");
	$cariuser = mysqli_fetch_assoc($queryuser);
		
		if( password_verify($pass, $cariuser['password']) ) {
			$_SESSION['username'] = $username;
			$_SESSION['log'] = "Logged";
			header('location:index.php');
		} else {
			echo 'Username atau password salah';
			header("location:loginTugas.php");
		}		
	}

?>