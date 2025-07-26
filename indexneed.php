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
    <title>Ecommerce Website using PHP and MySQL</title>
    <!-- bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- css link -->
     <link rel="stylesheet" href="style.css">

     <!-- style not redable and i do in index.php -->


      <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    
     <style>

      body{
        align-items: center;
      }

/* product carts  */
.card {
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            max-height: 200px;
            object-fit: cover;
        }

        .stars {
            color: #ffcc00;
            margin: 5px 0;
        }

        .price {
            font-size: 18px;
            color: #ff9800;
            font-weight: bold;
            margin: 8px 0;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 2px solid #ff9800;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
            background-color: white;
            color: #ff9800;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #ff9800;
            color: white;
        }
       
       /* product carts end */


.card-img-top{
    width: 100%;
    height: 200px;
    object-fit: contain;
    
}
/* inside the carousel */
#banner-area {
            width: 80%;
            margin: auto;
            padding: 20px 0;
        }
        .owl-carousel .item img {
            width: 100%;
            height: auto;
            display: block;
            img: bannerScroll 5s linear infinite; 
        }

   
/* style for new arrivals  */
body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        /* Full-width scrolling container */
        .scroll-container {
            width: 100vw; 
            overflow: hidden;
            white-space: nowrap;
            background: #f8f9fa;
            padding: 15px 0;
            position: relative;
        }

        /* Scrolling content */
        .scroll-content {
            display: inline-block;
            white-space: nowrap;
            animation: scrollRight 25s linear infinite;
        }

        /* Product Item */
        .product {
            display: inline-block;
            width: 200px;
            margin-right: 20px;
            text-align: center;
            background: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .rating {
            color: gold;
            font-size: 14px;
        }

        .price {
            font-weight: bold;
            color: #d9534f;
        }

       /* Scroll Animation */
@keyframes scrollRight {
    from {
        transform: translateX(100%);
    }
    to {
        transform: translateX(-100%);
    }
}

        .service-card .icon img {
          position: flex;
          justify-content: center;
          align-items: center;
    width: 50%; 
    height: auto; 
    max-width: 100px; 
    margin-bottom: 5px; 
}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 80px;
}

div.icon{
  display: flex;
    justify-content: center;
    align-items: center;
}


.form-row {

gap: 5px; /* spacing between input and button */

    justify-content: center;
    align-items: center;
    text: center;
}

  

  .my-3 {
  background-color: white; 
  border: 1px solid #007BFF; 
  color: #007BFF; 
  padding: 10px 20px; 
  margin: 5px; 
  cursor: pointer; 
  border-radius: 5px; 
  transition: background-color 0.3s, color 0.3s; 
}

.my-3:hover {
  background-color: #007BFF; 
  color: white; 
}

.my-2{
background-color: white; 
  border: 1px solid rgb(181, 124, 9); 
  color:rgb(220, 151, 11); 
  padding: 10px 20px; 
  margin: 5px; 
  cursor: pointer; 
  border-radius: 5px; 
  transition: background-color 0.3s, color 0.3s; 
}

.my-2:hover {
  background-color:rgb(220, 151, 11); 
  color: white; 
}

/* style for new arrivals  */

     </style>
</head>
<body>

<!-- navbar -->
 <div class="container-fluid">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg bg-pink
    ">
  <div class="container-fluid p-0">
    <img src="./images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#"> <i class="fa-solid fa-cart-shopping"></i></i><sup>1</sup></a>
        </li>

        <li class="nav-flex">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<!-- second child -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-white">
<ul class="navbar-nav me-auto">
        <li class="nav-item">
        <a class="nav-link text-black" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="#">Login</a>
        </li>

</ul>
 </nav>
</div>
</div>

 <!-- thirt child -->
  <div class="bg-white">
<h3 class="text-center">MY STORE</h3>
<p class="text-center">Comunication is at the heart of e-commerce and community</p>
  </div>
