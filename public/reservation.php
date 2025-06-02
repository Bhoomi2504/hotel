<?php
include("./config.php");
// Check if user is already logged in
if (!isLoggedIn()) {
    header("Location: login.php");
    exit;
}

if (isset($_GET["check_in_date"])) {
    $check_in_date = $_GET["check_in_date"];
    $check_out_date = $_GET["check_out_date"];
    $no_children = $_GET["children"];
    $no_adults = $_GET["adults"];
}
?>

<?php include("./includes/header.php"); ?>
<style>
   .nav1 {
      background: linear-gradient(45deg,  #062b42, #234e5f, #49747b,#9db9ba, #062b42) !important;
   }
</style>
<body>
    <?php include("./includes/navbar.php"); ?>

<section id="reservation" style="background-color:#dee9e9">
   <div class="container mt-5">
      <div class="row">
         <div class="col-md-5">
            <h1 style="color: #062b42"><b>Make your reservation</b></h1>
            <p>
              Our hotel is self-certified to follow a series of
              precautionary measures to make your hotel stay safe and
              healthy.
            </p>
         </div>
         <div class="col-md-7">
            <form method="POST" action="" id="reservation_details">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group">
                        <span class="form-label">Check In</span>
                        <input class="form-control" name="check_in_date" id="check_in_date" type="text" required
                        value="<?php if (isset($check_in_date)) { echo htmlspecialchars($check_in_date); } ?>" />
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <span class="form-label">Check out</span>
                        <input class="form-control" name="check_out_date" id="check_out_date" type="text" required
                        value="<?php if (isset($check_out_date)) { echo htmlspecialchars($check_out_date); } ?>" />
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <span class="form-label">Room</span>
                  <select class="form-control" name="room_id" id="room_id" required>
                     <option value="">Select Room</option>
                     <?php
                        $sql = "SELECT * FROM rooms WHERE room_booked = 0";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($rows as $row) {
                     ?>
                        <option value="<?= htmlspecialchars($row["room_id"]); ?>"><?= htmlspecialchars($row["room_name"]); ?></option>
                     <?php
                        }
                     ?>
                  </select>
               </div>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label for="no_adults">Adults</label>
                        <input type="number" class="form-control" name="no_adults" id="no_adults"
                               min="0" max="150"
                               value="<?php if (isset($no_adults)) { echo htmlspecialchars($no_adults); } ?>" />
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label for="no_children">Children</label>
                        <input type="number" class="form-control" name="no_children" id="no_children"
                               min="0" max="150"
                               value="<?php if (isset($no_children)) { echo htmlspecialchars($no_children); } ?>" />
                     </div>
                  </div>
               </div>
               <div class="form-btn">
                  <button class="btn btn-primary submit-btn" name="confirm_booking"
                    style="background:linear-gradient(45deg,  #062b42, #234e5f, #49747b,#9db9ba, #062b42)">Continue to payment</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>

<?php include("./includes/footer.php"); ?>

<script>
  // Initialize datepickers
  $("#check_in_date").datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 0,
    numberOfMonths: [1, 2]
  });

  $("#check_out_date").datepicker({
    dateFormat: "yy-mm-dd",
    minDate: 1,
    numberOfMonths: [1, 2]
  });

  // Enforce min/max on Adults and Children inputs while typing
  function enforceMinMax(el) {
    if (el.value === "") return;
    let val = parseInt(el.value, 10);
    if (isNaN(val)) {
      el.value = "";
      return;
    }
    if (val < 0) el.value = 0;
    if (val > 150) el.value = 150;
  }

  $("#no_adults, #no_children").on("input", function () {
    enforceMinMax(this);
  });

  // Submit handler with validation
  $("#reservation_details").submit(function(e) {
    e.preventDefault();

    // Validate Adults and Children fields
    var adults = parseInt($("#no_adults").val(), 10);
    var children = parseInt($("#no_children").val(), 10);

    if (
      isNaN(adults) || adults < 0 || adults > 150 ||
      isNaN(children) || children < 0 || children > 150
    ) {
      alert("Please enter valid number of adults and children (0 to 150).");
      return;
    }

    var formData = new FormData(this);
    formData.append("action", "reservation");

    $.ajax({
      url: "core/reservation_controller.php",
      type: "POST",
      data: formData,
      success: function(data) {
        console.log(data);
        // Assuming data is JSON, parse it
        try {
          var res = JSON.parse(data);
          if (res.error == 1) {
            alert(res.message || "An error occurred.");
          } else {
            window.location.href = "payment.php";
          }
        } catch (err) {
          alert("Unexpected server response.");
          console.error(err);
        }
      },
      error: function(xhr, status, error) {
        console.error(error);
        alert("An error occurred submitting the form.");
      },
      cache: false,
      contentType: false,
      processData: false
    });
  });

  // Add nav classes on page load
  $(document).ready(function() {
    $("nav").eq(0).addClass("nav1 navbar-dark");
  });
</script>
</body>
</html>
