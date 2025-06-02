<?php
require("../config.php");
include("./includes/header.php");

// If form submitted
if (isset($_POST["add_user"])) {
    $email = $_POST["email"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $verified = isset($_POST["verified"]) ? 1 : 0;
    $admin = isset($_POST["admin"]) ? 1 : 0;

    // Optional: validate input before inserting

    $sql = "INSERT INTO users (user_email, user_fname, user_lname, user_dob, user_phone, user_verified, user_admin) 
            VALUES (:email, :fname, :lname, :dob, :phone, :verified, :admin)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'email' => $email,
        'fname' => $fname,
        'lname' => $lname,
        'dob' => $dob,
        'phone' => $phone,
        'verified' => $verified,
        'admin' => $admin
    ]);

    $_SESSION["success"] = "User added successfully!";
    echo '<script>window.location.href = "users.php";</script>';
    exit;
}
?>

<section class="content">
  <h2 class="text-center">Add New User</h2>

  <form method="POST" class="w-50 mx-auto">
    <div class="form-group mb-2">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>

    <div class="form-group mb-2">
      <label>First Name</label>
      <input type="text" name="fname" class="form-control" required>
    </div>

    <div class="form-group mb-2">
      <label>Last Name</label>
      <input type="text" name="lname" class="form-control" required>
    </div>

    <div class="form-group mb-2">
      <label>Date of Birth</label>
      <input type="date" name="dob" class="form-control">
    </div>

    <div class="form-group mb-2">
      <label>Phone</label>
      <input type="text" name="phone" class="form-control">
    </div>

    <div class="form-check mb-2">
      <input type="checkbox" name="verified" class="form-check-input">
      <label class="form-check-label">Verified</label>
    </div>

    <div class="form-check mb-4">
      <input type="checkbox" name="admin" class="form-check-input">
      <label class="form-check-label">Admin</label>
    </div>

    <div class="text-center">
      <button type="submit" name="add_user" class="btn btn-primary">Add User</button>
      <a href="users.php" class="btn btn-secondary">Cancel</a>
    </div>
  </form>
</section>

<?php include("./includes/footer.php"); ?>
</body>
</html>