</div>

  
<!-- middle section  -->

  <!-- fourth child -->

  <div class="col-md-18">
  <div class="row">
        <!-- Sidebar (Brands & Categories) -->
        <div class="col-md-2 bg-secondary p-0">
            <!-- Brands Section -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-dark">
                    <a href="#" class="nav-link text-white"><h4>Delivery Brands</h4></a>
                </li>

                <?php
getbrands(); //calling the function

?>
           
            </ul>

            <!-- Categories Section -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-dark p-2">
                    <a href="#" class="nav-link text-white"><h4>Categories</h4></a>
                </li>
                <?php
getcategories(); //calling the function
?>
            </ul>
        </div>

        <!-- Product Section -->
        <div class="col-md-10">
            <div class="row">



 <!-- baners own carusel  -->
<section id="banner-area">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="baners/baner1.png" alt="Banner1">
            </div>
            <div class="item">
                <img src="baners/banner2.png" alt="Banner2">
            </div>
            <div class="item">
                <img src="baners/baner3.png" alt="Banner3">
            </div>
        </div>
    </section>

 <!-- baners own carusel end  -->


<!-- fourth child -->
<div class="row px-8">
<div class="col-md-10">
<!-- products -->
<div class="row">
  <!-- fetching products -->

  <!-- dynamic data code -->
<?php
getproducts(); //calling the function
get_unique_categories()
?>
    <!-- <div class="col-md-4 mb-2">
<div class="card">
<img src="./images/apple1.png" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Apple</h5>
<div class="stars">⭐⭐⭐⭐☆</div>
<p class="price">$152</p>
<p class="card-text">Some quick text example.</p>
<a href="#" class="btn">Add to Cart</a>
<a href="#" class="btn">View More</a>
</div>
</div>
</div> -->
<!-- row end -->
</div>
<!-- col end -->
</div>
               




<!-- new arrivals & top sales products -->
   <!-- Top Sale Section -->
   <section class="container-fluid p-0">
    <h4 class="text-center mt-3">New Arrivals</h4>
    <hr>

    <!-- Full-width Scrolling List -->
    <div class="scroll-container">
      <div class="scroll-content">
        
        <!-- Product 1 -->
        <div class="product">
          <img src="images/UNIQLOBottomsTailoredTrousers2.png" alt="UNIQLOBottomsTailoredTrousers2">
          <h6>UNIQLO Trousers</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$152</div>
        </div>

        <!-- Product 2 -->
        <div class="product">
          <img src="images/UNIQLO_Bottoms_Dress_Pants_Trousers2.png" alt="UNIQLO_Bottoms_Dress_Pants_Trousers2">
          <h6>UNIQLO Dress Pants</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$122</div>
        </div>

        <!-- Product 3 -->
        <div class="product">
          <img src="images/UNIQLO_Bottoms_Dark_Wash_Jeans2.png" alt="UNIQLO_Bottoms_Dark_Wash_Jeans2">
          <h6>UNIQLO Dark Jeans</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$899</div>
        </div>

         <!-- Product 2 -->
         <div class="product">
          <img src="images/Accessories_Louis_Vuitton_Structured_Handbags3.png" alt="Louis_Vuitton_Structured_Handbags3">
          <h6>Louis Vuitton Handbag</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$122</div>
        </div>

        <!-- Product 3 -->
        <div class="product">
          <img src="images/UNIQLOBottomsTailoredTrousers3.png" alt="UNIQLOBottomsTailoredTrousers3">
          <h6>UNIQLO Trousers</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$899</div>
        </div>

        <!-- Product 4 -->
        <div class="product">
          <img src="images/UNIQLO_Bottoms_Dress_Pants_Trousers3.png" alt="UNIQLO_Bottoms_Dress_Pants_Trousers3">
          <h6>UNIQLO Dress</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$749</div>
        </div>

        <!-- Product 5 -->
        <div class="product">
          <img src="images/UNIQLO_Bottoms_Dark_Wash_Jeans3.png" alt="UNIQLO_Bottoms_Dark_Wash_Jeans3">
          <h6>UNIQLO Jeans</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$799</div>
        </div>

        <!-- Product 6 -->
        <div class="product">
          <img src="images/River_Island_Summer_Outerwear_Trench_Coats3.png" alt="River_Island_Summer_Outerwear_Trench_Coats3">
          <h6>River Island Trench</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$679</div>
        </div>


        <!-- Product 6 -->
        <div class="product">
          <img src="images/jacket2.png" alt="Jacket">
          <h6>Jacket River Island</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$679</div>
        </div>

          <!-- Product 6 -->
          <div class="product">
          <img src="images/UNIQLO_Bottoms_Dark_Wash_Jeans1.png" alt="UNIQLO_Bottoms_Dark_Wash_Jeans1">
          <h6>UNIQLO Jeans</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$679</div>
        </div>


        <!-- Product 4 -->
        <div class="product">
          <img src="images/River_Island_Summer_Outerwear_Trench_Coats2.png" alt="River_Island_Summer_Outerwear_Trench_Coats2">
          <h6>River Island Trench</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$749</div>
        </div>

        <!-- Product 5 -->
        <div class="product">
          <img src="images/River_Island_Summer_Outerwear_Cardigans2.png" alt="River_Island_Summer_Outerwear_Cardigans2">
          <h6>River Island Cardigan</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$799</div>
        </div>

        <!-- Product 6 -->
        <div class="product">
          <img src="images/kids3.png" alt="Kids">
          <h6>Kids complect</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$679</div>
        </div>

           <!-- Product 6 -->
           <div class="product">
          <img src="images/jacket4.png" alt="Summer_Jacket">
          <h6>Summer Jacket</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$679</div>
        </div>

           <!-- Product 6 -->
           <div class="product">
          <img src="images/kids1.png" alt="Kids_Summer_Outerwear">
          <h6>Kids Summer Outerwear</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$679</div>
        </div>

        <!-- Duplicating items to create infinite effect -->
        <div class="product">
          <img src="images/jacket2.png" alt="H&M_Jacket">
          <h6>H&M Jacket</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$152</div>
        </div>

      </div>
    </div>
    <br><br><br><br><br>
  </section>


 <!-- new arrivals & top sales products -->

