<?php
require("../config.php");
include("./includes/header.php");
?>
<section class="content">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Users List</h2>
    <a href="add_user.php" class="btn btn-primary">Add New User</a>
  </div>

  <div class="text-danger">
    <?php
    if (isset($_SESSION["error"])) {
        echo $_SESSION["error"];
        unset($_SESSION["error"]);
    }
    if (isset($_SESSION["success"])) {
        echo '<div class="text-success">' . $_SESSION["success"] . '</div>';
        unset($_SESSION["success"]);
    }
    ?>
  </div>

  <table id="dtVerticalScrollExample" class="table table-striped table-bordered small" cellspacing="0">
    <thead>
      <tr>
        <th>Email</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Verified</th>
        <th>DOB</th>
        <th>Phone</th>
        <th>Admin</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM users";
      $statement = $pdo->prepare($sql);
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

      foreach ($rows as $row) {
          ?>
          <tr>
            <td><?= htmlspecialchars($row["user_email"]) ?></td>
            <td><?= htmlspecialchars($row["user_fname"]) ?></td>
            <td><?= htmlspecialchars($row["user_lname"]) ?></td>
            <td><?= $row["user_verified"] == 1 ? "Yes" : "No" ?></td>
            <td><?= htmlspecialchars($row["user_dob"]) ?></td>
            <td><?= htmlspecialchars($row["user_phone"]) ?></td>
            <td class="<?= $row["user_admin"] ? "" : "text-center" ?>">
              <?= $row["user_admin"] == 1 ? "Admin" : "-" ?>
            </td>
            <td>
              <a href="delete_user.php?user_id=<?= $row["user_id"]; ?>" class="text-danger">
                <span class="fa fa-trash"></span>
              </a>
              &nbsp;/&nbsp;
              <a href="edit_user.php?user_id=<?= $row["user_id"]; ?>" class="text-success">
                <span class="fa fa-pencil"></span>
              </a>
            </td>
          </tr>
          <?php
      }
      ?>
    </tbody>
  </table>
</section>

<?php include("./includes/footer.php"); ?>
</body>
</html>
