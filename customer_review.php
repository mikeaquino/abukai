<?php
require_once "database/connection.php";

if (isset($_GET['email'])) {
	$email = $_GET['email'];
}

$sql = "SELECT * FROM customers WHERE email = :email";
$result = $conn->prepare($sql);
$result->bindParam(":email", $email);

$result->execute();
$customer = $result->fetch();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Abukai - Project</a>
  </nav>

  <div class="container mt-4">
  	<div class="card">
  		<div class="card-header card bg-info text-white">Customer - Information Review</div>
  		<div class="card-body">
  			<div class="clearfix">
  				<div class="float-right">
  					<h5 class="mt-4">Mini Calculator</h5>
  					<form Name="calc">
  						<table border=2>
  							<tr>
  								<td colspan=4>
  									<input type=text Name="display">
  								</td>
  							</tr>
  							<tr>
  								<td>
  									<input type=button value="0" OnClick="calc.display.value+='0'">
  								</td>
  								<td>
  									<input type=button value="1" OnClick="calc.display.value+='1'">
  								</td>
  								<td>
  									<input type=button value="2" OnClick="calc.display.value+='2'">
  								</td>
  								<td>
  									<input type=button value="+" OnClick="calc.display.value+='+'">
  								</td>
  							</tr>
  							<tr>
  								<td>
  									<input type=button value="3" OnClick="calc.display.value+='3'">
  								</td>
  								<td>
  									<input type=button value="4" OnClick="calc.display.value+='4'">
  								</td>
  								<td>
  									<input type=button value="5" OnClick="calc.display.value+='5'">
  								</td>
  								<td>
  									<input type=button value="-" OnClick="calc.display.value+='-'">
  								</td>
  							</tr>
  							<tr>
  								<td>
  									<input type=button value="6" OnClick="calc.display.value+='6'">
  								</td>
  								<td>
  									<input type=button value="7" OnClick="calc.display.value+='7'">
  								</td>
  								<td>
  									<input type=button value="8" OnClick="calc.display.value+='8'">
  								</td>
  								<td>
  									<input type=button value="x" OnClick="calc.display.value+='*'">
  								</td>
  							</tr>
  							<tr>
  								<td>
  									<input type=button value="9" OnClick="calc.display.value+='9'">
  								</td>
  								<td>
  									<input type=button value="C" OnClick="calc.display.value=''">
  								</td>
  								<td>
  									<input type=button value="=" OnClick="calc.display.value=eval(calc.display.value)">
  								</td>
  								<td>
  									<input type=button value="/" OnClick="calc.display.value+='/'">
  								</td>
  							</tr>
  						</table>
  					</form>
  				</div><br>
  				<div class="float-left">
  					<p><b>Last name: </b><?php echo $customer['lastname']; ?></p>
  					<p><b>First name: </b><?php echo $customer['firstname']; ?></p>
  					<p><b>Email: </b><?php echo $customer['email']; ?></p>
  					<p><b>City: </b><?php echo $customer['city']; ?></p>
  					<p><b>Country: </b><?php echo $customer['country']; ?></p>
  				</div><br>
  			</div>
  		</div>
  	</div>
  </div>
  

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>