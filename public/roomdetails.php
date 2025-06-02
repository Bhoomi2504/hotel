<?php
require_once("./config.php");
include("./includes/header.php");

   if(!isset($_GET["room_id"])) {
      header("Location: rooms.php");
   }

?>
  <body>
    <style>
      .col-4 {
        background-color: #9db9ba;
        border-radius: 10px;
        overflow-y: auto !important;
        height:800px
        
      }

      .col-8{
        padding-right:50px ;
      }

      img {
        border-radius: 10px;
        width:auto !important;
        height: 500px;
      }

      .container {
        margin-top: 30px;
        
        
      }

      h3{
        /* font-family: 'Amaranth';font-size: 30px; */
        font-weight:bold;
      }

      h4{
        /* font-family: 'Amaranth';font-size: 18px;  */
        margin-left: 14px;
      }

      h2{
        font-family: 'Berkshire Swash';
        font-weight:bold;
      }

      .btn{
        margin-left: 14px;
        margin-top:10px
        
      }

      button{
        width:200px;
        border-radius: 7px !important;
      }

      p{
        font-family: 'Amaranth';
      }

      .review{
        padding: 0px 10px 0px 10px;
        margin:15px 10px 0px 10px;
        border-radius: 10px;
      }

     
    </style>
    <header>
      <?php include("./includes/navbar.php"); ?>
    </header>
    <div class="container">
   <div class="row">
      <div class="col col-8 col-md-8">
         <div class="row">
         <?php
               $sql = "SELECT * FROM rooms WHERE room_id = :room_id";
               $stmt = $pdo->prepare($sql);
               $stmt->execute(array(
                  ":room_id" => $_GET["room_id"],
               ));
               $row = $stmt->fetch(PDO::FETCH_ASSOC);
         ?>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner" id="room_carousel">
                  <div class="carousel-item active">
                     <img class="d-block w-100" src="<?= IMAGEROOT.$row["room_image"]; ?>" alt="First slide">
                  </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
         <div class="row">
            <div class="col">
               <h3><?= $row["room_name"] ?></h3>
            </div>
            <div class="col" style="margin-top: 13px; margin-left:45px; font-family: 'Amaranth';font-weight:bold; font-size:20px">Starts from:something here...</div>
         </div>
         <div class="row">
            <div class="col" style="color:rgb(6, 74, 95);">
               <p><i class="fa fa-bed" aria-hidden="true"></i> <?= $row["room_beds"] ?> bedroom</p>
            </div>
            <div class="col" style="color:rgb(5, 83, 107);">
               <p><i class="fa fa-shower" aria-hidden="true"></i> <?= $row["room_name"] ?> bathroom</p>
            </div>
            <div class="col" style="color:rgb(5, 81, 104);">
               <p><i class="fa fa-square" aria-hidden="true"></i> 1250 sq.ft</p>
            </div>
            <div class="col" style="color:rgb(6, 82, 105);">
               <p><i class="fa fa-lock" aria-hidden="true"></i> Highly Secured</p>
            </div>
         </div>
         <div class="row">
            <h4 style="color:rgb(12, 119, 185)">DESCRIPTION</h4>
         </div>
         <div class="row">
            <div class="col">
               <p style=color:black>
               A Slice of Heaven at Sunrise Paradise Resort

My stay at Sunrise Paradise Resort was nothing short of magical.
 From the moment I arrived, I was welcomed with warm smiles and excellent hospitality. The resort is perfectly nestled amidst breathtaking natural beauty — think golden sunrises, lush greenery, and serene ocean views that calm your soul.

               </p>
            </div>
         </div>
         <div class="row">
            <a class="btn btn-primary" href="reservation.php" style= "background-color:#094970">Book now</a>
         </div>
      </div>
      <div class="col col-4 col-md-4">
         <h3 style="color:rgb(12, 100, 155)"><b>Reviews</b></h3>
         <div class="row">
            <div class="review bg-white">
               <p style="color:rgb(12, 119, 185)"><b>Users</b></p>
               <P style=color:black>
               The rooms were spacious, spotlessly clean, and tastefully decorated with all the modern amenities. I especially loved the private balcony where I could sip my morning coffee while watching the sun rise — truly paradise!
            </div>
         </div>
         <div class="row">
            <div class="review bg-white">
               <p style="color:rgb(9, 115, 180)"><b>Users</b></p>
               <P style=color:black>What stood out most was the staff. Every member of the team went out of their way to ensure we had a comfortable and memorable stay. The food at the in-house restaurant was also fantastic — fresh, flavorful, and a great mix of local and international cuisines.

               </P>
            </div>
         </div>       
      </div>
   </div>
</div>
    <?php include("./includes/footer.php"); ?>
    <script>
      $(document).ready(function() {

         var images = [
            "https://i.pinimg.com/originals/c6/60/24/c66024ea79527d9bbafe79ed171558b9.jpg",
            "https://housely.com/wp-content/uploads/2016/07/Hotel-Room.jpg",
            "https://images.fineartamerica.com/images-medium-large/nice-hotel-room-atiketta-sangasaeng.jpg"
         ];

         images.forEach(item => $("#room_carousel").append(
            `
            <div class="carousel-item">
                     <img class="d-block w-100" src="${item}">
                  </div>
            `
         ));


        $("nav").eq(0).addClass("bg-dark");
        $("nav").eq(0).addClass("navbar-dark");

        $("footer").eq(0).addClass("bg-dark");
        $("footer").eq(0).addClass("text-light");
        // bg-dark navbar-dark 
    });
    </script>
</body>
</html>
