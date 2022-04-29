<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description"
    content="wedding,widding planner. ASK Wedding Planner Offers Affordable,Tiored Plans For Your Event.Let Us Help Your Even.Contact For More Details... ">
  <meta name="keyword"
    content="widding planner,ASK WEDDING PLANNER,Call Us in Purulia|Bankua|Durgapur|Mednipur|Asansol,wedding plannig,wedding bride, wedding event,wedding ideas,Wedding decoration,wedding plans">
  <link rel="stylesheet" href="css/style.css">
  <title> Wedding Planer | We'll Plan Your Event Today| Destination Weding |Asansol|Purulia|Bankura|Durgapur|
  </title>
  <link rel="shortcut icon" href="img/logo/ask.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Image and text -->
  <link href="https://fonts.googleapis.com/css2?family=Herr+Von+Muellerhoff&family=Italianno&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Akronim&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap" rel="stylesheet">

</head>

<body>
  <div class="top">
    <img src="img/logo/ask.png" width="60" height="60" class="d-inline-block align-top" alt=""
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
          <a class="nav-link" href="index.php">HOME</a>
          <a class="nav-link" href="links/gallary.php">GALLERY</a>
          <a class="nav-link" href="links/project.php">OUR PROJECTS</a>
          <a class="nav-link" href="links/service.php">PLANS</a>
          <a class="nav-link" href="links/about.php">ABOUT</a>
          <a class="nav-link" href="links/contact.php">CONTACT US</a>
        </li>
      </ul>
    </div>
  </nav>
  <video autoplay muted loop>
    <source src="video/banner.mp4" type="video/mp4">
  </video>
  <div class="container" style="padding:0px;">
    <div class="welcome">
      <div class="card" data-aos="zoom-out-down">
        <div class="card-body">
          <h5 class="card-title">wel come to ask wedding planner<br><p style="font-size:20px;">- আমরা আপনাদের আপনজন -</p> </h5>
          
          
          <p class="card-text">ASK WEDDING PLANNER IS AN INDIAN wedding planning or and decoration platform.
            ASK Wedding Planner Offers Affordable,& Best wedding Service Tiored Plans For Your Event.
            Our coordinators
            will advise you in designing, organizing, and executing your event, while making sure your style and
            personality shines through. Let Us Help to make Your dream a memorable part of your life.
            <br><br>
            We are currently providing our all type of service in |Asansol|Purulia|Bankura|Durgapur<br>
            <b>Photographer, makeup, bridal wear, groom wear,mehendi,plannig & decor,food,music & dance ,jewellery
              accessories, pandits
              and many more</b>


          </p>
        </div>
      </div>
    </div>
    <div class="book">
      <div class="card" style="height: 17rem;width:20rem;">
        <div class="card-body">
          <h5 class="card-title" style="font-size:45px;">services</h5>
          <p class="card-text">check out what type of secvice we are providing you</p>
          <a href="links/catagory.php"><button class="book">show </button></a>
        </div>
      </div>
    </div>
  </div>
  <div id="work">
    <h2>our Last project</h2>
    <div class="card-deck" style="width:100%">
      <div class="card" data-aos="flip-left" style="height:auto;width:20rem;">
        <?php
                            
                            include "php/connection.php";

                            $query="SELECT * FROM `project` WHERE id=1";
                            $run=mysqli_query($conn, $query);
                            $_SESSION= mysqli_fetch_assoc( $run );

                            ?>
        <img src='<?php echo $_SESSION['realimg'];?>' class="card-img-top" alt="..." style="height: 23rem;">
        <div class="card-body">
          <h5 class="card-title" style="font-size:45px;"><?php echo $_SESSION['title'];?></h5>
          <p class="card-text"><?php echo $_SESSION['para'];?></p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><?php echo $_SESSION['date'];?></small>
        </div>
      </div>
      <div class="card " data-aos="flip-left" style="height:auto;width:20rem;">
        <?php
                            
                            include "php/connection.php";

                            $query="SELECT * FROM `project` WHERE id=2";
                            $run=mysqli_query($conn, $query);
                            $_SESSION= mysqli_fetch_assoc( $run );

                            ?>
        <img src='<?php echo $_SESSION['realimg'];?>' class="card-img-top" alt="..." style="height: 23rem;">
        <div class="card-body">
          <h5 class="card-title" style="font-size:45px;"><?php echo $_SESSION['title'];?></h5>
          <p class="card-text"><?php echo $_SESSION['para'];?></p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><?php echo $_SESSION['date'];?></small>
        </div>
      </div>
      <div class="card" data-aos="flip-left" style="height:auto;width:20rem;">
        <?php
                            
                            include "php/connection.php";

                            $query="SELECT * FROM `project` WHERE id=3";
                            $run=mysqli_query($conn, $query);
                            $_SESSION= mysqli_fetch_assoc( $run );

                            ?>
        <img src='<?php echo $_SESSION['realimg'];?>' class="card-img-top" alt="..." style="height: 23rem;">
        <div class="card-body">
          <h5 class="card-title" style="font-size:45px;"><?php echo $_SESSION['title'];?></h5>
          <p class="card-text"><?php echo $_SESSION['para'];?></p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><?php echo $_SESSION['date'];?></small>
        </div>
      </div>
    </div>

  </div>
  <div id="gallary">
    <h2>gallery</h2>
    <div class="card-deck">

      <div class="card" data-aos="flip-left">
        <?php
                            
                            include "php/connection.php";

                            $query="SELECT * FROM `gallary` WHERE id=1";
                            $run=mysqli_query($conn, $query);
                            $_SESSION= mysqli_fetch_assoc( $run );

                            ?>
        <img src='<?php echo $_SESSION['realimg'];?>' class="card-img-top" alt="..." style="height: 23rem;">
        <div class="card-body">
          <h5 class="card-title" style="font-size:45px;"><?php echo $_SESSION['title'];?></h5>
          <p class="card-text"><?php echo $_SESSION['para'];?></p>
        </div>
      </div>
      <div class="card" data-aos="flip-left">
        <?php
                            
                            include "php/connection.php";

                            $query="SELECT * FROM `gallary` WHERE id=2";
                            $run=mysqli_query($conn, $query);
                            $_SESSION= mysqli_fetch_assoc( $run );

                            ?>
        <img src='<?php echo $_SESSION['realimg'];?>' class="card-img-top" alt="..." style="height: 23rem;">
        <div class="card-body">
          <h5 class="card-title" style="font-size:45px;"><?php echo $_SESSION['title'];?></h5>
          <p class="card-text"><?php echo $_SESSION['para'];?></p>
        </div>
      </div>
      <div class="card" data-aos="flip-left">
        <?php
                            
                            include "php/connection.php";

                            $query="SELECT * FROM `gallary` WHERE id=3";
                            $run=mysqli_query($conn, $query);
                            $_SESSION= mysqli_fetch_assoc( $run );

                            ?>
        <img src='<?php echo $_SESSION['realimg'];?>' class="card-img-top" alt="..." style="height: 23rem;">
        <div class="card-body">
          <h5 class="card-title" style="font-size:45px;"><?php echo $_SESSION['title'];?></h5>
          <p class="card-text"><?php echo $_SESSION['para'];?></p>

        </div>
      </div>
    </div>
  </div>
  <div id="gallary">
    <h2>our services</h2>
    <div class="card-deck">
      <div class="card" data-aos="flip-right">
      <?php
                            
                            include "php/connection.php";

                            $query="SELECT * FROM `gallary` WHERE id=1";
                            $run=mysqli_query($conn, $query);
                            $_SESSION= mysqli_fetch_assoc( $run );

                            ?>
         <img src='<?php echo $_SESSION['realimg'];?>' class="card-img-top" alt="..." style="height: 23rem;">
        <div class="card-body">
        <h5 class="card-title" style="font-size:45px;"><?php echo $_SESSION['title'];?></h5>
        <p class="card-text"><?php echo $_SESSION['para'];?></p>
          <p class="card-text"><small class="text-muted">For More Details check Service</small></p>
        </div>
      </div>
      <div class="card" data-aos="flip-right">
      <?php
                            
                            include "php/connection.php";

                            $query="SELECT * FROM `gallary` WHERE id=2";
                            $run=mysqli_query($conn, $query);
                            $_SESSION= mysqli_fetch_assoc( $run );

                            ?>
         <img src='<?php echo $_SESSION['realimg'];?>' class="card-img-top" alt="..." style="height: 23rem;">
        <div class="card-body">
        <h5 class="card-title" style="font-size:45px;"><?php echo $_SESSION['title'];?></h5>
        <p class="card-text"><?php echo $_SESSION['para'];?></p>
          <p class="card-text"><small class="text-muted">For More Details check Service</small></p>
        </div>
      </div>
      <div class="card" data-aos="flip-right">
      <?php
                            
                            include "php/connection.php";

                            $query="SELECT * FROM `gallary` WHERE id=3";
                            $run=mysqli_query($conn, $query);
                            $_SESSION= mysqli_fetch_assoc( $run );

                            ?>
         <img src='<?php echo $_SESSION['realimg'];?>' class="card-img-top" alt="..." style="height: 23rem;">
        <div class="card-body">
        <h5 class="card-title" style="font-size:45px;"><?php echo $_SESSION['title'];?></h5>
        <p class="card-text"><?php echo $_SESSION['para'];?></p>
          <p class="card-text"><small class="text-muted">For More Details check Service</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="title" data-aos="zoom-in-down">
    <h2>couple says about us</h2>
    <div class="couplesays">
      <div class="card bg-light text-white" style="height: 30rem;width:20rem;margin:auto;">
        <?php
                            
                            include "php/connection.php";
