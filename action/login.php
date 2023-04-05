<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'testengineer' && $password == 'testEngrPass123!!') {
	header('Location: ../customers.php');
} else {
	header('Location: ../');
}
?>