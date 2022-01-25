<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file link -->
    <link rel = "stylesheet" href = "css/style.css">

    <!-- swipper css file link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


</head>
<body>
<!-- Header section starts ... -->
<section class="header section">
    <a href="index.php" class="logo">Travel</a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>
    <!-- menu button is created -->
    <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- Header section ends ... -->



<!-- Booking section is created -->
<div class="heading" style = "background:url(images/header-bg-3.png) no-repeat">
    <h1>Book Now</h1>
</div>


<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form" id = "my-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

    <input type="submit" value="submit" class="btn" name="send">
   </form>
</section>

<!-- booking section ends -->









<!-- footer section starts here -->
<section class="footer section">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-chevron-right"></i> home</a>
            <a href="about.php"><i class="fas fa-chevron-right"></i> about</a>
            <a href="package.php"><i class="fas fa-chevron-right"></i> package</a>
            <a href="book.php"><i class="fas fa-chevron-right"></i> book</a>

        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-chevron-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-chevron-right"></i> data security</a>
            <a href="#"><i class="fas fa-chevron-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-chevron-right"></i> terms of uses</a>

        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> +91-9693882391</a>
            <a href="#"><i class="far fa-envelope"></i> ritik151112@gmail.com</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> kolkata, India - 700020</a>
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <a href="https://www.facebook.com/ritik.shrivastav.56232"><i class="fab fa-facebook"></i> facebook</a>
            <a href="https://www.instagram.com/__ritik_srivastav/"><i class="fab fa-instagram"></i> instagram</a>
            <a href="https://mobile.twitter.com/Ritik_Kumar9211"><i class="fab fa-twitter"></i> twitter</a>
            <a href="https://www.linkedin.com/in/ritik-kumar-3039091ba/"><i class="fab fa-linkedin"></i> linkedin</a>
        </div>
    </div>

    <div class="credit">created by <span>Ritik kumar</span> | all rights reserved!</div>
</section>
<!-- footer section end here -->



<!-- swiper js link -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>