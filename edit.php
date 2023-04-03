<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
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

  <div class="container">
    <h2 class="mt-4">Edit Information</h2>
    <form action="action/save.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $id;?>">
      <div class="form-group">
        <label for="lname">Lastname:</label>
        <input type="text" class="form-control" id="lname" name="lname" required>
      </div>
      <div class="form-group">
        <label for="fname">Firstname:</label>
        <input type="text" class="form-control" id="fname" name="fname" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="country">Country:</label>
        <select class="form-control" id="country" name="country" required>
          <option value="">Choose a country</option>
          <option value="United States">United States</option>
          <option value="Canada">Canada</option>
          <option value="Germany">Germany</option>
          <option value="France">France</option>
        </select>
      </div>
      <div class="form-group">
        <label for="city">City:</label>
        <input type="text" class="form-control" id="city" name="city" required>
      </div>
      <div class="form-group">
        <label for="img">Select image:</label>
        <input type="file" class="form-control" id="img" name="img" accept="image/*" required>
      </div>
      <button type="submit" name="save" class="btn btn-primary">Save</button>
      <button type="button" class="btn btn-secondary">Cancel</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>