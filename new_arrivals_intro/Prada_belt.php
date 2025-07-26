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
    <title>About us</title>
     <!-- bootstrap CSS link -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- css link -->
     <link rel="stylesheet" href="css/productpage.css">
       
     <!-- style not redable and i do in index.php -->

      <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Include Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<style>

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
    /* Full-width scrolling container */
    .scroll-container {
            width: 100vw; /* Full screen width */
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
            animation: scrollRight 15s linear infinite;
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
 
        .about-text {
            max-width: 700px;
        }
        h2 {
            color: #ff9800;
            font-weight: bold;
        }

       
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 80px;
}

.form-row {

    gap: 5px; 
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
       

        .service-card .icon img {
    width: 50%; 
    height: auto; 
    max-width: 100px; 
    margin-bottom: 10px; 
}


/* profile */

.profiles-container {
  display: flex;
  gap: 30px;
  justify-content: center;
  padding: 20px;
}

.profile {
  width: 370px;
  height: 564px;
  background-color: #fff;
  border-radius: 4px;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 16px;
  box-sizing: border-box;
  position: relative;
}

/* Image Styles */
.image {
  width: 236px;
  height: 391px;
  background-size: cover;
  background-position: center;
  border-radius: 4px;
  margin-bottom: 16px;
}

/* Text & Info Styles */
.info {
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.name {
  font-family: 'Inter', sans-serif;
  font-weight: 500;
  font-size: 32px;
  color: #000;
  margin: 0;
}

.title {
  font-size: 16px;
  color: #000;
  margin-top: 8px;
}

/* Social Media Icons */
.social-media {
  display: flex;
  gap: 10px;
  margin-top: 16px;
}

.social-icon {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: #000;
}

.social-icon.twitter {
  background-image: url('twitter-icon.png');
  background-size: contain;
  background-repeat: no-repeat;
}

.social-icon.instagram {
  background-image: url('instagram-icon.png');
  background-size: contain;
  background-repeat: no-repeat;
}

.social-icon.linkedin {
  background-image: url('linkedin-icon.png');
  background-size: contain;
  background-repeat: no-repeat;
}
/* profile */

.testimonials-container {
        text-align: center;
        background-color:  rgba(232, 255, 226, 0.76); /* Green background */
        padding: 30px;
        border-radius: 0px;
        color: black; /* White text for contrast */
    }

    .testimonials-title {
        font-size: 2em;
        font-weight: bold;
    }

    .testimonials-subtitle {
        font-size: 1.2em;
    }

    .reviews-container {
        display: flex;
        justify-content: center;
        gap: 50px;
        flex-wrap: wrap;
        margin-top: 20px;
    }

    .review-card {
        width: 290px;
        height: 350px;

        padding: 35px;
        border: 1px solid #ddd;
        border-radius: 8px;
        text-align: center;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        background: white; 
        color: black; 
    }

    .image {
        width: 80px;
        height: 80px;
        background-size: cover;
        background-position: center;
        border-radius: 50%;
        margin: 0 auto 10px;
    }

    .name {
        font-size: 1.2em;
        margin-bottom: 5px;
    }

    .comment {
        font-style: italic;
        margin-bottom: 10px;
    }

    .rating {
        font-size: 1.5em;
    }
     


/* for product  new arrivals */

.new-arrivals-section {
    width: 80%;
    margin: auto;
}

.new-arrivals-title {
    text-align: left;
    font-size: 24px;
    font-weight: bold;
    color: black;
    text-transform: uppercase;
    margin-bottom: 20px;
}

.new-arrivals-container {
    display: flex;
    justify-content: flex-start; 
    gap: 50px; 
    flex-wrap: wrap;
    padding: 40px 0;
}

.product-card {
    border: 1px solid #ddd;
    padding: 15px;
    text-align: left; 
    width: 220px; 
    border-radius: 8px;
    background-color: white;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center; 
}

.product-card img {
    width: 120px; 
    height: 120px;
    object-fit: cover;
    display: block;
    margin: 0 auto; 
}

.btn {
    display: block;
    margin: 5px 0;
    padding: 5px 10px;
    border: 1px solid black;
    background-color: transparent;
    text-decoration: none;
    color: black;
    border-radius: 4px;
    cursor: pointer;
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

/* center the button */
.button-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 15vh; 
    width: 100%;
}

/* Oval Button Style */
.oval-button {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 190px; 
    height: 55px; 
    border: 2px solid black;
    border-radius:140px; 
    background-color: transparent;
    color: black;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    transition: 0.3s ease-in-out;
}

/* Hover Effect */
.oval-button:hover {
    background-color:rgb(0, 46, 96);
    color: white;
    transform: scale(1.1);
}

/* carusel new */
#banner-area {
    width: 100%;
    height: 100vh; 
    overflow: hidden;
}
.owl-carousel .item img {
    width: 100%;
    height: 100vh; 
    object-fit: cover; 
}

/* #categories {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh; /* Full screen height */
    text-align: center;
}

