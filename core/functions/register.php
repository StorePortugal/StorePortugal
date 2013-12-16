<?php
loggedInLockPage();

if (empty($_POST) === false) {
	$required = array('username', 'password', 'repeatPassword', 'firstName', 'email');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required) === true) {
			$errors[] = 'Please fill the required fields.';
			break 1;
		}
	}
	
	if (empty($errors) === true) {
		if (userExists($_POST['username']) === true) {
			$errors[] = 'Sorry, that username already exists.';
		}
		
		if (preg_match("/\\s/", $_POST['username']) == true) {
			$errors[] = 'Your username can not contain any spaces.';
		}
		
		if (strlen($_POST['password']) < 6) {
			$errors[] = 'Your password must be at least 6 characters long.';
		}
		
		if ($_POST['password'] !== $_POST['repeatPassword']) {
			$errors[] = 'Your passwords do not match.';
		}
		
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'A valid email adress is required.';
		}
		
		if (emailExists($_POST['email']) === true) {
			$errors[] = 'Sorry, that email is already in use.';
		}
	}
}
?>

<?php
	if (isset($_GET['success']) && empty($_GET['success'])) {
	} else {
	echo '<h1 class="title">Register</h1>';
	};
?>

<?php
	if (isset($_GET['success']) && empty($_GET['success'])) {
		echo '<h3 style="color:rgb(50,150,50)"> You have been succefully registered! </h3>';
	} else {
	if (empty($_POST) === false && empty($errors) === true) {
		$registerData = array(
			'username' 			=> $_POST['username'],
			'password' 			=> $_POST['password'],
			'firstName' 		=> $_POST['firstName'],
			'lastName' 			=> $_POST['lastName'],
			'email' 			=> $_POST['email']
		);
		
		registerUser($registerData);
		header('location: ../../index.php?success');
		exit();
		
	} else if (empty($errors) === false) {
		echo outputErrors($errors);
	}
}?>