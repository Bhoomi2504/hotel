<?php
require("../config.php");
include("./includes/header.php");

// Redirect if no user_id
if (!isset($_GET["user_id"]) || empty($_GET["user_id"])) {
    $_SESSION["error"] = "Invalid user ID.";
    header("Location: users.php");
    exit;
}

$user_id = $_GET["user_id"];

// Fetch user data
$sql = "SELECT * FROM users WHERE user_id = :user_id";
$statement = $pdo->prepare($sql);
$statement->execute(['user_id' => $user_id]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    $_SESSION["error"] = "User not found.";
    header("Location: users.php");
    exit;
}

// Update user if form submitted
if (isset($_POST["update_user"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $verified = isset($_POST["verified"]) ? 1 : 0;
    $admin = isset($_POST["admin"]) ? 1 : 0;

    $sql = "UPDATE users SET user_fname = :fname, user_lname = :lname, user_phone = :phone, user_verified = :verified, user_admin = :admin WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'fname' => $fname,
        'lname' => $lname,
        'phone' => $phone,
        'verified' => $verified,
        'admin' => $admin,
        'user_id' => $user_id
    ]);

    $_SESSION["success"] = "User updated successfully.";
    echo '<script>window.location.href = "users.php";</script>';
    exit;
}
?>

<section class="content">
  <h2 class="text-center">Edit User</h2>

  <form method="POST" class="w-50 mx-auto">
    <div class="form-group mb-2">
      <label>First Name</label>
      <input type="text" name="fname" class="form-control" value="<?= htmlspecialchars($user["user_fname"]) ?>" required>
    </div>

    <div class="form-group mb-2">
      <label>Last Name</label>
      <input type="text" name="lname" class="form-control" value="<?= htmlspecialchars($user["user_lname"]) ?>" required>
    </div>

    <div class="form-group mb-2">
      <label>Phone</label>
      <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($user["user_phone"]) ?>">
    </div>

    <div class="form-check mb-2">
      <input class="form-check-input" type="checkbox" name="verified" <?= $user["user_verified"] ? "checked" : "" ?>>
      <label class="form-check-label">Verified</label>
    </div>

    <div class="form-check mb-4">
      <input class="form-check-input" type="checkbox" name="admin" <?= $user["user_admin"] ? "checked" : "" ?>>
      <label class="form-check-label">Admin</label>
    </div>

    <div class="text-center">
      <button type="submit" name="update_user" class="btn btn-success">Update User</button>
      <a href="users.php" class="btn btn-secondary">Cancel</a>
    </div>
  </form>
</section>

<?php include("./includes/footer.php"); ?>
</body>
</html>
