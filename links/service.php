<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Verdana, sans-serif;
    }

    .mySlides {
      display: none;
    }

    img {
      vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 100%;

      position: relative;
      margin: auto;
    }

    .slideshow-container img {
      height: 500px;
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    .step {
      width: 100%;
    }

    .card {
      margin-top: 50px;
    }

    .step img {
      width: 40rem;



    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 3.5s;
      animation-name: fade;
      animation-duration: 3.5s;
    }
    .contaner{
      display:flex;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }

      .card {
        width: 320px;
      }

      .step {
        display: none;
      }
      .contaner{
        display:grid;
        
      }
    }
    @media screen and (max-width: 990px) {
      .contaner{
      display:grid;
      margin-left: 20px;
    }
    .step img{
      display:none;
    }

    }

  </style>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/gallary.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <title> Wedding Planer | We'll Plan Your Event Today| Destination Weding |Asansol|Purulia|Bankura|Durgapur|
  </title>
  <link rel="shortcut icon" href="../img/logo/ask.png" type="image/x-icon">
</head>

<body>
  <div class="top">
    <img src="../img/logo/ask.png" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy">
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
  <div class="slideshow-container">
    <div class="mySlides fade">
      <?php
 include "../php/connection.php";
 $query="SELECT * FROM `slide` WHERE id=1";
                    $run=mysqli_query($conn, $query);
                    $_SESSION= mysqli_fetch_assoc( $run );
?>
      <img src='<?php echo $_SESSION['img'];?>' style="width:100%">
    </div>
    <div class="mySlides fade">
      <?php
  include "../php/connection.php";
 $query="SELECT * FROM `slide` WHERE id=2";
                    $run=mysqli_query($conn, $query);
                    $_SESSION= mysqli_fetch_assoc( $run );
 ?>
      <img src='<?php echo $_SESSION['img'];?>' style="width:100%">
    </div>
    <div class="mySlides fade">
      <?php
include "../php/connection.php";

                    $query="SELECT * FROM `slide` WHERE id=3";
                    $run=mysqli_query($conn, $query);
                    $_SESSION= mysqli_fetch_assoc( $run );

                    ?>

      <img src='<?php echo $_SESSION['img'];?>' style="width:100%">
    </div>
  </div>
  <br>
  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
  <div class="contaner">
    <div class="card" data-aos="flip-left" style="width: 20rem;">
      <img src="../img/service/1.jpg" class="card-img-top" alt="..." style="height: 20rem;width:100%;">
      <div class="card-body">
        <h5 class="card-title">standard</h5>
        <p>
          <button class="book" type="button" data-toggle="collapse" data-target="#multiCollapseExample1"
            aria-expanded="false" aria-controls="multiCollapseExample1">details</button>
        </p>
        <div class="row">

          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="card card-text" style="width:100%;">
                <ol>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card" data-aos="flip-left" style="width: 20rem;">
      <img src="../img/service/1.jpg" class="card-img-top" alt="..." style="height: 20rem;width:100%;">
      <div class="card-body">
        <h5 class="card-title">standard</h5>
        <p>
          <button class="book" type="button" data-toggle="collapse" data-target="#multiCollapseExample2"
            aria-expanded="false" aria-controls="multiCollapseExample2">details</button>
        </p>
        <div class="row">

          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-text" style="width:100%;">
                <ol>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card" data-aos="flip-left" style="width: 20rem;">
      <img src="../img/service/1.jpg" class="card-img-top" alt="..." style="height: 20rem;width:100%;">
      <div class="card-body">
        <h5 class="card-title">standard</h5>
        <p>
          <button class="book" type="button" data-toggle="collapse" data-target="#multiCollapseExample3"
            aria-expanded="false" aria-controls="multiCollapseExample3">details
          </button>
        </p>
        <div class="row">
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample3">
              <div class="card card-text" style="width: 100%;">
                <ol>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card" data-aos="flip-left" style="width: 20rem;">
      <img src="../img/service/1.jpg" class="card-img-top" alt="..." style="height: 20rem;width:100%;">
      <div class="card-body">
        <h5 class="card-title" style=>standard</h5>
        <p>
          <button class="book" type="button" data-toggle="collapse" data-target="#multiCollapseExample4"
            aria-expanded="false" aria-controls="multiCollapseExample3">details</button>
        </p>
        <div class="row">
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample4">
              <div class="card card-text" style="width: 100%;">
                <ol>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card" data-aos="flip-left" style="width: 20rem;">
      <img src="../img/service/1.jpg" class="card-img-top" alt="..." style="height: 20rem;width:100%;">
      <div class="card-body">
        <h5 class="card-title" style="width: 20rem;">standard</h5>
        <p>
          <button class="book" type="button" data-toggle="collapse" data-target="#multiCollapseExample5"
            aria-expanded="false" aria-controls="multiCollapseExample4">details</button>
        </p>
        <div class="row">
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample5">
              <div class="card card-texyt" style="width: 100%;">
                <ol>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                  <li>what we giving</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card" style="margin-top: 52px;justyfy-content:center">
    <div class="step">


      <img src="../img/logo/step.png" class="card-img-top" alt="...">
    </div>
    <div class="card-body">
      <h5 class=" card-title">how to deal with us</h5>
      <ol>
        <li class="card-text">select a plan that make your requirement complete</li>
        <li class="card-text">call us to know more about plan details</li>
        <li class="card-text">confirm your deal with us</li>
        <li class="card-text">we will ask you to pay 25% as advance </li>
        <p class="card-text" style="color:red"> *do not pay before call us or we dont ask you to pay</p>
      </ol>
      <a href="pay.php" class="btn btn-sucess"><button class="book"> make payment</button></a>
    </div>
  </div>
  </div>
  <div class="socialmedia">
    <h2>Follow us on</h2>
    <a href="https://www.facebook.com/ASKWEDDINGPLANNER"><img class="fb" src="../img/logo/fb.png"
        alt="facebook"></img></a>
    <a href="https://www.instagram.com/askweddingplanner/"><img class="ig" src="../img/logo/ig.png"
        alt="instagram"></img></a>
    <a href="https://www.twitter.com/askweddingplanner/"><img class="tw" src="../img/logo/twitter.png"
        alt="twittwer"></img></a>
    <a href="youtube.com"><img class="youtube" src="../img/logo/yt.png" alt="youtube"></img></a>
  </div>
  <div class="copy">
    <p>© 2020 ASK WEDDING PLANNER. All Rights Reserved.</p>
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
      duration: 1000
    });
  </script>
  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
  </script>
</body>

</html>