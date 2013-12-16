<?php
include '../init.php';
loggedInLockPage();
if (empty($_POST) == true) {header('location: ../../pages/index.php');}

if (empty($_POST) == false) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) == true || empty($password) == true) {
		$errors[] = 'Enter a Username and Password!';
	} else if (userExists($username) == false) {
		$errors[] = 'This User does not exist!';
	} else {
		$login = login($username, $password);
		if ($login == false) {
			$errors[] = 'Incorrect Password for this User!';
		} else if (userActive($username) == false) {
		$errors[] = 'Activate your account first!';
		} else {
			$_SESSION['userId'] = $login;
			header('location: ../../pages/index.php');
			exit();
		}
	}
} else {
	$errors = "Enter a Username and Password!";
}
	outputErrors($errors);
	
?>