$query="SELECT * FROM `testimonial` WHERE id=1";
                            $run=mysqli_query($conn, $query);
                            $_SESSION= mysqli_fetch_assoc( $run ); ?>
        <img src='<?php echo $_SESSION['realimg'];?>' class="card-img" style="height: 30rem;width:20rem;margin:auto;"
          alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title" style="font-size:45px;"><?php echo $_SESSION['title'];?></h5>
          <p class="card-text">"<?php echo $_SESSION['para'];?>"</p>
          <p class="card-text"><?php echo $_SESSION['date'];?></p>
        </div>
      </div>
      <div class="card bg-light text-white" style="height: 30rem;width:20rem;margin:auto;">
        <?php
                            
 include "php/connection.php";
$query="SELECT * FROM `testimonial` WHERE id=2";
                            $run=mysqli_query($conn, $query);
                            $_SESSION= mysqli_fetch_assoc( $run );
 ?>
        <img src='<?php echo $_SESSION['realimg'];?>' class="card-img" style="height: 30rem;width:20rem;margin:auto;"
          alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title" style="font-size:45px;"><?php echo $_SESSION['title'];?></h5>
          <p class="card-text">"<?php echo $_SESSION['para'];?>"</p>
          <p class="card-text"><?php echo $_SESSION['date'];?></p>
        </div>
      </div>
      <div class="card bg-light text-white" style="height: 30rem;width:20rem;margin:auto;">
        <?php
                            
 include "php/connection.php";
