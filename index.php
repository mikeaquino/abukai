<?php
require_once "database/connection.php";
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
    <h2>Customers</h2>           
    <table class="table table-striped">
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

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>