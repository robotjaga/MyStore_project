
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
    <title>CART PAGE</title>
       <!-- Bootstrap CDN for footer -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <!-- bootstrap CSS link -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- css link -->
     <link rel="stylesheet" href="css/styleheader.css">
     <link rel="stylesheet" href="css/index.css">
     <link rel="stylesheet" href="css/cart.css">

       
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
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./aboutus.php">About Us</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></i><sup><?php
          cart_item();?></sup></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- calling cart function -->
<?php
cart();
?>



<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-white">
<ul class="navbar-nav me-auto">
        <li class="nav-item">
        <a class="nav-link text-black" href="./users_area/user_registration.php">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="./users_area/user_login.php">Login</a>
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


<!-- fourth child-table -->

<div class="container">

<div class="row">
    <form action="" method="post">
<table class="table table-bordered text-center">

<!-- php code to display dinamic data-->
<?php

   $get_ip_add = getIPAddress(); 
   $total_price=0;

   $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
   $result=mysqli_query($con,$cart_query);
   $result_count=mysqli_num_rows($result);
   if($result_count>0){

    echo 
"<thead>
<tr>
<th>Product Title</th>
<th>Product Image</th>
<th>Quantity</th>
<th>Total Price</th>
<th>Remove</th>
<th colspan='2'>Operations</th>
</tr>
</thead>
<tbody>";

   while($row=mysqli_fetch_array($result)){
    $product_id=$row['product_id'];

    $select_products="Select * from `products` where product_id='$product_id'";
    $result_products=mysqli_query($con,$select_products);

    while($row_product_price=mysqli_fetch_array($result_products)){
    $price_string = $row_product_price['product_price']; //"£40"
    $price_table=$row_product_price['product_price'];
    $product_title=$row_product_price['product_title'];
    $product_image1=$row_product_price['product_image1'];
    $clean_price = floatval(str_replace("£", "", $price_string)); // 40.00
    $total_price += $clean_price;
?>


    <tr>
        <td><?php echo $product_title ?></td>
        <td><img src="./images/<?php echo $product_image1 ?>" alt="" class="cart_img"></td>
        <td>
        <input type="number" name="qty[<?php echo $product_id; ?>]" class="form-input w-50" value="<?php echo $quantity; ?>" min="1">
        </td>
        
        
        <?php

        // !!!code not going!!! // //in a process to fix quantity!!!//
// $get_ip_add = getIPAddress(); 
// if(isset($_POST['update_cart'])){
//     $quantities=$_POST['qty'];
//     $update_cart="update `cart_details` set quantit=$quantities where
//     ip_address='$get_ip_add'";
//     $result_products_quantity=mysqli_query($con,$update_cart);
//     $total_price=$total_price*$quantities;
// }

        ?>
        <td><?php echo  $price_table ?></td>
        <td><input type="checkbox" name="removeitem[]" value="<?php echo
        $product_id ?>"></td>
        <td>
<!-- <button class="btn btn-outline-danger">Update</button> -->

<input type="submit" value="Update" class="btn btn-outline-danger" name="update_cart">
<br><br>
<!-- <button class="btn btn-outline-danger" >Remove</button> -->

<input type="submit" value="Remove" class="btn btn-outline-danger" name="remove_cart">

        </td>
    </tr>
    <?php
}
}
}
else{
    echo"<h2 class='text-center text-danger'>Cart is empty</h2>";

}
?>

</tbody>
</table>

 <!-- Coupon Section -->


 <br><br><br>

      <div class="card p-3 shadow-sm mb-4" style="max-width: 300px;">
        <form action="apply_coupon.php" method="POST" class="d-flex">
          <input type="text" name="coupon_code" class="form-control me-2" placeholder="Coupon code" > //required
          <br>
          <button type="submit" class="btn btn-outline-danger" style="max-width: 100px " >Apply</button>
        </form>
      </div>
    </div>


<!-- subtotal -->
     <div class="col-md-4 order-0 order-md-1 mb-5">

     <?php
   $get_ip_add = getIPAddress(); 
   $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
   $result=mysqli_query($con,$cart_query);
   $result_count=mysqli_num_rows($result);
   if($result_count>0){
   

   echo"  <div class='card p-4 shadow-sm mt-3' style='background-color: #f8f9fa;'>
    <h4 class='text-uppercase mb-3 text-left'><strong>Cart Total:</strong></h4>
     <hr>
        <div class='d-flex justify-content-between mb-2'>
          <span>Subtotal:</span>
          <strong>£ $total_price </strong>
        </div>
        <div class='d-flex justify-content-between mb-2'>
          <span>Shipping:</span>
          <strong>Free</strong>
        </div>
        <div class='d-flex justify-content-between mb-3'>
          <span>Total:</span>
          <strong>£ $total_price  </strong>
        </div>
        <hr>
        <button class='btn btn-danger mb-2 w-100'><a href='./users_area/checkout.php'
        class='text-decoration-none text-dark' >Proceed to Checkout</button>
        <a href='index.php' class='btn btn-danger w-100'>Continue Shopping</a>";

}else{
echo" <a href='index.php' class='btn btn-danger w-80'>Continue Shopping</a>";
}
     
     ?>
  

 </div>
</div>
</div>
</div>
</form>
<!-- function to remove item -->

<?php
function remove_cart_item(){
    global $con;
    if(isset($_POST['remove_cart'])){
    foreach($_POST['removeitem'] as $remove_id){
    echo $remove_id;
    $delete_query="Delete from `cart_details` where product_id=$remove_id";
    $run_delete=mysqli_query($con,$delete_query);
    if($run_delete){
      echo "<script>window.open('cart.php','_self')</script>";  
}
}    
}
}
echo $remove_item=remove_cart_item();

?>













 <!-- start #footer -->
<?php
include("./footer.php")


?>

<!-- !start #footer -->



 <!-- bootstrap js link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- !Owl-carousel -->

   <!-- jQuery -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   <!-- Owl Carousel JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

   <script>
       $(document).ready(function(){
           $(".owl-carousel").owlCarousel({
               loop: true,
               margin: 10,
               nav: true,
               autoplay: true,
               autoplayTimeout: 3000, 
               autoplayHoverPause: true,
               responsive: {
                   0: { items: 1 },
                   600: { items: 1 },
                   1000: { items: 1 }
               }
           });
       });
   </script>
<!-- this was for product cards -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- Include jQuery and Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Initialize Owl Carousel -->
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 1, 
            loop: true, 
            autoplay: true, 
            autoplayTimeout: 500, 
            autoplayHoverPause: false, 
            animateOut: "fadeOut", 
            dots: false, 
            nav: false 
        });
    });
</script>
    
</body>
</html>
