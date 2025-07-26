# MyStore_project
PHP, MySQL
eCommerce Website – index.php Page
This file is the homepage of an eCommerce website built using PHP, MySQL, Bootstrap, jQuery, and Owl Carousel. It dynamically displays products, categories, brands, and supports features like shopping cart, product search, and user authentication.

File Breakdown: index.php
1. PHP Includes
php
include('includes/connect.php');
include('functions/common_function.php');
connect.php: Establishes connection to the MySQL database.

common_function.php: Contains reusable functions such as cart(), getbrands(), getcategories(), etc.

2. HTML <head> Section
This section loads:

Bootstrap 4 & 5 

Font Awesome for icons

Custom CSS files:

styleheader.css

index.css

cart.css

Owl Carousel for image sliders

3. Navigation Bar (Header)
A responsive navbar with:

Logo

Navigation links: Home, Products, Register, About Us, Cart

Cart Item Count → cart_item()

Total Cart Price → total_cart_price()

Search Form → Submits to search_product.php

4. Cart Functionality
php
Copy code
<?php cart(); ?>
This function handles "Add to Cart" actions and displays cart-related information.

5. User Welcome Message
php
Copy code
<a class="nav-link text-black" href="./registration.php">Welcome Guest</a>
Currently hardcoded. Can be dynamically updated based on user session status.

6. Store Introduction
html
Copy code
<h3 class="text-center">MY STORE</h3>
<p class="text-center">Communication help us grow...</p>
Brief introduction text under the main header.

7. Left Sidebar: Brands & Categories
php
Copy code
<?php getbrands(); ?>
<?php getcategories(); ?>
Dynamically loads brands and categories from the database.

Shown in the left column (col-md-2).

8. Main Product Area
php
Copy code
<?php 
getproducts(); 
get_unique_categories();
get_unique_brands();
?>
Displays products dynamically based on:

All products

Filter by selected brand or category

Output is shown in a grid format on the right side.

9. Static Sections: Highlights & Products
Categories
html
Copy code
<section id="categories">

</section>
Hardcoded category labels like "Women Arrivals", "Sport Wearing", etc.

Top Selling & New Arrivals
Hardcoded product cards (with images, price, description)

Useful for showcasing featured products

10. Banner Section (Image Carousel)
html
Copy code
<section id="banner-area">
  <div class="owl-carousel owl-theme">
    
  </div>
</section>
Uses Owl Carousel to rotate banner images (for promotions/marketing)

11. Testimonials
html
Copy code
<div class="testimonials-container">
  
</div>
Hardcoded customer reviews

Includes user name, image, comment, and rating

12. Service Highlights
html
Copy code
<div class="service-card">

</div>
Displays key services:

Free Delivery

24/7 Support

30-Day Return Policy

13. Footer
php
Copy code
<?php include("./footer.php") ?>
Modular footer, included from external file

14. JavaScript & Plugins
html
Copy code
<script src="...bootstrap.js"></script>
<script src="...jquery.min.js"></script>
<script src="...owl.carousel.min.js"></script>
Initializes Owl Carousel

Enables carousel autoplay and transitions


aboutus.php – About Us Page
The aboutus.php file serves as the "About Us" section of the eCommerce website. It introduces the platform, highlights services, showcases the team, and shares the company’s values and vision. Built with PHP, HTML, Bootstrap, and Font Awesome, it is a fully responsive and informative page.

1. Head Section (<head>)
Includes essential metadata and external resources:

Bootstrap 4.4.1 and 5.3.3 

Font Awesome 6.0.0 & 6.7.2 for icons

Custom stylesheets:

styleheader.css for navbar and layout

aboutus.css for About Us-specific styling

Owl Carousel CSS: Included, although not used in this file

2. Navigation Bars
Two navbar sections provide navigation across the site:

Top Navbar
Logo (links to homepage)

Links: Home, Register, About Us, Cart, Total Price

Search bar

Secondary Navbar
Displays "Welcome Guest"

Login link

3. Intro Section (Optional Placeholder)
html
Copy code
<h3 class="text-center"></h3>
<p class="text-center"></p>
This placeholder section is empty. It could be used for additional headings or breadcrumb navigation.

4. About Us Content
html
Copy code
<div class="about-container">...</div>
Main content block describing:

Platform purpose

Services for customers:

Diverse products

Easy shopping

Fast shipping

Support team

Services for businesses:

Product & order management

