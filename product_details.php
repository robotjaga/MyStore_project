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
          <a class="nav-link" href="#"> <i class="fa-solid fa-cart-shopping"></i></i><sup><?php
          cart_item();?></sup></a>
        </li>

        <li class="nav-flex">
          <a class="nav-link" href="#">Total Price: <?php total_cart_price();?></a>
        </li>
      </ul>

      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
         <input type="submit" value="Search" class="btn btn-outline-light" name="serch_data_product">
      </form>
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
        <a class="nav-link text-black" href="./registration.php">Welcome Guest</a>
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
<p class="text-center">Comunication is at the heart of e-commerce and community</p>
  </div>
</div>


 <!-- baners own carusel  -->
 <!-- <section id="banner-area">
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
    </section> -->

 <!-- baners own carusel end  -->




<!-- improvement -->
  
<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar (Categories & Brands) -->
        <div class="col-md-2 bg-secondary p-3 sidebar-fixed">
            <!-- Brands Section -->
            <ul class="navbar-nav text-center">
                <li class="nav-item bg-dark p-2">
                    <a href="#" class="nav-link text-white"><h4>Delivery Brands</h4></a>
                </li>
                <?php getbrands(); ?> <!-- Fetch brands -->
            </ul>

            <!-- Categories Section -->
            <ul class="navbar-nav text-center mt-3">
                <li class="nav-item bg-dark p-2">
                    <a href="#" class="nav-link text-white"><h4>Categories</h4></a>
                </li>
                <?php getcategories(); ?> <!-- Fetch categories -->
            </ul>
        </div>



        <!-- product full pictures about  -->

<!-- product pictures in a common_fuction to make static data -->



                <?php 
                view_details();
                get_unique_categories();
                get_unique_brands();
                ?> <!-- Fetch products -->
            </div>
        </div>
    </div>
</div>
               

<!-- improvement -->







<br><br><br>

<!-- Categories Section -->
<section id="categories">
    <h2 class="categories_style">BROWSE BY CATEGORY</h2>
    <br><br>
    <div class="categories-container">
        <div class="category-box">Women Arrivals</div>
        <div class="category-box">Men Arrivals</div>
        <div class="category-box">Kids Arrivals</div>
        <div class="category-box">Junior Arrivals</div>
        <div class="category-box">Sport Wearing</div>
        <div class="category-box">Home Outfit</div>
    </div>
</section>

<br><br><br>


    <div class="new-arrivals-section">
        <h2 class="new-arrivals-title">TOP SELLING</h2>
        <br><br>

        <div class="new-arrivals-container">
        <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Blazers2.png" alt="Apple">
                <h5 class="card-title">River Island Blazer</h5>
                <div class="stars">⭐⭐⭐⭐☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Blazer, designed for those who appreciate timeless style, sharp tailoring, and effortless versatility. You every day choise</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/Accessories_Louis_Vuitton_Structured_Handbags1.png" alt="Apple">
                <h5 class="card-title">Louis Vuitton Handbag</h5>
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p class="price">£152</p>
                <p class="card-text">Louis Vuitton handbag, handbag showcases premium materials, exquisite detailing, and suitable for every day use</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Cardigans2.png" alt="Apple">
                <h5 class="card-title">River Island Cardigan</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Cardigan Collection, designed to keep you warm while elevating your everyday look. Based of every day use </p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Trench_Coats2.png" alt="Apple">
                <h5 class="card-title">River Island Trench</h5>
                <div class="stars">⭐⭐⭐☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Trench Coat, a perfect blend of classic design and modern refinement. Support you with warm callor and quality materials</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Trench_Coats2.png" alt="Apple">
                <h5 class="card-title">River Island Trench</h5>
                <div class="stars">⭐⭐⭐☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Trench Coat, a perfect blend of classic design and modern refinement. Support you with warm callor and quality materials</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/UNIQLO_Bottoms_Dark_Wash_Jeans2.png" alt="Apple">
                <h5 class="card-title">UNIQLO Jeans</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Dark Jeans, designed for those who appreciate timeless style, premium quality, and a flawless fit. Every day choise</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            </div>
            </div>
        
<br><br>


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

