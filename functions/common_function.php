<?php
// include connect fiele here

// include('./includes/connect.php');

// getting products
function getproducts(){
    global $con;

    // condition first to check 
     if(!isset($_GET['category'])){
     if(!isset($_GET['brand'])){

      // limit 0.12 for product haw many products users can able to see!

    $select_query="Select * from `products` order by rand() LIMIT 0,12";
$result_query=mysqli_query($con,$select_query);
// $row=mysqli_fetch_assoc($result_query);
// echo $row['product_title']; 
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo "<div class='col-md-4 mb-2'>
<div class='card'>
<img src='./images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'>$product_title</h5>
<div class='stars'>⭐⭐⭐⭐☆</div>
<p class='price'>$product_price</p>
<p class='card-text'>$product_description</p>
<a href='index.php?add_to_cart=$product_id' class='btn my-2'>Add to Cart</a>
<a href='product_details.php?product_id=$product_id' class='btn my-3'>View More</a>
</div>
</div>
</div>";
}
}
}
}


//getting all products 

function get_all_products(){

   global $con;

    // condition first to check 
     if(!isset($_GET['category'])){
     if(!isset($_GET['brand'])){

      // limit 0.12 for product haw many products users can able to see!

    $select_query="Select * from `products` order by rand()";
$result_query=mysqli_query($con,$select_query);
// $row=mysqli_fetch_assoc($result_query);
// echo $row['product_title']; 
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo "<div class='col-md-4 mb-2'>
<div class='card'>
<img src='./images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'>$product_title</h5>
<div class='stars'>⭐⭐⭐⭐☆</div>
<p class='price'>$product_price</p>
<p class='card-text'>$product_description</p>
<a href='index.php?add_to_cart=$product_id' class='btn my-2'>Add to Cart</a>
<a href='product_details.php?product_id=$product_id' class='btn my-3'>View More</a>
</div>
</div>
</div>";
}
}
}
}


// getting unique categories

function get_unique_categories(){
    global $con;

    // condition first to check 
     if(isset($_GET['category'])){

    //fech id
    $category_id=$_GET['category'];
   

    $select_query="Select * from `products` where category_id=$category_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
  echo "<h2 class='text-center text-danger'>Empty stock for this category<h2>";
}
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo "<div class='col-md-4 mb-2'>
<div class='card'>
<img src='./images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'>$product_title</h5>
<div class='stars'>⭐⭐⭐⭐☆</div>
<p class='price'>$product_price</p>
<p class='card-text'>$product_description</p>
<a href='index.php?add_to_cart=$product_id' class='btn my-2'>Add to Cart</a>
<a href='product_details.php?product_id=$product_id' class='btn my-3'>View More</a>
</div>
</div>
</div>";
}
}
}

// getting unique brands

function get_unique_brands(){
  global $con;

  // condition first to check 
   if(isset($_GET['brand'])){

  //fech id
  $brand_id=$_GET['brand'];
 

  $select_query="Select * from `products` where brand_id=$brand_id";
$result_query=mysqli_query($con,$select_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
echo "<h2 class='text-center text-danger'>This brand not available for service<h2>";
}
while($row=mysqli_fetch_assoc($result_query)){
$product_id=$row['product_id'];
$product_title=$row['product_title'];
$product_description=$row['product_description'];
$product_image1=$row['product_image1'];
$product_price=$row['product_price'];
$category_id=$row['category_id'];
$brand_id=$row['brand_id'];
echo "<div class='col-md-4 mb-2'>
<div class='card'>
<img src='./images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'>$product_title</h5>
<div class='stars'>⭐⭐⭐⭐☆</div>
<p class='price'>$product_price</p>
<p class='card-text'>$product_description</p>
<a href='index.php?add_to_cart=$product_id' class='btn my-2'>Add to Cart</a>
<a href='product_details.php?product_id=$product_id' class='btn my-3'>View More</a>
</div>
</div>
</div>";
}
}
}

//displaying brands in sidenav

function getbrands(){
    global $con;
    $select_brands="Select * from `brands`";
$result_brands=mysqli_query($con,$select_brands);
while($row_data=mysqli_fetch_assoc($result_brands)){
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brand_id'];
  echo " <li class='nav-item'>
<a href='index.php?brand=$brand_id' class='nav-link text-dark'> $brand_title</a>
  </li>";
}
}

// display categories in side nav 

function getcategories(){
    global $con;

$select_categories="Select * from `categories`";
$result_categories=mysqli_query($con,$select_categories);
while($row_data=mysqli_fetch_assoc($result_categories)){
  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
  echo " <li class='nav-item'>
<a href='index.php?category=$category_id' class='nav-link text-dark'> $category_title</a>
  </li>"; 
}
}

