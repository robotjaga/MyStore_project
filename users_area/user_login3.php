
<?php
session_start();
include('../includes/connect.php'); // ✅ Make sure this path is correct
include('../functions/common_function.php'); // Optional if needed

if (isset($_POST['user_login'])) {
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];

    // Get IP
    function getIPAddress() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return $_SERVER['HTTP_X_FORWARDED_FOR'];
        return $_SERVER['REMOTE_ADDR'];
    }
    $user_ip = getIPAddress();

    // Fetch user
    $select_query = "SELECT * FROM `user_table` WHERE username = '$user_username'";
    $result = mysqli_query($con, $select_query);

    if (mysqli_num_rows($result) > 0) {
        $row_data = mysqli_fetch_assoc($result);

        if (password_verify($user_password, $row_data['user_password'])) {
            $_SESSION['username'] = $user_username;

            // Check cart
            $select_cart = mysqli_query($con, "SELECT * FROM `cart_details` WHERE ip_address = '$user_ip'");
            $row_count_cart = mysqli_num_rows($select_cart);

            if ($row_count_cart == 0) {
                echo "<script>alert('You are LOGGED IN SUCCESSFULLY'); window.location.href='profile.php';</script>";
            } else {
                echo "<script>alert('You are LOGGED IN SUCCESSFULLY'); window.location.href='payment.php';</script>";
            }
        } else {
            echo "<script>alert('Invalid Password');</script>";
        }
    } else {
        echo "<script>alert('Username not found');</script>";
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
            <form action="profile.php" method="POST">
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

