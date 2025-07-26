<?php
include('../includes/connect.php');
include('../functions/common_function.php');

if (isset($_POST['user_login'])) {
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];


    $user_username = mysqli_real_escape_string($con, $user_username);

    $select_query = "SELECT * FROM `user_table` WHERE username='$user_username'";
    $result = mysqli_query($con, $select_query);

    if (!$result) {
        die("Query failed: " . mysqli_error($con));
    }

    $row_count = mysqli_num_rows($result);

    if ($row_count > 0) {
        $row_data = mysqli_fetch_assoc($result);

        
        $user_ip = getIPAddress();

        $select_query_cart = "SELECT * FROM `cart_details` WHERE ip_address='$user_ip'";
        $select_cart = mysqli_query($con, $select_query_cart);
        $row_count_cart = mysqli_num_rows($select_cart);

        
        if (password_verify($user_password, $row_data['user_password'])) {
            echo "<script>alert('You have logged in successfully!');</script>";

          
            session_start();
            $_SESSION['username'] = $user_username;

            if ($row_count_cart == 0) {
                echo "<script>window.open('profile.php', '_self');</script>";
            } else {
                echo "<script>window.open('payment.php', '_self');</script>";
            }
        } else {
            echo "<script>alert('Invalid Username or Password');</script>";
        }
    } else {
        echo "<script>alert('Invalid Username or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
  <!-- css link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

  <!-- <link rel="stylesheet" href="../css/register.css">
  <link rel="stylesheet" href="../css/styleheader.css"> -->

    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/checkout_login_style.css">
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

    
        <div class="form-section text-left">
            <h2>USER LOGIN</h2>
            <form action="#" method="POST">
            <div class="mb-1 text-left">
              <label for="user_username" class="form-label text">Username</label>
              <input type="text" id="user_username" name="user_username" class="form-control" placeholder="Enter your username" required autocomplete="off">
            </div>
            <div class="mb-1 text-left">
              <label for="user_password" class="form-label">Password</label>
              <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Enter your password" required autocomplete="off">
            </div>
              <div class="pt-4 my-3 text-left">
              <button type="submit" name="user_login" value="Login" class="register-btn text-left">Login</button>
              <p class="login-link text-left">Don't have an account?<a href="./user_registration.php">Register</a></p>
            </div>




            </form>
        </div>
    </div>




</body>
</html>