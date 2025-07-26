<!-- connect file brands/categories  -->
<?php
include('includes/connect.php');
include('functions/common_function.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
       <!-- Bootstrap CDN for footer -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <!-- bootstrap CSS link -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- css link -->
     <link rel="stylesheet" href="css/styleheader.css">
     <link rel="stylesheet" href="css/edit_acount.css">
     <link rel="stylesheet" href="css/index.css">
       
     <!-- style not redable and i do in index.php -->

      <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Include Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

</head>
<body>

<!-- navbar -->
<div class="container-fluid">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg bg-pink
    ">
  <div class="container-fluid p-0">
<img src="./css/logo4.png" alt="" class="logo" style="width: 120px; height: auto;">
    <br><br><br>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

          <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./registration.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./aboutus.php">About Us</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#"> <i class="fa-solid fa-cart-shopping"></i></i><sup>1</sup></a>
        </li>

        <li class="nav-flex">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
      </ul>

      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
         <input type="submit" value="Search" class="btn btn-outline-light" name="serch_data_product">
      </form>
    </div>
  </div>
</nav>



<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-white">
<ul class="navbar-nav me-auto">
        <li class="nav-item">
        <a class="nav-link text-black" href="./registration.php">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="./registration.php">Login</a>
        </li>

</ul>
 </nav>
</div>
</div>

 <!-- thirt child -->
  <div class="bg-white">
<h3 class="text-center">MY STORE</h3>
<p class="text-center">Communication help us grow and create new innovation, big project, big responsibility</p>
  </div>
</div>
<br><br>
<div class="container">
  <!-- Left Navigation -->
  <div class="sidebar">
    <h2>Manage My Account</h2>
    <a href="profile.html">My Profile</a>
    <a href="address-book.html">Address Book</a>
    <a href="payment-options.html">My Payment Options</a>

    <h2>My Orders</h2>
    <a href="returns.html">My Returns</a>
    <a href="cancellations.html">My Cancellations</a>

    <h2>My Wishlist</h2>
    <a href="wishlist.html">View Wishlist</a>
  </div>

  <!-- Right Form -->
  <div class="edit-profile-container">
    <h2>Edit Your Profile</h2>
   <form action="edit_profile.php" method="post">
      <div class="form-row">
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" id="first_name" name="first_name" required>
        </div>
        <br><br>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" id="last_name" name="last_name" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required>
        </div>
        <br><br>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" id="address" name="address">
        </div>
      </div>
     
      

      <!-- Password Section -->
      <div class="section-title">Password Changes</div>

      <div class="form-group" style="margin-bottom: 20px;">
        <label for="current_password">Current Password</label>
        <input type="password" id="current_password" name="current_password">
      </div>

      <div class="form-group" style="margin-bottom: 20px;">
        <label for="new_password">New Password</label>
        <input type="password" id="new_password" name="new_password">
      </div>

      <div class="form-group" style="margin-bottom: 30px;">
        <label for="confirm_password">Confirm New Password</label>
        <input type="password" id="confirm_password" name="confirm_password">
      </div>

      <div class="form-actions">
        <button type="button" class="cancel-btn">Cancel</button>
        <button type="submit" class="submit-btn">Save Changes</button>
      </div>
    </form>
  </div>
</div>

 <br><br><br><br><br><br>


 <!-- start #footer -->
<?php
include("./footer.php")


?>

<!-- !start #footer -->

</body>
</html>