Insights and promotions

Seller support

Brand values: Innovation, integrity, customer focus, etc.

This section provides both marketing content and company mission.

5. Meet the Team
html
Copy code
<div class="Shop-owners">...</div>
Displays three fictional team members with:

Profile images

Names and roles (e.g., Tom Cruise – Founder)

Social media icons (Twitter, Instagram, Facebook)

6. Service Highlights
html
Copy code
<div class="container">
  <div class="service-card">...</div>
</div>
Showcases 3 core customer promises:

Free delivery over £140

24/7 support

30-day money-back guarantee

Each includes an icon and description.

7. Footer
php
Copy code
<?php include("./footer.php"); ?>
Includes a shared footer file for consistency across pages.

8. JavaScript Includes
Scripts at the end include:

Bootstrap JS (again, twice) – remove duplicates

jQuery


cart.php – Shopping Cart Page
The cart.php file is the shopping cart interface of the eCommerce platform. It displays selected products, allows quantity updates, lets users remove items, apply coupons, and proceed to checkout.

1. PHP Includes & Setup
php
Copy code
include('includes/connect.php');
include('functions/common_function.php');
connect.php: Establishes database connection.

common_function.php: Contains reusable functions like getIPAddress(), cart_item(), and cart().

2. Navigation Bars
Main Navbar:
Logo

Links to Home, Products, Register, About Us, Cart

Cart icon shows dynamic item count using cart_item() function.

Secondary Navbar:
Shows "Welcome Guest"

Login link

3. Header Section
Displays the website name and a motivational tagline:

html
Copy code
<h3 class="text-center">MY STORE</h3>
<p class="text-center">Communication help us grow and create new innovation, big project, big responsibility</p>
🛍️ 4. Dynamic Cart Table
The table displays:

Product Title

Product Image

Quantity input 

Price

Remove checkbox

Update/Remove buttons

Backend Logic:
Gets current IP address via getIPAddress()

Retrieves products in cart from cart_details

Fetches product info from products table

Calculates subtotal (price only, quantity ignored for now)

5. Coupon Code Section
html
Copy code
<form action="apply_coupon.php" method="POST">
  <input type="text" name="coupon_code" ...>
  <button type="submit">Apply</button>
</form>
Users can enter a coupon code (functionality not shown in this file).

Form submits to a separate apply_coupon.php.

6. Cart Total Summary
Displayed if the cart is not empty:

Element	Value
Subtotal	Sum of item prices
Shipping	Free
Total	Same as subtotal (no tax or coupon logic shown yet)

Includes buttons:

Proceed to Checkout

Continue Shopping

7. Remove Item Functionality
php
Copy code
function remove_cart_item() {
  ...
}

8. Footer
php
Copy code
include("./footer.php");
Includes a reusable footer for consistent design across pages.

9. Styles & Libraries Used
CSS:
Bootstrap 4.4.1 & 5.3.3 

Font Awesome 6.0.0 & 6.7.2 

Custom CSS: styleheader.css, index.css, cart.css

JS:
Bootstrap Bundle (twice, redundant)

jQuery

Owl Carousel 


edit_account.php – Edit Account Page
This page allows users to manage and edit their account details, such as name, email, address, and password. It also includes account navigation links like profile, wishlist, orders, and address book.

Includes
php
Copy code
include('includes/connect.php');
include('functions/common_function.php');
connect.php: Connects to the database.

common_function.php: Loads reusable functions across pages.

Page Structure
1. Head Section
Meta tags and responsive settings.

CSS Libraries:

Bootstrap 4.4.1 and 5.3.3 

Font Awesome 6.7.2 and 6.0.0 

Custom styles: styleheader.css, edit_acount.css, index.css.

2. Navbar
Logo and navigation links: Home, Products, Register, About Us, Cart.

Dynamic cart icon and price display.

Search bar (search_product.php).

3. Secondary Navbar
Static guest welcome and login link.

4. Header
Displays a centered store title and a short description:

html
Copy code
<h3 class="text-center">MY STORE</h3>
<p class="text-center">Communication help us grow and create new innovation, big project, big responsibility</p>
Page Layout
The page has a two-column layout:

Sidebar (Left)
User account navigation links:

Manage Account: Profile, Address Book, Payment Options.

My Orders: Returns, Cancellations.

My Wishlist

Main Content (Right)
Edit Profile Form:

Fields: First Name, Last Name, Email, Address.

