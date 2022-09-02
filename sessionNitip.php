<?php
 include "koneksi.php";
 if (isset($_POST['login'])) {
	 $username = $_POST['username'];
	 $password = md5($_POST['password']);
	 $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
	 $result = mysqli_query($connect,$query);
	 $fechResult = mysqli_fetch_assoc($result);
	 $rowcount = mysqli_num_rows($result);
	 if ($rowcount>0) {
		 session_start();
		 $_SESSION['username'] = $username;
		 $_SESSION['role'] = $fechResult['role'];
		 $_SESSION['status'] = 'login';
		 header("location:index.php");
	 }
	 else {
		 echo 'Username atau password salah';
		 header("location:loginTugas.php");
	 }
 }
 mysqli_close($connect);
?>