// serching products function

function search_product(){
    global $con;
    if(isset($_GET['serch_data_product'])){
    $search_data_value=$_GET['search_data'];
    $search_query="Select * from `products` where product_keywords like 
    '%$search_data_value%'";
$result_query=mysqli_query($con,$search_query);


$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0){
echo "<h2 class='text-center text-danger'>No result. No products found on this category!<h2>";
}
while($row=mysqli_fetch_assoc($result_query)){
  $product_id=$row['product_id'];
  $product_title=$row['product_title'];
  $product_description=$row['product_description'];
  $product_image1=$row['product_image1'];
  $product_price=$row['product_price'];
  $category_id=$row['category_id'];
  $brand_id=$row['brand_id'];
  echo "<div class='col-md-4 mb-2'>
<div class='card'>
<img src='./images/$product_image1' class='card-img-top' alt='$product_title'>
<div class='card-body'>
<h5 class='card-title'>$product_title</h5>
<div class='stars'>⭐⭐⭐⭐☆</div>
<p class='price'>$product_price</p>
<p class='card-text'>$product_description</p>
<a href='index.php?add_to_cart=$product_id' class='btn my-2'>Add to Cart</a>
<a href='product_details.php?product_id=$product_id' class='btn my-3'>View More</a>
</div>
</div>
</div>";
}
}
}


// view details function

function view_details() {
    global $con;

    if (isset($_GET['product_id']) && !isset($_GET['category']) && !isset($_GET['brand'])) {
        $product_id = $_GET['product_id'];

        $select_query = "SELECT * FROM `products` WHERE product_id = $product_id";
        $result_query = mysqli_query($con, $select_query);

        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_image2 = $row['product_image2'];
            $product_image3 = $row['product_image3'];
            $product_price = $row['product_price'];

            echo "
            <!-- Main Product -->
            <div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./images/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <div class='stars'>⭐⭐⭐⭐☆</div>
                        <p class='price'>$$product_price</p>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn my-2'>Choise size</a>
                        <a href='index.php' class='btn my-2'>Go back</a>
                        <a href='product_details.php?product_id=$product_id' class='my-3'></a>
                    </div>
                </div>
            </div>

            

<div class='col-md-6 mb-2'>
  <h4 class='text-center text-info mb-3'></h4>
  <div class='row'>
    <div class='col-md-6'>
      <img src='./images/$product_image2' class='img-fluid card-img-top' alt='$product_title'>
    </div>
    <div class='col-md-6'>
      <img src='./images/$product_image3' class='img-fluid card-img-top' alt='$product_title'>
    </div>
  </div>
</div>









            ";
}
}
}


//get ip address function

    function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  

// cart function
function cart(){
if(isset($_GET['add_to_cart'])){
  global $con;
  $get_ip_add = getIPAddress(); 
  $get_product_id=$_GET['add_to_cart'];

  $select_query="Select * from `cart_details` where ip_address='$get_ip_add' and
  product_id=$get_product_id";
  $result_query = mysqli_query($con, $select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
  echo "<script>alert('This item is already present inside the cart')</script>";
  echo"<script>window.open('index.php','_self')</script>";
}else{

  $insert_query="insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id, '$get_ip_add',0)";
  $result_query = mysqli_query($con,$insert_query);
    echo "<script>alert('Item is added to cart')</script>";
    echo"<script>window.open('index.php','_self')</script>";
   
}
}
}

// function to get cart item numbers
function cart_item(){
  if(isset($_GET['add_to_cart'])){
  global $con;
  $get_ip_add = getIPAddress(); 
  $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
  $result_query = mysqli_query($con, $select_query);
  $count_cart_items=mysqli_num_rows($result_query);
}else{

global $con;
  $get_ip_add = getIPAddress(); 
  $select_query="Select * from `cart_details` where ip_address='$get_ip_add'";
  $result_query = mysqli_query($con, $select_query);
  $count_cart_items=mysqli_num_rows($result_query);
   
}
echo $count_cart_items;
}

//total price function
function total_cart_price(){
   global $con;
   $get_ip_add = getIPAddress(); 
   $total_price=0;

   $cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
   $result=mysqli_query($con,$cart_query);

   while($row=mysqli_fetch_array($result)){
    $product_id=$row['product_id'];

    $select_products="Select * from `products` where product_id='$product_id'";
    $result_products=mysqli_query($con,$select_products);

    while($row_product_price=mysqli_fetch_array($result_products)){
    $price_string = $row_product_price['product_price']; //"£40"
    $clean_price = floatval(str_replace("£", "", $price_string)); // 40.00
    $total_price += $clean_price;
   }
}
 echo "£" . number_format($total_price, 2);
}


?>  