<!-- eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->


<!-- MYPRODUCTS -->
<!-- fourth child -->

<div class="row px-8">
<div class="col-md-10">
<!-- products -->
<div class="row">
  <!-- fetching products -->

  <!-- dynamic data code -->
<?php
getproducts(); //calling the function
get_unique_categories()
?>
    <!-- <div class="col-md-4 mb-2">
<div class="card">
<img src="./images/apple1.png" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Apple</h5>
<div class="stars">⭐⭐⭐⭐☆</div>
<p class="price">$152</p>
<p class="card-text">Some quick text example.</p>
<a href="#" class="btn">Add to Cart</a>
<a href="#" class="btn">View More</a>
</div>
</div>
</div> -->
<!-- row end -->
</div>
<!-- col end -->
</div>

<!-- MYPRODUCTS -->
               




<!-- baners own carusel  -->
<section id="banner-area">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="baners/baner1.png" alt="Banner1">
            </div>
            <div class="item">
                <img src="baners/banner2.png" alt="Banner2">
            </div>
            <div class="item">
                <img src="baners/baner3.png" alt="Banner3">
            </div>
        </div>
    </section>

 <!-- baners own carusel end  -->


 <!-- MYPRODUCTS -->
<!-- fourth child -->
<div class="row px-8">
<div class="col-md-10">
<!-- products -->
<div class="row">
  <!-- fetching products -->

  <!-- dynamic data code -->
<?php
getproducts(); //calling the function
get_unique_categories()
?>
    <!-- <div class="col-md-4 mb-2">
<div class="card">
<img src="./images/apple1.png" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Apple</h5>
<div class="stars">⭐⭐⭐⭐☆</div>
<p class="price">$152</p>
<p class="card-text">Some quick text example.</p>
<a href="#" class="btn">Add to Cart</a>
<a href="#" class="btn">View More</a>
</div>
</div>
</div> -->
<!-- row end -->
</div>
<!-- col end -->
</div>

