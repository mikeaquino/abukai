<?php
require_once "database/connection.php";
?>

<?php require 'includes/header.php'; ?>
<?php require 'includes/body_opening.php'; ?>
<?php require 'includes/navbar.php'; ?>

<div class="container mt-4">
  <h2>List of Customers</h2>           
  <table class="table table-hover mt-4">
    <thead>
      <tr>
        <th>Lastname</th>
        <th>Firstname</th>
        <th>Email</th>
        <th>City</th>
        <th>Country</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php
    $stmt = $conn->prepare("SELECT * FROM customers");
    $stmt->execute();
    $customers = $stmt->fetchAll();

    foreach($customers as $customer) {
      ?>
      <tbody>
        <tr>
          <td><?php echo $customer['lastname']; ?></td>
          <td><?php echo $customer['firstname']; ?></td>
          <td><?php echo $customer['email']; ?></td>
          <td><?php echo $customer['city']; ?></td>
          <td><?php echo $customer['country']; ?></td>
          <td><img src="uploads/spaldingball.jpg" width="100%" height="150px"></td>
          <td>
            <a href="edit.php?id=<?php echo $customer['id']; ?>">Edit</a>&nbsp;
            <a href="customer_review.php?email=<?php echo $customer['email']; ?>">Information Review</a>
          </td>
        </tr>
      </tbody>
      <?php
      $conn = null;
    }
    ?>
  </table>
</div>

<?php require 'includes/body_closing.php'; ?>