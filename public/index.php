<?php
require_once("./config.php");
include("./includes/header.php");
?>
<body>
  <header id="home-header">
    <div id="home-header--bg-image">
      <?php include("./includes/navbar.php"); ?>
      <div class="home-header--title">
        <div class="container p-5">
          <h1 style="color:rgb(255, 255, 255);">Sunrise Paradise Resort</h1>
          <h2 style="font-size: 3rem; color:#074687"><b>Find the best deals</b></h2>
          <h3 id="reservation-form">for your next trip</h3>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section id="home-form">
      <div class="wrapper">
        <form id="find-available-rooms-form">
          <div class="form-group">
            <label for="check-in">Check in</label>
            <input
              type="hidden"
              id="check-in"
              class="form-control"
              name="check-in"
            />
            <button id="check-in-button" class="btn input-button">
              Check in date
            </button>
          </div>
          <div class="form-group">
            <label for="check-out">Check out</label>
            <input
              type="hidden"
              id="check-out"
              class="form-control"
              name="check-out"
              value=""
            />
            <button id="check-out-button" class="btn input-button">
              Check out date
            </button>
          </div>
          <div class="form-group">
            <label for="form-dropdown">Guests</label>
            <button
              class="btn dropdown-toggle"
              id="form-dropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Add guests
            </button>
            <ul class="dropdown-menu" aria-labelledby="form-dropdown">
              <li class="dropdown-menu-item">
                <div class="form-group form-group-nested">
                  <label for="count-adults">Adults</label>
                  <input
                    type="number"
                    class="form-control"
                    name="count-adults"
                    id="count-adults"
                    placeholder="Ages 13 or above"
                    min="0"
                    max="150"
                  />
                </div>
                <div class="form-group form-group-nested">
                  <label for="count-children">Children</label>
                  <input
                    type="number"
                    class="form-control"
                    name="count-children"
                    id="count-children"
                    placeholder="Ages 1-12"
                    min="0"
                    max="150"
                  />
                </div>
              </li>
            </ul>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="find-rooms">
              Search
            </button>
          </div>
        </form>
      </div>
    </section>

    <!-- Featured Rooms -->
    <section id="featured-rooms">
      <div class="container my-5 py-5">
        <div class="section-title">
          <h2>Today's best deals</h2>
        </div>
        <div class="row custom-room-cards">
          <div class="col col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./media/images/rooms/picture2.avif" alt="" />
              </div>
              <div class="card-footer">
                <div class="footer-head">
                  <div class="label">Premium</div>
                  <div class="price">$500/day</div>
                </div>
                <div class="footer-body">Daimond Suite</div>
              </div>
            </div>
          </div>
          <div class="col col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./media/images/rooms/picture3.avif" alt="" />
              </div>
              <div class="card-footer">
                <div class="footer-head">
                  <div class="label">Premium</div>
                  <div class="price">$350/day</div>
                </div>
                <div class="footer-body">Standard Suite</div>
              </div>
            </div>
          </div>
          <div class="col col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./media/images/rooms/picture5.webp" alt="" />
              </div>
              <div class="card-footer">
                <div class="footer-head">
                  <div class="label">Premium</div>
                  <div class="price">$250/day</div>
                </div>
                <div class="footer-body">Deluxe Suite</div>
              </div>
            </div>
          </div>
          <div class="col col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="./media/images/rooms/picture4.avif" alt="" />
              </div>
              <div class="card-footer">
                <div class="footer-head">
                  <div class="label">Premium</div>
                  <div class="price">$120/day</div>
                </div>
                <div class="footer-body">Single Suite</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="decoration-accomodation" style="background-color:#295363">
      <div class="container my-5 py-5">
        <div class="row">
          <div class="col-md-5">
            <div class="content">
              <div class="section-title">
                <h2 style="color:#ffd37b">Choose the perfect accomodation</h2>
              </div>
              <p>
                Finding the right room can make all the difference in your travel
                experience. Whether you're on a relaxing vacation, a quick business
                trip, or a family getaway, we offer a range of accommodation options
                tailored to your needs.
              </p>
            </div>
          </div>
          <div class="col-md-7 card-container">
            <div class="card">
              <div class="card-body">
                <img src="./media/images/backgrounds/picture.1.jpg" alt="" />
              </div>
              <div class="card-footer">Pools</div>
            </div>
            <div class="card">
              <div class="card-body">
                <img src="./media/images/backgrounds/room6.webp" alt="" />
              </div>
              <div class="card-footer"> Recreational Activities</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="premium-section">
      <div class="container my-5 py-5">
        <div class="row">
          <div class="col-md-7">
            <div class="card-container">
              <div class="card">
                <div class="card-body">
                  <img src="./media/images/rooms/picture.avif" alt="" />
                </div>
                <div class="card-footer">
                  <div class="footer-head">
                    <div class="label">Premium</div>
                    <div class="price">$500/day</div>
                  </div>
                  <div class="footer-body">Deluxe Suite</div>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <img src="./media/images/rooms/picture2.avif" alt="" />
                </div>
                <div class="card-footer">
                  <div class="footer-head">
                    <div class="label">Premium</div>
                    <div class="price">$350/day</div>
                  </div>
                  <div class="footer-body">Standard Suite</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="content">
              <div class="section-title">
                <h2>Premium deals for your premium needs</h2>
              </div>
              <p>
                Indulge in luxury without breaking the bank. Our handpicked premium
                packages offer top-tier comfort, exclusive amenities, and
                unforgettable experiences—all at unbeatable prices. Whether it's a
                romantic getaway, a business trip, or a special celebration, we’ve
                got the perfect deal tailored just for you.

                Because you deserve the best—at the best price.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="home-banner">
      <div class="banner">
        <div class="container">
          <div class="jumbotron">
            <h6>Our newsletter</h6>
            <h2>Become a member and enjoy flat 30% discounts on Booking.</h2>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include("./includes/footer.php"); ?>

  <script>
    // Enforce min/max on number inputs while typing
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

    // Attach input event to adults and children fields
    $("#count-adults, #count-children").on("input", function () {
      enforceMinMax(this);
    });

    // Form submit validation
    $("#find-available-rooms-form").submit(function (event) {
      event.preventDefault();
      var indate = $("#check-in").val();
      var outdate = $("#check-out").val();
      var adults = parseInt($("#count-adults").val(), 10);
      var children = parseInt($("#count-children").val(), 10);

      if (
        indate !== "" &&
        indate !== null &&
        !isNaN(adults) &&
        adults >= 0 &&
        adults <= 150 &&
        !isNaN(children) &&
        children >= 0 &&
        children <= 150
      ) {
        window.location.href = `reservation.php?check_in_date=${indate}&check_out_date=${outdate}&adults=${adults}&children=${children}`;
      } else {
        alert("Please enter valid number of adults and children (0-150).");
      }
    });
  </script>
</body>
</html>
