<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about.jpeg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Welcome To Our Website and Welcome to The Coffee Bean Delight! We sell fresh & natural coffee beans to you...</br> Coffee like you have never tasted before is an art. Thousands of hours tested, perfected and produced the finest coffee beans that are so fresh, when you open the bag you go WOW! That's what we sell. </p>
         <p>Our mission is to sell robust and healthy beans used the best environmentally friendly practices.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/person1.jpg" alt="person1 image">
         <p>I recommond everyone to buy their products. They provide me the best quality products. So it's really awesome.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ruwan Perera</h3>
      </div>

      <div class="box">
         <img src="images/person2.jpg" alt="person2 image">
         <p>They provide a good service for everyone. So,as a customer i reccomond everyone to buy their products.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sayuri Fernando</h3>
      </div>

      <div class="box">
         <img src="images/person3.jpg" alt="person3 image">
         <p>As a good customer i prefer their service and also they got the best products.So i recommond everyone.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Thushara Perera</h3>
      </div>

      <div class="box">
         <img src="images/person4.jpg" alt="person4 image">
         <p>Best coffee beans in place they have a good customer base.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chathuri Fernando</h3>
      </div>

      <div class="box">
         <img src="images/person5.jpg" alt="person5 image">
         <p>Quality product for everyone. I also got the best products from them.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Amelia Peiris</h3>
      </div>

      <div class="box">
         <img src="images/person6.jpg" alt="person6 image">
         <p>They provide a good online service and everyone can contact them.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mohomad Nabir</h3>
      </div>

   </div>

   <!---Add the review page here to add customer reviews--->
   <div class="button">
   <button><a href="clientreview.php">Add your review Here</a></button>   
   </div>
     

</section>

          

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>