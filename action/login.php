<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'user' && $password == 'pass') {
	header('Location: ../customers.php');
} else {
	header('Location: ../');
}
?>