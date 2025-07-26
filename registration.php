

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>USER REGISTRATION</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
  <link rel="stylesheet" href="../css/register.css"/>
  <link rel="stylesheet" href="../css/styleheader.css"/>

  <style>
    html, body {
      height: 100%;
      margin: 0;
      background-color: #f8f9fa;
    }

    .left-image {
      background-image: url('../images/reg.png');
      background-size: cover;
      background-position: center;
      height: 100vh;
    }

    .form-section {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      padding: 30px;
    }

    .form-container {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
    }

    .register-btn {
      background-color: #007bff;
      color: #fff;
      padding: 10px 30px;
      border: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .register-btn:hover {
      background-color: #0056b3;
    }

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

  <div class="container-fluid">
    <div class="row">
      
      <!-- Left full-height image -->
      <div class="col-md-6 left-image"></div>

      <!-- Right form section -->
      <div class="col-md-6 form-section flex-column">
        <h2 class="text-center mb-4">NEW USER REGISTRATION</h2>
        <div class="form-container">
          <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
              <label for="user_username" class="form-label">Username</label>
              <input type="text" id="user_username" name="user_username" class="form-control" placeholder="Enter your username" required autocomplete="off">
            </div>

            <div class="mb-3">
              <label for="user_email" class="form-label">Email</label>
              <input type="email" id="user_email" name="user_email" class="form-control" placeholder="Enter your email" required autocomplete="off">
            </div>

            <div class="mb-3">
              <label for="user_image" class="form-label">User Image</label>
              <input type="file" id="user_image" name="user_image" class="form-control" required>
            </div>

            <div class="mb-3">
              <label for="user_password" class="form-label">Password</label>
              <input type="password" id="user_password" name="user_password" class="form-control" placeholder="Enter your password" required autocomplete="off">
            </div>

            <div class="mb-3">
              <label for="comf_user_password" class="form-label">Confirm Password</label>
              <input type="password" id="comf_user_password" name="comf_user_password" class="form-control" placeholder="Confirm Password" required autocomplete="off">
            </div>

            <div class="mb-3">
              <label for="user_address" class="form-label">Address</label>
              <input type="text" id="user_address" name="user_address" class="form-control" placeholder="Enter your address" required autocomplete="off">
            </div>

            <div class="mb-3">
              <label for="user_contact" class="form-label">Contact</label>
              <input type="text" id="user_contact" name="user_contact" class="form-control" placeholder="Enter your mobile number" required autocomplete="off">
            </div>

            <div class="text-center">
              <button type="submit" name="user_register" class="register-btn">Register</button>
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>

</body>
</html>