Password section:

Current password

New password

Confirm password

Buttons: Cancel and Save Changes

Form action:

php
Copy code
<form action="edit_profile.php" method="post">
No client-side validation or password matching logic shown.

Footer
Included via:

php
Copy code
include("./footer.php");

footer.php – Website Footer Section
This file defines the footer layout for the website, providing branding, informational links, a newsletter subscription form, and copyright.

Key Features
Section	Content
Branding	Site name (MyShop), short description, and link to homepage
Newsletter	Email input field and subscribe button (UI only, no backend functionality)
Information	Links like About Us, Privacy Policy, Terms & Conditions
Account	Links to user-related pages such as My Account, Order History, Wishlist
Copyright	© 2025 notice with designer credit (Christina)

Layout Structure
Uses Bootstrap's grid system to arrange footer content into 4 responsive columns:

html
Copy code
<div class="container">
  <div class="row">
    <div class="col-lg-3">...</div>    <!-- Branding -->
    <div class="col-lg-4">...</div>    <!-- Newsletter -->
    <div class="col-lg-2">...</div>    <!-- Information Links -->
    <div class="col-lg-2">...</div>    <!-- Account Links -->
  </div>
</div>
📝 Code Summary
🔹 Branding Column
html
Copy code
<h4>MyShop</h4>
<p>Lorem ipsum...</p>
<a href="index.php">HOME</a>
Displays brand name and homepage link

Placeholder description text

🔹 Newsletter Column
html
Copy code
<form class="form-row">
  <input type="text" class="form-control" placeholder="Email *">
  <button type="submit" class="btn btn-primary">Subscribe</button>
</form>
Newsletter subscription form

🔹 Information Links
html
Copy code
<a href="aboutus.php">About Us</a>
<a href="#">Delivery Information</a>
<a href="#">Privacy Policy</a>
<a href="#">Terms & Conditions</a>


🔹 Account Links
html
Copy code
<a href="#">My Account</a>
<a href="#">Order History</a>
<a href="#">Wish List</a>
<a href="#">Newsletters</a>
Common user account links

Placeholder URLs 

🔹 Footer Bottom Bar
html
Copy code
<p>&copy; Copyrights 2025. 
Design By <a href="#">Christina</a></p>
Footer credit and year

Designer’s name with a placeholder link


login.html – User Login Page
This file contains the HTML structure for the user login page of the website. It provides a simple and clean form for users to enter their email and password to log in.

Structure Overview
Container: Divides the page into two main sections:

Image Section: Displays a relevant image (reg.png) to enhance the visual appeal.

Form Section: Contains the login form with input fields and buttons.

Code Breakdown
Head Section
Defines the page title as Login.

Links two CSS files for styling:

styleheader.css (likely for header/global styles)

login.css (specific styles for the login page)

html
<link rel="stylesheet" href="css/styleheader.css">
<link rel="stylesheet" href="css/login.css">
Body Section
html
Copy code
<div class="container">
    <!-- Image on the left -->
    <div class="image-section">
        <img src="./images/reg.png" alt="Fashion Image">
    </div>

    <!-- Login form on the right -->
    <div class="form-section">
        <h2>Log in to Exclusive</h2>
        <form action="#" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="login-container">
                <button type="submit" class="login-btn">Log In</button>
                <p class="forgot-password"><a href="#">Forgot Password?</a></p>
            </div>
        </form>
    </div>
</div>
Image Section: Shows a static image to the side of the login form for branding or decoration.

Form Section:

Heading: "Log in to Exclusive"

Form with:

Email input (required)

Password input (required)

Submit button labeled "Log In"

Link for "Forgot Password?" 

Functionality
The form uses POST method to send data securely.

The form action is set to "#" which means the form does not submit anywhere yet—backend processing needs to be implemented.

The "Forgot Password?" link is a placeholder and needs a proper URL to enable password recovery.

Optimizing searching queries 

1. PHP Includes
php
Copy code
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>

2. HTML Head
Defines page metadata and includes Bootstrap CSS (for styling/layout), Font Awesome (for icons), Owl Carousel CSS (for image sliders), and custom CSS files (styleheader.css and index.css).

3. Navbar
html
Copy code
<nav class="navbar navbar-expand-lg bg-pink">
  <!-- Logo, menu links, cart icon with item count and total price -->
</nav>
A responsive navigation bar using Bootstrap.

