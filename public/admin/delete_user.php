<?php
require("../config.php");
include("./includes/header.php");

// Redirect if user_id is missing
if (!isset($_GET["user_id"]) || empty($_GET["user_id"])) {
    $_SESSION["error"] = "Invalid user ID.";
    echo '<script>window.location.href = "users.php";</script>';
    exit;
}

$user_id = $_GET["user_id"];

// Fetch the user info
$sql = "SELECT * FROM users WHERE user_id = :user_id";
$statement = $pdo->prepare($sql);
$statement->execute(['user_id' => $user_id]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

// If user not found
if (!$user) {
    $_SESSION["error"] = "User not found.";
    echo '<script>window.location.href = "users.php";</script>';
    exit;
}
?>

<section class="content">
  <h2 class="text-center">Are you sure you want to delete this user?</h2>
  <table class="table table-bordered text-center">
    <tr><td>Email</td><td><?= htmlspecialchars($user["user_email"]) ?></td></tr>
    <tr><td>First Name</td><td><?= htmlspecialchars($user["user_fname"]) ?></td></tr>
    <tr><td>Last Name</td><td><?= htmlspecialchars($user["user_lname"]) ?></td></tr>
  </table>

  <form method="POST">
    <div class="row justify-content-center">
      <div class="col-auto">
        <button name="cancel" class="btn btn-secondary">Cancel</button>
      </div>
      <div class="col-auto">
        <button name="confirm_delete" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </form>

  <?php
  if (isset($_POST["confirm_delete"])) {
      $sql = "DELETE FROM users WHERE user_id = :user_id";
      $statement = $pdo->prepare($sql);
      $statement->execute(['user_id' => $user_id]);
      $_SESSION["success"] = "User deleted successfully.";
      echo '<script>window.location.href = "users.php";</script>';
      exit;
  }

  if (isset($_POST["cancel"])) {
    echo '<script>window.location.href = "users.php";</script>';
      exit;
  }
  ?>
</section>

<?php include("./includes/footer.php"); ?>
</body>
</html>
