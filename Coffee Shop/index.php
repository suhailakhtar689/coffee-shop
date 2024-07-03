
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Coffee Shop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   <?php
    include_once("header.php");
    ?>

<!-- header section ends -->

<!-- home section starts  -->

<div class="home-bg">

   <section class="home" id="home">

      <div class="content">
         <h3>coffee heaven</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut officia, accusantium mollitia laudantium dolorum dolore.</p>
         <a href="#about" class="btn">about us</a>
      </div>

   </section>

</div>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="image">
      <img src="about-img.svg" alt="">
   </div>

   <div class="content">
      <h3>A cup of coffee can complete your day</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam suscipit sunt repellendus, dolorum recusandae placeat quae. Iste eaque aspernatur, animi deleniti voluptas, sunt molestias eveniet sint consectetur facere a ex.</p>
      <a href="#menu" class="btn">our menu</a>
   </div>

</section>

<!-- about section ends -->

<!-- facility section starts  -->

<section class="facility">

   <div class="heading">
      <img src="heading-img.png" alt="">
      <h3>our facility</h3>
   </div>

   <div class="box-container">

      <div class="box">
         <img src="icon-1.png" alt="">
         <h3>varieties of coffees</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, adipisci!</p>
      </div>

      <div class="box">
         <img src="icon-2.png" alt="">
         <h3>coffee beans</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, adipisci!</p>
      </div>

      <div class="box">
         <img src="icon-3.png" alt="">
         <h3>breakfast and sweets</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, adipisci!</p>
      </div>

      <div class="box">
         <img src="icon-4.png" alt="">
         <h3>read to go coffee</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, adipisci!</p>
      </div>

   </div>

</section>

<!-- facility section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

   <div class="heading">
      <img src="heading-img.png" alt="">
      <h3>popular menu</h3>
   </div>

   <div class="box-container">

      <div class="box">
         <img src="menu-1.png" alt="">
         <h3>love you coffee</h3>
      </div>

      <div class="box">
         <img src="menu-2.png" alt="">
         <h3>Cappuccino</h3>
      </div>

      <div class="box">
         <img src="menu-3.png" alt="">
         <h3>Mocha coffee</h3>
      </div>

      <div class="box">
         <img src="menu-4.png" alt="">
         <h3>Frappuccino</h3>
      </div>

      <div class="box">
         <img src="menu-5.png" alt="">
         <h3>black coffee</h3>
      </div>

      <div class="box">
         <img src="menu-6.png" alt="">
         <h3>love heart coffee</h3>
      </div>

   </div>

</section>

<!-- menu section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

   <div class="heading">
      <img src="heading-img.png" alt="">
      <h3>our gallery</h3>
   </div>

   <div class="box-container">
      <img src="gallery-1.webp" alt="">
      <img src="gallery-2.webp" alt="">
      <img src="gallery-3.webp" alt="">
      <img src="gallery-4.webp" alt="">
      <img src="gallery-5.webp" alt="">
      <img src="gallery-6.webp" alt="">
   </div>

</section>

<!-- gallery section ends -->

<!-- team section starts  -->

<section class="team" id="team">

   <div class="heading">
      <img src="heading-img.png" alt="">
      <h3>our team</h3>
   </div>

   <div class="box-container">

      <div class="box">
         <img src="our-team-1.jpg">
         <h3>john deo</h3>
      </div>
      <div class="box">
         <img src="our-team-2.jpg">
         <h3>john deo</h3>
      </div>
      <div class="box">
         <img src="our-team-3.jpg">
         <h3>john deo</h3>
      </div>
      <div class="box">
         <img src="our-team-4.jpg">
         <h3>john deo</h3>
      </div>
      <div class="box">
         <img src="our-team-5.jpg">
         <h3>john deo</h3>
      </div>
      <div class="box">
         <img src="our-team-6.jpg">
         <h3>john deo</h3>
      </div>

   </div>

</section>

<!-- team section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <div class="heading">
      <img src="heading-img.png" alt="">
      <h3>contact us</h3>
   </div>

   <div class="row">

      <div class="image">
         <img src="contact-img.svg">
      </div>

      <form action="index.php" method="post">
         <h3>book a table</h3>
         <input type="text" name="name" required class="box" maxlength="20" placeholder="enter your name">
         <input type="number" name="number" required class="box" maxlength="20" placeholder="enter your number" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false">
         <input type="number" name="guests" required class="box" maxlength="20" placeholder="how many guests" min="0" max="99" onkeypress="if(this.value.length == 2) return false">
         <input type="submit" name="send message" value="send message" class="btn">
      </form>

   </div>

</section>

<!-- contact section ends -->




<?php
include_once("footer.php");
?>



<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>