$query="SELECT * FROM `testimonial` WHERE id=3";
                            $run=mysqli_query($conn, $query);
                            $_SESSION= mysqli_fetch_assoc( $run );

                            ?>
        <img src='<?php echo $_SESSION['realimg'];?>' class="card-img" style="height: 30rem;width:20rem;margin:auto;"
          alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title" style="font-size:45px;"><?php echo $_SESSION['title'];?></h5>
          <p class="card-text">"<?php echo $_SESSION['para'];?>"</p>
          <p class="card-text"><?php echo $_SESSION['date'];?></p>
        </div>
      </div>
    </div>
  </div>
  <div id="contactus">
    <form action="php/form.php" method="POST">
      <h2>contact us</h2>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="email" placeholder="Email" class="form-control" name="email">
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="msg" placeholder="Massage For Us">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" placeholder="City/Village" name="city">
        </div>
        <div class="form-group col-md-4">
          <input type="text" class="form-control" placeholder="Dist." name="dist">
        </div>
        <div class="form-group col-md-2">
          <input type="text" class="form-control" placeholder="Contact No." name="con">
        </div>
      </div>
      <button type="submit" class="book">Submit</button>
    </form>
  </div>
  <div class="socialmedia">
    <h2>Follow us on</h2>
    <a href="https://www.facebook.com/ASKWEDDINGPLANNER"><img class="fb" src="img/logo/fb.png" alt="facebook"></img></a>
    <a href="https://www.instagram.com/askweddingplanner/"><img class="ig" src="img/logo/ig.png"
        alt="instagram"></img></a>
    <a href="https://www.twitter.com/askweddingplanner/"><img class="tw" src="img/logo/twitter.png"
        alt="twittwer"></img></a>
    <a href="https://youtube.com/channel/UCQqIjR_HLdFLbLtImesWVvw"><img class="youtube" src="img/logo/yt.png" alt="youtube"></img></a>
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
      duration: 900
    });
    $('.carousel').carousel({
      interval: 1000,
    })
    $('.carousel').carousel({
      pause: false,
    })
    $('.carousel').carousel - fade({
      fade: 1000,
    })
  </script>
</body>

</html>