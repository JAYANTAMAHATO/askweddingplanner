<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../css/gallary.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Image and text -->
  <link href="https://fonts.googleapis.com/css2?family=Herr+Von+Muellerhoff&family=Italianno&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Akronim&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <title> Wedding Planer | We'll Plan Your Event Today| Destination Weding |Asansol|Purulia|Bankura|Durgapur|
  </title>
  <link rel="shortcut icon" href="../img/logo/ask.png" type="image/x-icon">
  <style>

.card img{
  width:100%;
}
@media screen and (max-width: 990px) {
.card{
  margin:auto;
}
.card-deck{
  margin:0px;
  width:100%;
}

}
</style>

</head>

<body>
  <div class="top">
    <img src="../img/logo/ask.png" width="60" height="60" class="d-inline-block align-top" alt=""
      loading="lazy">
    <H6>- ASK WEDDING PLANNER -</H6>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light  ">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="../index.php">HOME</a>
          <a class="nav-link" href="gallary.php">GALLERY</a>
          <a class="nav-link" href="project.php">OUR PROJECTS</a>
          <a class="nav-link" href="service.php">PLANS</a>
          <a class="nav-link" href="about.php">ABOUT</a>
          <a class="nav-link" href="contact.php">CONTACT US</a>
        </li>


      </ul>



    </div>
  </nav>
  <div class="contaner">
    <div id="gallary">





      <h2>gallery</h2>
      <div class="card-deck">

        <div class="card" data-aos="zoom-out">
          <?php
              session_start();
              include "../php/connection.php";
               $query="SELECT * FROM `gallary` WHERE id=1";
               $run=mysqli_query($conn, $query);
               $_SESSION= mysqli_fetch_assoc( $run );

              ?>
          <img src='<?php echo $_SESSION['img'];?>' class="card-img-top" alt="..." style="height: 23rem;">
          <div class="card-body">
            <div class="title">
              <?php echo $_SESSION['title']; ?>
            </div>

            <div class="card-text">
              <?php echo $_SESSION['para']; ?>
            </div>
            <div class="card-footer">
            <small class="text-muted"><?php echo $_SESSION['date'];?></small>
          </div>
          </div>
        </div>
        <div class="card" data-aos="zoom-out">
          <?php

                            include "../php/connection.php";

                            $query="SELECT * FROM `gallary` WHERE id=2";
                            $run=mysqli_query($conn, $query);
                            $_SESSION= mysqli_fetch_assoc( $run );

                            ?>
          <img src='<?php echo $_SESSION['img'];?>' class="card-img-top" alt="..." style="height: 23rem;">
          <div class="card-body">
            <div class="title">
              <?php echo $_SESSION['title']; ?>
            </div>
            <div class="card-text">
              <?php echo $_SESSION['para']; ?>
            </div>
            <div class="card-footer">
            <small class="text-muted"><?php echo $_SESSION['date'];?></small>
          </div>
          </div>
        </div>
        <div class="card" data-aos="zoom-out">
          <?php

                include "../php/connection.php";
                 $query="SELECT * FROM `gallary` WHERE id=3";
                 $run=mysqli_query($conn, $query);
                 $_SESSION= mysqli_fetch_assoc( $run );

                ?>
          <img src='<?php echo $_SESSION['img'];?>' class="card-img-top" alt="..." style="height: 23rem;">
          <div class="card-body">
            <div class="title">
              <?php echo $_SESSION['title']; ?>
            </div>
            <div class="card-text">
              <?php echo $_SESSION['para']; ?>
            </div>
            <div class="card-footer">
            <small class="text-muted"><?php echo $_SESSION['date'];?></small>
          </div>
          </div>
        </div>

      </div>
      <div class="card-deck">

        <div class="card" data-aos="zoom-out">
          <?php

                include "../php/connection.php";
                 $query="SELECT * FROM `gallary` WHERE id=4";
                 $run=mysqli_query($conn, $query);
                 $_SESSION= mysqli_fetch_assoc( $run );

                ?>
          <img src='<?php echo $_SESSION['img'];?>' class="card-img-top" alt="... "style="height: 23rem;">
          <div class="card-body">
            <div class="title">
              <?php echo $_SESSION['title']; ?>
            </div>

            <div class="card-text">
              <?php echo $_SESSION['para']; ?>
            </div>


            <div class="card-footer">
            <small class="text-muted"><?php echo $_SESSION['date'];?></small>
          </div>
          </div>
        </div>

        <div class="card" data-aos="zoom-out">
          <?php

                include "../php/connection.php";
                 $query="SELECT * FROM `gallary` WHERE id=5";
                 $run=mysqli_query($conn, $query);
                 $_SESSION= mysqli_fetch_assoc( $run );

                ?>
          <img src='<?php echo $_SESSION['img'];?>' class="card-img-top" alt="..." style="height: 23rem;">
            <div class="card-body">
              <div class="title">
                <?php echo $_SESSION['title']; ?>
                <!-- jayanta -->
              </div>
              <div class="card-text">
                <?php echo $_SESSION['para']; ?>
              </div>
              <div class="card-footer">
            <small class="text-muted"><?php echo $_SESSION['date'];?></small>
          </div>
            </div>
        </div>
        <div class="card" data-aos="zoom-out">
          <?php

                include "../php/connection.php";
                 $query="SELECT * FROM `gallary` WHERE id=6";
                 $run=mysqli_query($conn, $query);
                 $_SESSION= mysqli_fetch_assoc( $run );

                ?>
          <img src='<?php echo $_SESSION['img'];?>' class="card-img-top" alt="..." style="height: 23rem;">
          <div class="card-body">
            <div class="title">
              <?php echo $_SESSION['title']; ?>
            </div>
            <div class="card-text">
              <?php echo $_SESSION['para']; ?>
            </div>
            <div class="card-footer">
            <small class="text-muted"><?php echo $_SESSION['date'];?></small>
          </div>
          </div>
        </div>

      </div>
      <div class="card-deck">

        <div class="card"  data-aos="zoom-out">
          <?php

                include "../php/connection.php";
                 $query="SELECT * FROM `gallary` WHERE id=7";
                 $run=mysqli_query($conn, $query);
                 $_SESSION= mysqli_fetch_assoc( $run );

                ?>
          <img src='<?php echo $_SESSION['img'];?>' class="card-img-top" alt="..." style="height: 23rem;">
          <div class="card-body">
            <div class="title">
              <?php echo $_SESSION['title']; ?>
            </div>
            <div class="card-text">
              <?php echo $_SESSION['para']; ?>
            </div>
            <div class="card-footer">
            <small class="text-muted"><?php echo $_SESSION['date'];?></small>
          </div>
          </div>
        </div>
        <div class="card" data-aos="zoom-out">
          <?php

                include "../php/connection.php";
                 $query="SELECT * FROM `gallary` WHERE id=8";
                 $run=mysqli_query($conn, $query);
                 $_SESSION= mysqli_fetch_assoc( $run );

                ?>
          <img src='<?php echo $_SESSION['img'];?>' class="card-img-top" alt="..." style="height: 23rem;">
          <div class="card-body">
            <div class="title">
              <?php echo $_SESSION['title']; ?>
            </div>
            <div class="card-text">
              <?php echo $_SESSION['para']; ?>
            </div>
            <div class="card-footer">
            <small class="text-muted"><?php echo $_SESSION['date'];?></small>
          </div>
          </div>
        </div>
        <div class="card" data-aos="zoom-out">
          <?php

                include "../php/connection.php";
                 $query="SELECT * FROM `gallary` WHERE id=9";
                 $run=mysqli_query($conn, $query);
                 $_SESSION= mysqli_fetch_assoc( $run );

                ?>
          <img src='<?php echo $_SESSION['img'];?>' class="card-img-top" alt="..." style="height: 23rem;">
          <div class="card-body">
            <div class="title">
              <?php echo $_SESSION['title']; ?>
            </div>
            <div class="card-text">
              <?php echo $_SESSION['para']; ?>
            </div>
            <div class="card-footer">
            <small class="text-muted"><?php echo $_SESSION['date'];?></small>
          </div>
          </div>
        </div>

      </div>
      <div class="card-deck">

        <div class="card" data-aos="zoom-out">
          <?php

                include "../php/connection.php";
                 $query="SELECT * FROM `gallary` WHERE id=10";
                 $run=mysqli_query($conn, $query);
                 $_SESSION= mysqli_fetch_assoc( $run );

                ?>
          <img src='<?php echo $_SESSION['img'];?>' class="card-img-top" alt="..." style="height: 23rem;">
          <div class="card-body">
            <div class="title">
              <?php echo $_SESSION['title']; ?>
            </div>
            <div class="card-text">
              <?php echo $_SESSION['para']; ?>
            </div>
            <div class="card-footer">
            <small class="text-muted"><?php echo $_SESSION['date'];?></small>
          </div>
          </div>
        </div>
        <div class="card" data-aos="zoom-out">
          <?php

                include "../php/connection.php";
                 $query="SELECT * FROM `gallary` WHERE id=11";
                 $run=mysqli_query($conn, $query);
                 $_SESSION= mysqli_fetch_assoc( $run );

                ?>
          <img src='<?php echo $_SESSION['img'];?>' class="card-img-top" alt="..." style="height: 23rem;">
          <div class="card-body">
            <div class="title">
              <?php echo $_SESSION['title']; ?>
            </div>
            <div class="card-text">
              <?php echo $_SESSION['para']; ?>
            </div>
            <div class="card-footer">
            <small class="text-muted"><?php echo $_SESSION['date'];?></small>
          </div>
          </div>
        </div>
        <div class="card" data-aos="zoom-out">
          <?php

                include "../php/connection.php";
                 $query="SELECT * FROM `gallary` WHERE id=12";
                 $run=mysqli_query($conn, $query);
                 $_SESSION= mysqli_fetch_assoc( $run );

                ?>
          <img src='<?php echo $_SESSION['img'];?>' class="card-img-top" alt="..." style="height: 23rem;">
          <div class="card-body">
            <div class="title">
              <?php echo $_SESSION['title']; ?>
            </div>
            <div class="card-text">
              <?php echo $_SESSION['para']; ?>
            </div>
            <div class="card-footer">
            <small class="text-muted"><?php echo $_SESSION['date'];?></small>
          </div>
          </div>
        </div>

      </div>
    </div>
    <div class="socialmedia" >
      <h2>Follow us on</h2>



      <a href="https://www.facebook.com/ASKWEDDINGPLANNER"><img class="fb" src="../img/logo/fb.png" alt="facebook"></img></a>
      <a href="https://www.instagram.com/askweddingplanner/"><img class="ig" src="../img/logo/ig.png" alt="instagram"></img></a>
     <a href="https://www.twitter.com/askweddingplanner/"><img class="tw" src="../img/logo/twitter.png" alt="twittwer"></img></a>
      <a href="youtube.com"><img class="youtube" src="../img/logo/yt.png" alt="youtube"></img></a>
    </div>
    </div>
          <div class="copy">
            <p>© 2020 ASK WEDDING PLANNER. All Rights Reserved.</p>
          </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
  <script>
    AOS.init({
      duration: 1000,
      delay: 30

    });
  </script>

</body>

</html>