<!-- MYPRODUCTS -->



   <!-- again product list end  -->


<!-- new arrivals & top sales products -->
   <!-- Top Sale Section -->
   <section class="container-fluid p-0">
    <h4 class="text-center mt-3">New Arrivals</h4>
    <hr>

    <!-- Full-width Scrolling List -->
    <div class="scroll-container">
      <div class="scroll-content">
        

        <!-- Product 2 -->
        <div class="product">
          <img src="images/Accessories_Louis_Vuitton_Structured_Handbags3.png" alt="Accessories_Louis_Vuitton_Structured_Handbags3">
          <h6>Louis Vuitton Handbag</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$122</div>
        </div>

        <!-- Product 3 -->
        <div class="product">
          <img src="images/UNIQLOBottomsTailoredTrousers3.png" alt="UNIQLOBottomsTailoredTrousers3">
          <h6>UNIQLO Trousers</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$899</div>
        </div>

        <!-- Product 4 -->
        <div class="product">
          <img src="images/UNIQLO_Bottoms_Dress_Pants_Trousers3.png" alt="UNIQLO_Bottoms_Dress_Pants_Trousers3">
          <h6>UNIQLO Dress</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$749</div>
        </div>

        <!-- Product 5 -->
        <div class="product">
          <img src="images/UNIQLO_Bottoms_Dark_Wash_Jeans3.png" alt="UNIQLO_Bottoms_Dark_Wash_Jeans3">
          <h6>UNIQLO Bottoms Jeans</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$799</div>
        </div>

        <!-- Product 6 -->
        <div class="product">
          <img src="images/River_Island_Summer_Outerwear_Trench_Coats3.png" alt="River_Island_Summer_Outerwear_Trench_Coats3">
          <h6>River Island Trench</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$679</div>
        </div>


        <!-- Product 6 -->
        <div class="product">
          <img src="images/jacket2.png" alt="Summer_Jacket">
          <h6>Summer Jacket</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$679</div>
        </div>

          <!-- Product 6 -->
          <div class="product">
          <img src="images/UNIQLO_Bottoms_Dark_Wash_Jeans1.png" alt="UNIQLO_Bottoms_Dark_Wash_Jeans1">
          <h6>UNIQLO Jeans</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$679</div>
        </div>

        <!-- Duplicating items to create infinite effect -->
        <div class="product">
          <img src="images/River_Island_Summer_Outerwear_Cardigans3.png" alt="River_Island_Summer_Outerwear_Cardigans3">
          <h6>River Island Cardigan</h6>
          <div class="rating">
            <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="far fa-star"></i>
          </div>
          <div class="price">$152</div>
          </div>

      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
 <!-- new arrivals & top sales products -->





<!-- eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->






<!-- last child -->

<div class="container">
    <!-- FREE AND FAST DELIVERY -->
    <div class="service-card">
        <div class="icon">
            <img src="bannerforus/delivery.png" alt="Delivery">
        </div>
        <h3>FREE AND FAST DELIVERY</h3>
        <p>Free delivery for all orders over £140</p>
    </div>

    <!-- 24/7 CUSTOMER SERVICE -->
    <div class="service-card">
        <div class="icon">
            <img src="bannerforus/customerservice.png" alt="Customer Service">
        </div>
        <h3>24/7 CUSTOMER SERVICE</h3>
        <p>Friendly 24/7 customer support</p>
    </div>

    <!-- MONEY BACK GUARANTEE -->
    <div class="service-card">
        <div class="icon">
            <img src="bannerforus/moneyback.png" alt="Money Back">
        </div>
        <h3>MONEY BACK GUARANTEE</h3>
        <p>We return money within 30 days</p>
    </div>
</div>
</div>
</div>
</div>
</div>










   <!-- start #footer -->
   <footer id="footer" class="bg-dark text-white py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">MY STORE</h4>
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
                  <a href="aboutus.php" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
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
        <p class="font-rale font-size-14">&copy; Designed by <a href="#" class="color-second">christina</a></p>
        </div>
</section>
 

   <!-- end #footer -->






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
</body>
</html>