<br><br><br><br>



    

    <div class="new-arrivals-section">
        <h2 class="new-arrivals-title">NEW ARRIVALS</h2>

        <br><br>

        <div class="new-arrivals-container">
        <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Blazers2.png" alt="Apple">
                <h5 class="card-title">River Island Blazer</h5>
                <div class="stars">⭐⭐⭐⭐☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Blazer, designed for those who appreciate timeless style...</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/Accessories_Louis_Vuitton_Structured_Handbags1.png" alt="Apple">
                <h5 class="card-title">Louis Vuitton Handbag</h5>
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p class="price">£152</p>
                <p class="card-text">Louis Vuitton handbag, handbag showcases....</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Cardigans2.png" alt="Apple">
                <h5 class="card-title">River Island Cardigan</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Cardigan Collection, designed to keep... </p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Trench_Coats2.png" alt="Apple">
                <h5 class="card-title">River Island Trench</h5>
                <div class="stars">⭐⭐⭐☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Trench Coat, a perfect blend of classic design and modern....</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/UNIQLO_Bottoms_Dark_Wash_Jeans2.png" alt="Apple">
                <h5 class="card-title">UNIQLO Jeans</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Dark Jeans, designed for those who appreciate timeless style...</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Trench_Coats3.png" alt="Apple">
                <h5 class="card-title">River Island Trench</h5>
                <div class="stars">⭐⭐⭐⭐☆</div>
                <p class="price">£152</p>
                <p class="card-text">River Island Trench Coat, a timeless wardrobe staple designed......</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Blazers3.png" alt="Apple">
                <h5 class="card-title">River Island Blazer new</h5>
                <div class="stars">⭐⭐⭐⭐☆</div>
                <p class="price">£152</p>
                <p class="card-text">River Island Blazer, a perfect mix of classic......</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Blazers1.png" alt="Apple">
                <h5 class="card-title">River Island blazer</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">River Island Blazer, designed for a perfect blend of sophistication...</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/jacket2.png" alt="Apple">
                <h5 class="card-title">UNIQLO Jacket</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">UNIQLO Jacket, designed for ultimate comfort and versatility.........</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/Accessories_Louis_Vuitton_Structured_Handbags3.png" alt="Apple">
                <h5 class="card-title">Louis Vuitton Handbag</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£600</p>
                <p class="card-text">Louis Vuitton Handbag, a perfect blend of iconic... </p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/Accessories_Guess_Sunglasses1.png" alt="Apple">
                <h5 class="card-title">Vogue Sunglases</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">Vogue Sunglasses, designed for fashion-forward individuals... </p>
                <a href="#" class="btn my-2">View More</a>
                
</div>
            <div class="product-card">
                <img src="./images/pradabelt.png" alt="Apple">
                <h5 class="card-title">PRADA BELT</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£80.99</p>
                <p class="card-text">Prada Logo Leather Belt, a statement of sophistication and.... </p>
                <a href="./viewmore.php" class="btn my-2">View More</a>
                
            </div>
        </div>
    </div>
    <br><br>


    
    <div class="button-container">
    <a href="#" class="oval-button ">All Arrivals</a>
</div>



<br><br>

    
    <div class="testimonials-container">
    <h1 class="testimonials-title">Testimonials</h1>
    <p class="testimonials-subtitle">"Quotes from our happy customers"</p>

    <div class="reviews-container">
        <div class="review-card">
            <div class="image" style="background-image: url('users/th.jpeg');"></div>
            <h2 class="name">John Doe</h2>
            <p class="comment">"Absolutely loved this product! High quality and great service."</p>
            <div class="rating">⭐️⭐️⭐️⭐️☆</div>
        </div>
        <div class="review-card">
            <div class="image" style="background-image: url('users/Profile-Portrait-Photographer-in-Dublin-Ireland..jpg');"></div>
            <h2 class="name">Sarah Johnson</h2>
            <p class="comment">"Good value for the price. Will definitely buy again! Absolutely loved this product!"</p>
            <div class="rating">⭐️⭐️⭐️⭐️⭐️</div>
        </div>
        <div class="review-card">
            <div class="image" style="background-image: url('users/business_headshot_linkedIn_profile-picture_Dublin_Rafael-Photography.jpg');"></div>
            <h2 class="name">Mike Williams</h2>
            <p class="comment">"Decent product, but delivery took longer than expected. Absolutely loved this product!"</p>
            <div class="rating">⭐️⭐️⭐️☆☆</div>
        </div>
    </div>
</div>

  <br><br><br><br><br>















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


<br><br><br>


















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