/* Title Styling */
.section-title {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 20px;
}

/* Grid Layout for Categories */
.categories-container {
    display: grid;
    grid-template-columns: repeat(3, 200px); /* 3 columns */
    gap: 20px; /* Space between boxes */
    justify-content: center;
}

/* Category Box Styling */
.category-box {
    background-color: #f5f5f5;
    padding: 20px;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    border-radius: 10px;
    transition: 0.3s;
    cursor: pointer;
}

/* Hover Effect */
.category-box:hover {
    background-color: black;
    color: white;
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 768px) {
    .categories-container {
        grid-template-columns: repeat(2, 200px); 
    }
}

@media (max-width: 480px) {
    .categories-container {
        grid-template-columns: repeat(1, 200px); 
    }
} 

/* section for buers */


#categories {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh; 
    text-align: center;
}

/* Title Styling */
.section-title {
    font-size: 32px;
    font-weight: bold;
    margin-bottom: 20px;
}

/* Flexbox Horizontal Alignment */
.categories-container {
    display: flex;
    justify-content: center;
    gap: 20px; 
    flex-wrap: wrap; 
}









/* Categories Box Styling */
.category-box {
    background-color: #f5f5f5;
    padding: 20px 30px;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    border-radius: 10px;
    transition: 0.3s;
    cursor: pointer;
}

/* Hover Effect */
.category-box:hover {
    background-color: black;
    color: white;
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 800px) {
    .categories-container {
        flex-wrap: wrap; 
    }
}

@media (max-width: 768px) {
    .category-box {
        padding: 15px 25px; 
    }
}

@media (max-width: 600px) {
    .categories-container {
        flex-direction: column; 
    }
}



/* Smaller Categories Section */
#categories {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: auto; 
    padding: 40px 0; 
}

/* Title Styling */
.categories_style {
    font-size: 48px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 2px;
    color: #333;
    margin-bottom: 50px; 
}

/* Horizontal Box Layout */
.categories-container {
    display: flex;
    justify-content: center;
    gap: 30px; 
    flex-wrap: wrap; 
}

/* Category Box Styling */
.category-box {
    background-color: #f5f5f5;
    padding: 39px 30px; 
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    border-radius: 6px;
    transition: 0.3s;
    cursor: pointer;
}

/* Hover Effect */
.category-box:hover {
    background-color: black;
    color: white;
    transform: scale(1.05);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .categories-container {
        flex-wrap: wrap; 
    }
}

@media (max-width: 768px) {
    .categories_style {
        font-size: 36px;
    }

    .category-box {
        padding: 12px 20px;
    }
}

@media (max-width: 600px) {
    .categories-container {
        flex-direction: column; 
        align-items: center;
    }
}
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




<!-- new stuff to place  -->


 <!-- Product Section -->
<div class="col-md-10">
<div class="row">


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

<br><br><br>

