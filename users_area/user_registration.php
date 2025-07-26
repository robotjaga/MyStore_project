<?php
include('../includes/connect.php');
include('../functions/common_function.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
  <!-- css link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

  <link rel="stylesheet" href="../css/register.css">
  <link rel="stylesheet" href="../css/styleheader.css">
  <style>
      @media (max-width: 768px) {
      .left-image {
        display: none;
      }

      .form-section {
        height: auto;
        padding: 50px 20px;
      }

      .form-container {
        margin-top: 30px;
      }
    }
  </style>
</head>


<body>

    <div class="container">
        <div class="image-section">
            <img src="../images/reg.png" alt="Fashion Image">
        </div>

    
        <div class="form-section">
            <h2>USER REGISTRATION</h2>
            <form action="" method="POST" entype="multipart/form-data">
            <div class="mb-1">
              <label for="user_username" class="form-label text">Username</label>
              <input type="text" id="user_username" name="user_username" class="form-control" placeholder="Enter your username" required autocomplete="off">
            </div>
             <div class="mb-1">
              <label for="user_email" class="form-label">Email</label>
              <input type="email" id="user_email" name="user_email" class="form-control" placeholder="Enter your email" required autocomplete="off">
            </div>
             <div class="mb-1">
              <label for="user_image" class="form-label">User Image</label>
              <input type="file" id="user_image" name="user_image" class="form-control" required>
            </div>
            <div class="mb-1">
              <label for="user_password" class="form-label">Password</label>
              <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Enter your password" required autocomplete="off">
            </div>
            <div class="mb-1">
              <label for="comf_user_password" class="form-label">Confirm Password</label>
              <input type="password" id="comf_user_password" name="comf_user_password" class="form-control" placeholder="Confirm Password" required autocomplete="off">
            </div>
            <div class="mb-1">
              <label for="user_address" class="form-label">Address</label>
              <input type="text" id="user_address" name="user_address" class="form-control" placeholder="Enter your address" required autocomplete="off">
            </div>
            <div class="mb-1 ">
              <label for="user_contact" class="form-label">Contact</label>
              <input type="text" id="user_contact" name="user_contact" class="form-control" placeholder="Enter your mobile number" required autocomplete="off">
            </div>
              <div class="pt-4">
              <button type="submit" name="user_register" value="Register" class="register-btn">Register</button>
              <p class="login-link">Already have an account? <a href="./user_login.php">Log in</a></p>
            </div>




            </form>
        </div>
    </div>

</body>
</html>

<!-- php code -->

<?php

$user_username = $_POST['user_username'];
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];
$hash_password=password_hash($user_password,PASSWORD_DEFAULT);
$user_image = $_FILES['user_image']['name'];
$user_image_tmp = $_FILES['user_image']['tmp_name'];
$user_ip = $_SERVER['REMOTE_ADDR'];
$user_address = $_POST['user_address'];
$user_contact = $_POST['user_contact'];

// Check for duplicate username
$check_username = "SELECT * FROM `user_table` WHERE username = '$user_username'";
$result_username = mysqli_query($con, $check_username);
if (mysqli_num_rows($result_username) > 0) {
    echo "<script>alert('Username already exists');</script>";
    exit();
}

// Check for duplicate email
$check_email = "SELECT * FROM `user_table` WHERE user_email = '$user_email'";
$result_email = mysqli_query($con, $check_email);
if (mysqli_num_rows($result_email) > 0) {
    echo "<script>alert('Email already exists');</script>";
    exit();
}

// Check for duplicate mobile number
$check_contact = "SELECT * FROM `user_table` WHERE user_mobile = '$user_contact'";
$result_contact = mysqli_query($con, $check_contact);
if (mysqli_num_rows($result_contact) > 0) {
    echo "<script>alert('Mobile number already exists');</script>";
    exit();
}

// All unique, proceed with insert
move_uploaded_file($user_image_tmp, "./user_images/$user_image");

$insert_query = "INSERT INTO `user_table` 
(username, user_email, user_password, user_image, user_ip, user_address, user_mobile)
VALUES 
('$user_username', '$user_email', '$hash_password', '$user_image', '$user_ip', '$user_address', '$user_contact')";

$sql_execute = mysqli_query($con, $insert_query);

if ($sql_execute) {
    echo "<script>alert('Data inserted successfully');</script>";
} else {
    die("Database Insertion Failed: " . mysqli_error($con));
}



//selecting cart items
$select_cart_items="Select * from `cart_details` where ip_address='$user_ip'";
$result_cart = mysqli_query($con,$select_cart_items);
$rows_count=mysqli_num_rows($result_cart);
if($rows_count>0){
  $_SESSION['username']=$user_username;
  echo "<script>alert('You have items in you cart')</script>";
  echo "<script>windows.open('checkout.php','_self')</script>";
}else{
   echo "<script>windows.open('../index.php','_self')</script>";
}
?>