Links like Home, Register, About Us, Cart icon with item count (dynamic via PHP cart_item()), and total cart price (total_cart_price()).

Includes a search form to allow users to search products.

4. User Login Navbar
html
<nav class="navbar navbar-expand-lg navbar-dark bg-white">
  <ul>
    <li>Welcome Guest</li>
    <li><a href="./users_area/user_login.php">Login</a></li>
  </ul>
</nav>
Secondary navbar showing login/register 

5. Sidebar (Left Column)
php
Copy code
<div class="col-md-2 bg-secondary p-3 sidebar-fixed">
  <ul>
    <li>Delivery Brands</li>
    <?php getbrands(); ?>
  </ul>
  <ul>
    <li>Categories</li>
    <?php getcategories(); ?>
  </ul>
</div>
Displays brands and categories fetched dynamically via PHP functions getbrands() and getcategories().


6. Main Content Area (Right Column)
php
Copy code
<div class="col-md-10">
  <div class="row justify-content-center">
    <?php 
      search_product();
      get_unique_categories();
      get_unique_brands();
    ?>
  </div>
</div>
Shows products based on:

search_product() — display products matching a search query.

get_unique_categories() and get_unique_brands() — display products filtered by category or brand.

These functions output the product listings dynamically.

7. Static Sections
You have multiple sections with hardcoded content like:

Categories browse boxes (Women Arrivals, Men Arrivals, etc.).

Top Selling products, New Arrivals (with product cards, images, descriptions).

Testimonials from users.

Services like Free Delivery, Customer Service, Money Back Guarantee.

Footer with site information, newsletter form, and links.

8. Carousel
Uses Owl Carousel for image sliders in the banner section, with 3 banners rotating.

9. Footer
Contains site info, newsletter subscription form, account and info links, copyright.

10. Dynamic PHP Integration
The PHP code integrated into HTML is mainly for:

Fetching and displaying dynamic content from database (brands, categories, products).

Showing real-time cart data (items and total price).

Handling search queries.

Ecommerce Website Frontend (Product Detail Page)
This HTML file represents a product detail page for an ecommerce website, specifically showcasing a Prada belt product. The page is built using HTML, CSS, Bootstrap, Font Awesome, and jQuery/Owl Carousel for styling, icons, and interactivity.

Code Explanation
1. Document Structure and Meta
The document starts with a standard HTML5 doctype and sets the language to English.

The <head> section includes meta tags for character encoding and viewport settings to ensure responsiveness on mobile devices.

The title of the page is set to "Ecommerce Website using PHP and MySQL".

2. Styles and External Resources
Several CSS files are linked:

Bootstrap CSS (versions 4.4.1 and 5.3.3) for responsive layout and styling.

Font Awesome for icon fonts used (e.g., cart icon, star ratings).

Owl Carousel CSS for the carousel/slider styling.

A custom CSS file styleheader.css is included (likely contains custom header styles).

An internal <style> block defines:

General page styles (fonts, layout, buttons).

Responsive media queries for smaller screens.

Styling for the product featured section including images, hover effects, and layout.

Styling for the footer and buttons.

3. Navbar
The page contains two navbars:

Primary Navbar (navbar-expand-lg with a logo, navigation links including Home, Register, About Us, a shopping cart icon with item count, and total price display).

Secondary Navbar (white background) showing user welcome text and login/register links.

The navbars are responsive with toggle buttons for small screens.

4. Featured Product Section
This section highlights the Prada Belt product.

The section contains:

A heading/title (PRADA BELT).

A two-column layout using flexbox:

Left column: Displays a large product image (big-image) and multiple smaller thumbnail images (small-image).

Right column: Contains product details such as product name, star ratings using Font Awesome stars, a product description, price, and an "Add to Cart" button.

Thumbnail images are clickable and change the large image dynamically using JavaScript (click on small images updates the big image source).

5. Footer
The footer is included via a PHP include statement (include("./footer.php")), so the actual footer content is modular and located in a separate file.

This keeps the code organized and reusable.

6. JavaScript and Interactivity
Bootstrap JS bundle for responsive components like navbar toggling.

jQuery and Owl Carousel for sliders (though not explicitly used in this page, included for site-wide use).

A small custom JavaScript snippet that listens for clicks on the small product images and updates the large main image accordingly.

7. Responsive Design
Media queries ensure the page looks good on mobile and tablet devices by adjusting flex direction, image sizes, fonts, and button sizes.