<!-- Categories Section -->
<section id="categories">
    <h2 class="categories_style">Browse by Category</h2>
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

        <div class="new-arrivals-container">
        <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Blazers2.png" alt="Apple">
                <h5 class="card-title">River Island Blazer</h5>
                <div class="stars">⭐⭐⭐⭐☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Blazer, designed for those who appreciate timeless style, sharp tailoring, and effortless versatility. You every day choise</p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
            </div>
            <div class="product-card">
                <img src="./images/Accessories_Louis_Vuitton_Structured_Handbags1.png" alt="Apple">
                <h5 class="card-title">Louis Vuitton Handbag</h5>
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p class="price">£152</p>
                <p class="card-text">Louis Vuitton handbag, handbag showcases premium materials, exquisite detailing, and suitable for every day use</p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Cardigans2.png" alt="Apple">
                <h5 class="card-title">River Island Cardigan</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Cardigan Collection, designed to keep you warm while elevating your everyday look. Based of every day use </p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Trench_Coats2.png" alt="Apple">
                <h5 class="card-title">River Island Trench</h5>
                <div class="stars">⭐⭐⭐☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Trench Coat, a perfect blend of classic design and modern refinement. Support you with warm callor and quality materials</p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
            </div>
            <div class="product-card">
                <img src="./images/UNIQLO_Bottoms_Dark_Wash_Jeans2.png" alt="Apple">
                <h5 class="card-title">UNIQLO Jeans</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Dark Jeans, designed for those who appreciate timeless style, premium quality, and a flawless fit. Every day choise</p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
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

        <div class="new-arrivals-container">
        <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Blazers2.png" alt="Apple">
                <h5 class="card-title">River Island Blazer</h5>
                <div class="stars">⭐⭐⭐⭐☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Blazer, designed for those who appreciate timeless style, sharp tailoring, and effortless versatility. You every day choise</p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
            </div>
            <div class="product-card">
                <img src="./images/Accessories_Louis_Vuitton_Structured_Handbags1.png" alt="Apple">
                <h5 class="card-title">Louis Vuitton Handbag</h5>
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p class="price">£152</p>
                <p class="card-text">Louis Vuitton handbag, handbag showcases premium materials, exquisite detailing, and suitable for every day use</p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Cardigans2.png" alt="Apple">
                <h5 class="card-title">River Island Cardigan</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Cardigan Collection, designed to keep you warm while elevating your everyday look. Based of every day use </p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Trench_Coats2.png" alt="Apple">
                <h5 class="card-title">River Island Trench</h5>
                <div class="stars">⭐⭐⭐☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Trench Coat, a perfect blend of classic design and modern refinement. Support you with warm callor and quality materials</p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
            </div>
            <div class="product-card">
                <img src="./images/UNIQLO_Bottoms_Dark_Wash_Jeans2.png" alt="Apple">
                <h5 class="card-title">UNIQLO Jeans</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Dark Jeans, designed for those who appreciate timeless style, premium quality, and a flawless fit. Every day choise</p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
            </div>
            <div class="product-card">
                <img src="./images/UNIQLO_Bottoms_Dark_Wash_Jeans2.png" alt="Apple">
                <h5 class="card-title">UNIQLO Jeans</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Dark Jeans, designed for those who appreciate timeless style, premium quality, and a flawless fit. Every day choise</p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
            </div>
            <div class="product-card">
                <img src="./images/UNIQLO_Bottoms_Dark_Wash_Jeans2.png" alt="Apple">
                <h5 class="card-title">UNIQLO Jeans</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Dark Jeans, designed for those who appreciate timeless style, premium quality, and a flawless fit. Every day choise</p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
            </div>
            <div class="product-card">
                <img src="./images/UNIQLO_Bottoms_Dark_Wash_Jeans2.png" alt="Apple">
                <h5 class="card-title">UNIQLO Jeans</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Dark Jeans, designed for those who appreciate timeless style, premium quality, and a flawless fit. Every day choise</p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
            </div>
            <div class="product-card">
                <img src="./images/UNIQLO_Bottoms_Dark_Wash_Jeans2.png" alt="Apple">
                <h5 class="card-title">UNIQLO Jeans</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Dark Jeans, designed for those who appreciate timeless style, premium quality, and a flawless fit. Every day choise</p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
            </div>
            <div class="product-card">
                <img src="./images/UNIQLO_Bottoms_Dark_Wash_Jeans2.png" alt="Apple">
                <h5 class="card-title">UNIQLO Jeans</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Dark Jeans, designed for those who appreciate timeless style, premium quality, and a flawless fit. Every day choise</p>
                <a href="#" class="btn my-2">Add to Cart</a>
                
            </div>
        </div>
    </div>


    
    <div class="button-container">
    <a href="#" class="oval-button ">View All</a>
</div>





    
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
          <p class="font-rale font-size-14">&copy; Designed by <a href="#" class="color-second">christina</a></p>
        </div>
 

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