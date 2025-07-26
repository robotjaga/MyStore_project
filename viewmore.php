
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website using PHP and MySQL</title>
     <!-- Bootstrap CDN for footer -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- css link -->
     <link rel="stylesheet" href="css/styleheader.css">
     

     <!-- style not redable and i do in index.php -->


      <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    
     <style>
 /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    text-align: center;
}

/* Scrollable Banner */
.scroll-container {
    width: 100vw;
    overflow: hidden;
    white-space: nowrap;
    background: #f8f9fa;
    padding: 15px 0;
}
.scroll-content {
    display: inline-block;
    white-space: nowrap;
    animation: scrollRight 15s linear infinite;
}
/* Container Layouts */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 50px;
    padding: 20px;
}

/* Buttons */
.btn {
    padding: 8px 15px;
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



/* Responsives */
@media (max-width: 768px) {
    .profiles-container {
        flex-direction: column; 
        align-items: center; 
        gap: 15px; 
    }

    .profile {
        width: 90%; 
        max-width: 350px; 
        padding: 12px; 
    }

    .image {
        width: 90%; 
        max-width: 220px; 
        height: auto; 
    }

    .name {
        font-size: 28px; 
    }

    .title {
        font-size: 14px; 
    }

    .social-media {
        gap: 8px; 
    }

    .social-icon {
        width: 22px; 
        height: 22px;
    }
}



/* profile pages */


/* footer */
.buttonforfooter {
    display: flex;
    justify-content: center; 
    margin-top: 10px;
}

/* Even Longer & Centered Subscribe Button */
.btn-footer {
    width: 500px; 
    height: 45px; 
    display: flex;
    align-items: center; 
    justify-content: center; 
    font-size: 20px; 
    background-color: white; 
    color: #ff9800; 
    border: 2px solid #ff9800; 
    border-radius: 8px; 
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
}

/* Hover Effect */
.btn-footer:hover {
    background-color: #ff9800; 
    color: white; 
}

/* Responsive Footer */
@media (max-width: 768px) {
    .footer .row {
        flex-direction: column;
        text-align: center;
    }

    .footer .form-row {
        flex-direction: column;
    }

    /* Responsive Subscribe Button */
    .btn-footer {
        width: 100%;
        max-width: 300px; 
        height: 50px; 
        font-size: 18px; 
    }
}
/* footer */

/* code for new cards start  */

/* Featured Section Styling */
/* Featured Section Styling */
.featured {
    padding: 4rem 2rem;
    background: var(--light-bg);
    text-align: center;
}

.featured .heading {
    font-size: 3.5rem;
    color: var(--black);
    margin-bottom: 3rem;
}

.featured .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    gap: 3rem;
    border-radius: 1rem;
    padding: 3rem;
    background: var(--white);
    box-shadow: var(--box-shadow);
}

.featured .image-container {
    flex: 1 1 45%;
    text-align: center;
}

.featured .content {
    flex: 1 1 45%;
    text-align: left;
    padding: 2rem;
}

.featured .big-image img {
    width: 100%;
    max-width: 450px;
    height: auto;
    object-fit: cover;
    border-radius: 1rem;
    box-shadow: var(--box-shadow);
    transition: transform 0.3s ease-in-out;
}

.featured .big-image img:hover {
    transform: scale(1.05);
}

.featured .small-image {
    margin-top: 1.5rem;
    display: flex;
    justify-content: center;
    gap: 1rem;
}

.featured .small-image img {
    width: 80px;
    height: 60px;
    object-fit: cover;
    border-radius: 0.5rem;
    border: var(--border);
    cursor: pointer;
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

.featured .small-image img:hover {
    transform: scale(1.1);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
}
/* code for new cards end  */


    </style>

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
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./registration.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./aboutus.php">About Us</a>
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
        <a class="nav-link text-black" href="./registration.php">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="./registration.php">Login</a>
        </li>

</ul>
 </nav>
</div>
</div>

 <!-- thirt child -->
  <div class="bg-white">
<h3 class="text-center"></h3>
<p class="text-center"></p>
  </div>
</div>




<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>PRADA BELT</span></h1>

    <div class="row">
        <div class="image-container">
            <div class="big-image">
                <img src="./images/Accessories_Prada_Leather_Belts1.png" class="big-image-1" alt="">
            </div>
            
            <div class="small-image">
                <img src="./images/pradabelt4.png" class="featured-image-1" alt="">
                <img src="./images/pradabelt2.png" class="featured-image-1" alt="">
                <br>
                <img src="./images/pradabelt.png" class="featured-image-1" alt="">
                <br>
                <img src="./images/Accessories_Prada_Leather_Belts1.png" class="featured-image-1" alt="">
            </div>
        </div>
        <div class="content">
            <h3>Prada new arrival belt</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <br>
            <p>Elevate your style with the Prada Logo Leather Belt, a statement of sophistication and luxury. Crafted from premium Saffiano leather, this belt offers durability, a refined texture, and a sleek finish. The iconic Prada triangle logo buckle in polished metal adds a touch of exclusivity, making it the perfect accessory for any outfit—formal or casual.</p>
            <br><br>
            <div class="price">£80.99 <span></span></div>
            <br>
           <a href='index.php?add_to_cart=$product_id' class='btn my-2'>Add to Cart</a>
        </div>
    </div>


</section>

<!-- featured section ends -->
































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


<script>

document.addEventListener("DOMContentLoaded", () => {
    // Select all featured section small images
    const featuredSections = document.querySelectorAll(".featured .row");
    
    featuredSections.forEach(section => {
        let bigImage = section.querySelector(".big-image img");
        let smallImages = section.querySelectorAll(".small-image img");
        
        smallImages.forEach(img => {
            img.addEventListener("click", () => {
                bigImage.src = img.src;
            });
        });
    });
});
</script>
<!-- this was for product cards -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>