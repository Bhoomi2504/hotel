<?php
require_once("./config.php");
include("./includes/header.php");
?>
<body>
    <style>
    .nav1{
        background: linear-gradient(45deg, #062b42, #234e5f, #49747b, #062b42);;
    }
    .site-section{
        padding:4em 0;
        background-color: #062b42;
    }

    /* .details{{
        background-color:white !important;
    }} */

    p,ul{
        color:black;
    }

    li{
        margin-left:20px;
    }
.row{
    border:2px soild  #062b42;
}
    h1{
        font-family:Sofia;
        color: #062b42;
        font: size 35px;
    }

    h3{
        font-family:Sofia;
        color: #062b42;

    }

    .imgt{
        color:  #062b42;
    }

    #image{
        border-radius:50%;
        border:3px solid #062b42 ;
    }
    .circle-border{
     border-radius: 50%;
    }

    a .fa-facebook-square.social-bordered, .fa-facebook-square.social-bordered{
     border-color:  #062b42;
     color:rgb(255, 255, 255);
     background-color: rgba(59,89,153,0);
     -webkit-transition: color .7s, background-color .7s;
     transition: color .7s, background-color .7s;
}
 a .fa-facebook-square.social-bordered:hover, .fa-facebook-square.social-bordered:hover{
     color: #fff;
     background-color: #062b42;
}

a .fa-github.social-bordered, .fa-github.social-bordered{
     border-color: #333;
     color: #333;
     background-color: rgba(59,89,153,0);
     -webkit-transition: color .7s, background-color .7s;
     transition: color .7s, background-color .7s;
}
 a .fa-github.social-bordered:hover, .fa-github.social-bordered:hover{
     color: #fff;
     background-color: #333;
}

a .fa-linkedin.social-bordered, .fa-linkedin.social-bordered{
     border-color:#062b42 ;
     color: #062b42;
     background-color: rgba(59,89,153,0);
     -webkit-transition: color .7s, background-color .7s;
     transition: color .7s, background-color .7s;
}
 a .fa-linkedin.social-bordered:hover, .fa-linkedin.social-bordered:hover{
     color: #fff;
     background-color: #062b42;
}

    </style>
  <header id="home">
      <?php include("./includes/navbar.php"); ?>
    </div>
  </header>
  <div class="site-section bg-light">
    <div class="container ">
        <div class="row align-items-center">
            <div class= "col-md-6 mb-5">
                <p><img src="public\media\images\aboutus\7.jpg"  id="image" width=450 height=420></p>
            </div>
            <div class= "col-md-6 mb-5">
                <div>
                    <h1><b>About Us</b></h1>
                    <hr>
                </div> 
                <p>
                Welcome to Sunrise Paradise Resort, your ultimate destination for relaxation, luxury, and unforgettable memories.
Nestled in the heart of nature, our resort offers a perfect escape from the hustle and bustle of daily life. Whether you're seeking a romantic getaway, a fun family vacation, or a peaceful retreat, Sunrise Paradise Resort has something for everyone.
                <ul>
                <li>Core Values and Heritage</li>
                <li>Diversity and Inclusion</li>
                <li>Sustainability and Social Impact</li>
                </ul></p>
                <p>
                We believe every moment of your stay should be special. That’s why we’re committed to making your experience with us truly memorable.

Come discover your paradise…
Sunrise Paradise Resort – Where every sunrise brings new memories.
                </p>
            </div>
        </div>
    </div>
  </div>
  <div class="site-section">
    <div class="container ">
        <div class="row">
            <div class="col-md-6 mx-auto text-center ">
                <h1 style="color:white">Testimonials</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="details text-center bg-light">
                    <img src="./media/images/aboutus/alan.jpg" width="300" height="250" alt="Aaron" style="border-radius:30px">
                    <div class="p-5">
                        <h3>Amit Sharma</h3>
                        <p>
                        "An unforgettable experience!"
