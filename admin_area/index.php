<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <!-- bootstrapcss css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
<!-- css link  -->
 <link rel="stylesheet" href="../style.css">
 <style>


.admin_image{
    width: 100px;
    object-fit: contain;
}

.my-3 {
  background-color: white; /* White background */
  border: 1px solid #007BFF; /* Blue border */
  color: #007BFF; /* Blue text */
  padding: 10px 20px; /* Padding for better spacing */
  margin: 5px; /* Margin between buttons */
  cursor: pointer; /* Pointer cursor on hover */
  border-radius: 5px; /* Rounded corners */
  transition: background-color 0.3s, color 0.3s; /* Smooth transition */
}

.my-3:hover {
  background-color: #007BFF; /* Blue background on hover */
  color: white; /* White text on hover */
}

.footer{
    position:absolute;
    bottom:0;
}
 </style>
</head>
<body>

<!-- navbar -->
 <div class="conteiner-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <img src="../images/logo.png" alt="" class="logo">
            <nav class="navbar navbar-expand-lg">

                <ul class="navbar-nav">
                    
                <li class="nav-item">
                        <a href="" class="nav-link">Welcome guest</a>
                    </li>
                </ul>

          </nav>
        </div>
    </nav>

    <!-- second child -->
     <div class="bg-dark">
<h3 class="text-center p-2 text-white">Manage Details</h3>

     </div>

     <!-- third child -->

     <div class="row">
  <div class="col-md-12 bg-white d-flex align-items-center">
    <div class="px-3">
      <a href="#"><img src="../images/frock1.png" alt="" class="admin_image me-2"></a>
      <p class="text-dark text-center me-2">Admin Name</p>
    </div>

    <div class="button text-center">
      <button class="my-3"><a href="insert_product.php" class="nav-link text-primary text-dark my-1">Insert Products</a></button>
      <button class="my-3"><a href="" class="nav-link text-primary text-dark my-1">View Products</a></button>
      <button class="my-3"><a href="index.php?insert_category" class="nav-link text-primary text-dark my-1">Insert Categories</a></button>
      <button class="my-3"><a href="" class="nav-link text-primary text-dark my-1">View Categories</a></button>
      <button class="my-3"><a href="index.php?insert_brand" class="nav-link text-primary text-dark my-1">Insert Brands</a></button>
      <button class="my-3"><a href="" class="nav-link text-primary text-dark my-1">View Brands</a></button>
      <button class="my-3"><a href="" class="nav-link text-primary text-dark my-1">All Orders</a></button>
      <button class="my-3"><a href="" class="nav-link text-primary text-dark my-1">All Payments</a></button>
      <button class="my-3"><a href="" class="nav-link text-primary text-dark my-1">List Users</a></button>
      <button class="my-3"><a href="" class="nav-link text-primary text-dark my-1">Logout</a></button>
    </div>
  </div>
</div>

<!-- Fourth Child -->
<div class="container my-5">
    <?php
    if (isset($_GET['insert_category'])) {
        include('insert_categories.php');
    }
    if (isset($_GET['insert_brand'])) {
        include('insert_brands.php');
    }
    if (isset($_GET['insert_product'])) { // Fixed key name to match the pattern
        include('insert_product.php');
    }
    ?>
</div>












<!-- last child -->
<div class="container-fluid p-0 text-center footer">


 <footer id="footer" class="bg-light text-black ">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">Mobile Shopee</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
              </div>
              <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Newslatter</h4>
                <form class="form-row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Email *">
                  </div>
                  <div class="col">
                    <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                  </div>
                </form>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class="copyright text-center bg-dark text-white py-2">
          <p class="font-rale font-size-14">&copy; Copyrights 2025. Desing By <a href="#" class="color-second">Christina</a></p>
        </div>

 </div>
 
</div>



     <!-- bootstrapcss js link -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>