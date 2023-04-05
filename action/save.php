<?php
require_once "../database/connection.php";

$lastName = $_POST['lname'];
$firstName = $_POST['fname'];
$email = $_POST['email'];
$country = $_POST['country'];
$city = $_POST['city'];

move_uploaded_file($_FILES["img"]["tmp_name"],"uploads/" . $_FILES["img"]["name"]);
$filePath ="uploads/".$_FILES["img"]["name"];
$id = $_POST['id'];


$sql = "UPDATE customers
		SET lastname = :lastname, firstname = :firstname, email = :email, country = :country, city = :city, file_path = :file_path
		WHERE id = :id";
$result = $conn->prepare($sql);
$result->bindParam(":lastname", $lastName);
$result->bindParam(":firstname", $firstName);
$result->bindParam(":email", $email);
$result->bindParam(":country", $country);
$result->bindParam(":city", $city);
$result->bindParam(":file_path", $filePath);
$result->bindParam(":id", $id);

if ($result->execute()) {
	header('Location: customers.php');
} else {
	echo "Error!";
}

$conn = null;
?>