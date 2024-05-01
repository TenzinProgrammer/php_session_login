<?php
session_start();
 $connection = mysqli_connect('localhost', 'root', '', 'tenzin');
 if(isset($_POST['submit'])) {
 	$username = mysqli_real_escape_string($connection, trim($_POST['username']));
 	$password = mysqli_real_escape_string($connection, trim($_POST['password']));
 	if(!empty($username) && !empty($password)) {
 		$query = "select name, password from users where name = '$username'";
 		$result = mysqli_query($connection, $query);
 		if($result) {
 			//fetch user password
 			$user_record = mysqli_fetch_assoc($result);
 			//hash the user filled password and compare
 			$hashed_password = hash('sha256', $password);
 			if($hashed_password == $user_record['password']) {
 				echo 'login success.';
 				$_SESSION['name'] = $user_record['name'];
 				$_SESSION['id'] = $user_record['id'];
 				setcookie('user_session', session_id(), time() + (30*24 * 60 * 60), '/');
 				header("Location: page2.php");
 				exit();
 			 } else {
 			 	echo 'incorrect password';
 			 	header("Location: page.php");
 			 	exit();
 			 }
 			} else {
 				echo 'user not found, try again.';
 			}
 		} else {
 			echo 'Error executing, try again later.';
 		}
 	} else {
 		echo 'Enter username and password';
 	}
?>