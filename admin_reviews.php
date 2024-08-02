<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `reviews` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_reviews.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>reviews</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="messages">

   <h1 class="title"> Reviews </h1>

   <div class="box-container">
   <?php
      $select_review = mysqli_query($conn, "SELECT * FROM `reviews`") or die('query failed');
      if(mysqli_num_rows($select_review) > 0){
         while($fetch_review = mysqli_fetch_assoc($select_review)){
      
   ?>
   <div class="box">
      <p> user id : <span><?php echo $fetch_review['user_id']; ?></span> </p>
      <p> name : <span><?php echo $fetch_review['name']; ?></span> </p>
      <img src="uploaded_img/<?php echo $fetch_review['image']; ?>" alt="Customer image" width="300px" height="180px">
      <p> Review : <span><?php echo $fetch_review['review']; ?></span> </p>
      <a href="admin_reviews.php?delete=<?php echo $fetch_review['id']; ?>" onclick="return confirm('delete this review?');" class="delete-btn">delete review</a>
   </div>
   <?php
      };
   }else{
      echo '<p class="empty">you have no reviews!</p>';
   }
   ?>
   </div>

</section>









<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>