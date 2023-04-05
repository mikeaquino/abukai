<?php require 'includes/header.php'; ?>
<?php require 'includes/body_opening.php'; ?>
<?php require 'includes/navbar.php'; ?>

<div class="container">
  <h2 class="mt-4">Create New Entry</h2>
  <form action="action/create.php" method="post" enctype="multipart/form-data">
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

<?php require 'includes/js_closing.php'; ?>
<?php require 'includes/body_closing.php'; ?>