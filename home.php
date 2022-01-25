<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file link -->
    <link rel = "stylesheet" href = "css/style.css">

    <!-- swipper css file link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


</head>
<body>

<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- Header section ends ... -->




<!-- Home section starts  -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                <div class="content">
                   <span>explore, discover, travel</span>
                   <h3>travel arround the world</h3>
                   <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                <div class="content">
                   <span>explore, discover, travel</span>
                   <h3>discover the new places</h3>
                   <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                <div class="content">
                   <span>explore, discover, travel</span>
                   <h3>make your tour worthwhile</h3>
                   <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
         
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>
<!-- Home section ends  -->

<!-- services section starts  -->

<section class="services">

    <h1 class="heading-title"> our services </h1>

    <div class="box-container">

        <div class="box">
           <img src="images/icon-1.png" alt="">
           <h3>adventure</h3>
        </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

        <div class="box">
          <img src="images/icon-3.png" alt="">
          <h3>trekking</h3>
        </div>

        <div class="box">
          <img src="images/icon-4.png" alt="">
          <h3>camp fire</h3>
        </div>

        <div class="box">
          <img src="images/icon-5.png" alt="">
          <h3>off road</h3>
        </div>

        <div class="box">
          <img src="images/icon-6.png" alt="">
          <h3>camping</h3>
        </div>

   </div>

</section>

<!-- services section ends -->


<!-- Home about section starts from here. -->

<section class="home-about">      
    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>The World Travel Guide (WTG) is the flagship digital consumer brand within the Columbus Travel Media portfolio. A comprehensive guide to the world’s best travel destinations, its print heritage stretches back 30 years, with the online portal reaching its 19-year anniversary in 2018. Available in English, German, French and Spanish versions, the WTG provides detailed and accurate travel content designed to inspire global travellers.</p>
        <a href="about.php" class="btn">Read more</a>
    </div>
</section>


<!-- Home about section ends here -->





<!-- Home package section starts  -->
<section class="home-packages">
    <h1 class="heading-title">Our Packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="images">
                <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Historical Tourism</h3>
                <p>Traveling with the primary purpose of exploring the history and heritage of a place.They can go read, explore and learn a lot about history.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="images">
                <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Eco Tourism</h3>
                <p>Eco-tourism focuses on local cultures, wilderness adventures, volunteering, personal growth and learning new ways to live on our vulnerable planet.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="box">
            <div class="images">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>It usually takes place on trails in areas of relatively unspoiled wilderness. People love these tours, choosing from half-day to full-day wine adventures.</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
    </div>
    <!-- load more icon  -->
    <div class="load-more"><a href="package.php" class="btn">load more...</a></div>
</section>
<!-- Home package section ends  -->






<!-- Home Offer section starts -->
<section class="home-offer">
    <div class="content">
        <h3>Upto 50% off</h3>
        <p>Whether you are looking for a "Weekend Getaway" or an "Around the World Cruise," Worldwide Discount Travel Club offers our members the best vacation options at the best prices!</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</section>




<!-- Home Offer section ends -->



<!-- footer section starts here -->
<section class="footer">
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
            <a href="#"><i class="far fa-envelope email"></i> ritik151112@gmail.com</a>
            <a href="#"><i class="fas fa-map-marker-alt"></i> kolkata, India - 700020</a>
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <a href="https://www.facebook.com/ritik.shrivastav.56232" target = "_blank"><i class="fab fa-facebook"></i> facebook</a>
            <a href="https://www.instagram.com/__ritik_srivastav/" target = "_blank"><i class="fab fa-instagram"></i> instagram</a>
            <a href="https://mobile.twitter.com/Ritik_Kumar9211" target = "_blank"><i class="fab fa-twitter"></i> twitter</a>
            <a href="https://www.linkedin.com/in/ritik-kumar-3039091ba/" target = "_blank"><i class="fab fa-linkedin"></i> linkedin</a>
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