“Sunrise Paradise Resort was exactly what we needed for a relaxing weekend. The views were breathtaking, the food was delicious, and the staff was incredibly kind. We’re definitely coming back!”
                        </p>
                        <div class="row">
                        <!-- <ul class="ftco-social"> -->
                        <div class="col">
                        <a href="#"><i class="fa fa-facebook-square social-bordered circle-border"></i></a>
                        </div>
                        <div class="col">
                        <a href="#"><i class="fa fa-github social-bordered circle-border"></i></a>
                        </div>
                        <div class="col">
                        <a href="#"><i class="fa fa-linkedin social-bordered circle-border"></i></a>
                        </div>
                            
                        <!-- </ul> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="details text-center bg-light">
                <img src="./media/images/aboutus/images.jpg" width="300" height="250" alt="Aaron" style="border-radius:30px">
                    <div class="p-5">
                        <h3>Priya & Rohan Mehta</h3>
                        <p>
                        "The perfect honeymoon spot!"
                        “We stayed here for our honeymoon, and everything was magical — from the romantic room setup to the candlelight dinner by the beach. It truly felt like paradise!”
                        </p>
                        <div class="row">
                        <!-- <ul class="ftco-social"> -->
                        <div class="col">
                        <a href="#"><i class="fa fa-facebook-square social-bordered circle-border"></i></a>
                        </div>
                        <div class="col">
                        <a href="#"><i class="fa fa-github social-bordered circle-border"></i></a>
                        </div>
                        <div class="col">
                        <a href="#"><i class="fa fa-linkedin social-bordered circle-border"></i></a>
                        </div>
                            
                        <!-- </ul> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="details text-center bg-light">
                <img src="./media/images/aboutus/download.jpg" width="300" height="250" alt="Aaron" style="border-radius:30px">
                    <div class="p-5">
                        <h3>Neha Sinha</h3>
                        <p>
                        "Excellent service and beautiful property."
“The rooms were clean, spacious, and had an amazing sunrise view. The resort has a very peaceful vibe, and the staff made sure we were comfortable at all times.”
                        </p>
                        <div class="row">
                        <div class="col">
                        <a href="#"><i class="fa fa-facebook-square social-bordered circle-border"></i></a>
                        </div>
                        <div class="col">
                        <a href="#"><i class="fa fa-github social-bordered circle-border"></i></a>
                        </div>
                        <div class="col">
                        <a href="#"><i class="fa fa-linkedin social-bordered circle-border"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
  </div>
  <div class="site-section bg-warning">
    <div class="container ">
    <div class="row">
            <div class="col-md-6 mx-auto text-center ">
                <h1><b>Hotel Features</b></h1>
                <hr>
            </div>
        </div>
    <div class="row text-center">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img width="80" height="80" src="https://img.icons8.com/ultraviolet/40/swimming-pool.png" alt="swimming-pool"/>
            </div>
            <p><h5>Swimming Pool</h5></p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img width="80" height="80" src="https://img.icons8.com/ultraviolet/80/beach.png" alt="beach"/>
            </div>
            <p><h5>Beach View</h5></p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img width="80" height="80" src="https://img.icons8.com/ultraviolet/80/fire-exit.png" alt="fire-exit"/>
            </div>
            <p><h5>Fire Exit</h5></p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img width="80" height="80" src="https://img.icons8.com/office/80/parking.png" alt="parking"/>
            </div>
            <p><h5>Car Parking</h5></p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img width="80" height="80" src="https://img.icons8.com/ultraviolet/80/hair-dryer.png" alt="hair-dryer"/>
            </div>
            <p><h5>Hair Dryer</h5></p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img width="80" height="80" src="https://img.icons8.com/ultraviolet/80/mini-bar.png" alt="mini-bar"/>
            </div>
            <p><h5>Mini Bar</h5></p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img width="80" height="80" src="https://img.icons8.com/cotton/100/energy-sport-drink.png" alt="energy-sport-drink"/>
            </div>
            <p><h5>Drinks</h5></p>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="imgt">
            <img width="80" height="80" src="https://img.icons8.com/office/80/car.png" alt="car"/>
            </div>
            <p><h5>Car Airport</h5></p>
        </div>
    </div>
  </div>
  </div>
  <?php include("./includes/footer.php"); ?>
  <script>
    $(document).ready(function () {
        $("nav").eq(0).addClass("nav1");
        $("nav").eq(0).addClass("navbar-dark");
    });
  </script>
</body>
</html>