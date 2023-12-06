<?php
$pageTitle= "Home";
include "view-header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <!-- Replace the link with the path to your compiled Sass code -->
  <link href="https://bootswatch.com/quartz/" rel="stylesheet">

</head>
<body>

<div class="text-bg-danger p-3">
  <h1>Cupid's Bow Archery & Matchmaking - User Portal</h1>
</div>
<br></br>
<div style="width: 100%; text-align: center;">
  <span style="display: inline-block; margin: 0 auto; border: 5px solid gray; padding: 10px;">

    <p>Welcome to Cupid's Bow, where passion for archery meets the thrill of love! Immerse yourself in the world of arrows and affection as you embark on a unique journey to find your perfect match. Cupid's Bow is not just a matchmaking platform; it's a community where archery enthusiasts come together to share their love for the sport and explore romantic connections. Picture yourself meeting like-minded individuals who share your passion for archery, enjoying the excitement of hitting bullseyes while forging meaningful connections. Our platform seamlessly blends the art of matchmaking with the precision of archery, offering a one-of-a-kind experience for those who believe in the power of love and the joy of a well-aimed shot. Join Cupid's Bow, where love and archery collide, and let the adventure begin!</p>
  </span>
</div>
<br></br>
<div style="width: 100%; text-align: center;">
  <span style="display: inline-block; ">
    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Carousel -->
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="austin-backyard-wedding-photos-12.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="couples archery.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="couples archery2.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </span>
</div>

<!-- Footer -->
<footer class="text-center text-white" style="background-color: #f1f1f1;">
  <div class="container pt-4">
    <!-- Social media links -->
    <section class="mb-4">
      <!-- Add your social media links here -->
    </section>
  </div>

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">Cupid's Bow.com</a>
  </div>
</footer>
<!-- End of .container -->

</body>
</html>



 <?php
include "view-footer.php";
?>
