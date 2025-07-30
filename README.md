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




User area folder 
checkout.php

PHP Part
php
Copy
Edit
<?php
include('../includes/connect.php');
?>
What it does:
This line connects your checkout page to the database by including the file connect.php. That file likely contains your database connection details (host, username, password, DB name).

HTML Structure
1. <!DOCTYPE html> to <head>
This part sets up the document type and includes the necessary resources:

Meta tags: Set character encoding and responsive behavior.

Title: Sets the browser tab title to "CHECKOUT PAGE".

Stylesheets: Includes various CSS libraries:

Bootstrap 4 & 5: For layout and responsive design.

Font Awesome: For icons.

Custom CSS: my own styles (styleheader.css, index.css, cart.css).

Owl Carousel: For image sliders.


2. <body> Section
🔹 Navbar (<nav> tags):
html
Copy
Edit
<nav class="navbar navbar-expand-lg bg-pink"> ... </nav>
includes:

Logo

Navigation links: Home, Products, Register, About Us

Search form

html
Copy
Edit
<nav class="navbar navbar-expand-lg navbar-dark bg-white"> ... </nav>
This is a secondary navbar showing login status:

"Welcome Guest"

"Login" link

🔹 Store Header
html
Copy
Edit
<div class="bg-white">
  <h3 class="text-center">MY STORE</h3>
  <p class="text-center">...</p>
</div>
This section introduces your store with a title and a message.

3. Checkout Content Logic
php
Copy
Edit
<?php
if(!isset($_SESSION['username'])){
    include('user_login.php');
}else{
    include('payment.php');   
}
?>
This is the core logic of the page:

If the user is not logged in, it shows the login form (user_login.php).

If the user is logged in, it shows the payment page (payment.php).


4. Footer and Scripts

Multiple JS libraries are included:

Bootstrap JS

jQuery

Owl Carousel

Custom Owl Carousel initialization scripts


Payment.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <P>hello!!! checkout session here </P>
</body>
</html>

on working process

profile.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>aaaaa!!!ola is you account page here!!!</p>
</body>
</html>

on working process


user_login.php

PHP Code (User Login Logic)
This block runs before the HTML and processes login requests.

php
Copy
Edit
<?php
include('../includes/connect.php');
include('../functions/common_function.php');
connect.php — connects to your MySQL database.

common_function.php — contains helper functions like getIPAddress() (used later).

When the user submits the login form:
php
Copy
Edit
if (isset($_POST['user_login'])) {
If the login form is submitted (user_login button clicked), it triggers the login process.

1. Capture form inputs:
php
Copy
Edit
$user_username = $_POST['user_username'];
$user_password = $_POST['user_password'];
Gets the username and password entered by the user.

2. Sanitize input (for security):
php
Copy
Edit
$user_username = mysqli_real_escape_string($con, $user_username);
Escapes special characters to prevent SQL injection.

3. Check if user exists:
php
Copy
Edit
$select_query = "SELECT * FROM `user_table` WHERE username='$user_username'";
$result = mysqli_query($con, $select_query);
Looks for a user with that username in the user_table.

4. Handle DB errors:
php
Copy
Edit
if (!$result) {
    die("Query failed: " . mysqli_error($con));
}
If query fails, show error and stop script.

5. Check if user found:
php
Copy
Edit
$row_count = mysqli_num_rows($result);
If row_count > 0, the username exists.

6. Fetch user data:
php
Copy
Edit
$row_data = mysqli_fetch_assoc($result);
Retrieves the user’s row from the DB.

7. Check if user has items in cart:
php
Copy
Edit
$user_ip = getIPAddress();
$select_query_cart = "SELECT * FROM `cart_details` WHERE ip_address='$user_ip'";
$select_cart = mysqli_query($con, $select_query_cart);
$row_count_cart = mysqli_num_rows($select_cart);
Gets the user's IP address.

Checks if there are any items in the cart associated with that IP address.

8. Verify the password:
php
Copy
Edit
if (password_verify($user_password, $row_data['user_password'])) {
Compares the input password with the hashed password stored in the DB.

9. Successful login:
php
Copy
Edit
session_start();
$_SESSION['username'] = $user_username;
Starts a session and stores the username in it.

Then redirects user based on cart:

php
Copy
Edit
if ($row_count_cart == 0) {
    echo "<script>window.open('profile.php', '_self');</script>";
} else {
    echo "<script>window.open('payment.php', '_self');</script>";
}
If cart is empty → go to profile.php.

If cart has items → go to payment.php.

If login fails:
php
Copy
Edit
echo "<script>alert('Invalid Username or Password');</script>";
Simple alert if the username doesn't exist or password doesn't match.

HTML Code (Login Form)
This part displays the login form visually to the user.

Page Head
html
Copy
Edit
<title>User Login</title>
<link rel="stylesheet" href="...bootstrap.css">
<link rel="stylesheet" href="...font-awesome.css">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/checkout_login_style.css">
Loads Bootstrap and custom CSS.

Adds responsive media queries for mobile in <style>.

Login Form Layout
html
Copy
Edit
<div class="container">
    <div class="image-section">
        <img src="../images/reg.png" alt="Fashion Image">
    </div>
    
    <div class="form-section text-left">
        <h2>USER LOGIN</h2>
        <form action="#" method="POST">
Left side: Shows an image.

Right side: Contains the login form fields.

Form Fields
html
Copy
Edit
<input type="text" id="user_username" name="user_username" ...>
<input type="password" id="user_password" name="user_password" ...>
Standard fields for username and password.

html
Copy
Edit
<button type="submit" name="user_login" ...>Login</button>
Button that triggers the PHP logic at the top.

html
Copy
Edit
<p class="login-link">Don't have an account?<a href="./user_registration.php">Register</a></p>
Link to registration page for new users.



user_registration.php

PART 1: PHP Includes
php
Copy
Edit
<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>
These lines:

Connect to the MySQL database using connect.php.

Include helper functions from common_function.php 

PART 2: HTML - Registration Form
html
Copy
Edit
<form action="" method="POST" entype="multipart/form-data">
Typo Alert: entype should be enctype. This enables image upload:

html
Copy
Edit
<form action="" method="POST" enctype="multipart/form-data">
This form collects:

Username

Email

Image upload

Password and confirmation

Address

Mobile number

When submitted, it sends data via POST to the same page, where PHP below handles the registration.

PART 3: PHP - User Registration Logic
This PHP block should ideally be inside if (isset($_POST['user_register'])) { ... } to avoid errors when the page loads without form submission. But currently, it runs on every page load, which is risky.

1. Get form data
php
Copy
Edit
$user_username = $_POST['user_username'];
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];
$hash_password = password_hash($user_password, PASSWORD_DEFAULT);
$user_image = $_FILES['user_image']['name'];
$user_image_tmp = $_FILES['user_image']['tmp_name'];
$user_ip = $_SERVER['REMOTE_ADDR'];
$user_address = $_POST['user_address'];
$user_contact = $_POST['user_contact'];
Collects user input.

Hashes the password securely using password_hash().

Gets uploaded image name + temporary location.

Grabs user's IP (used later for cart checking).

2. Check for duplicates
Username:
php
Copy
Edit
$check_username = "SELECT * FROM `user_table` WHERE username = '$user_username'";
Email:
php
Copy
Edit
$check_email = "SELECT * FROM `user_table` WHERE user_email = '$user_email'";
Mobile:
php
Copy
Edit
$check_contact = "SELECT * FROM `user_table` WHERE user_mobile = '$user_contact'";
If any already exist, registration is stopped using exit().

3. Move image to user_images/ folder
php
Copy
Edit
move_uploaded_file($user_image_tmp, "./user_images/$user_image");
Saves uploaded profile picture in the user_images/ directory.

4. Insert into database
php
Copy
Edit
$insert_query = "INSERT INTO `user_table` 
(username, user_email, user_password, user_image, user_ip, user_address, user_mobile)
VALUES 
('$user_username', '$user_email', '$hash_password', '$user_image', '$user_ip', '$user_address', '$user_contact')";
Executes the insert using mysqli_query.

Shows success alert or dies with an error if insertion fails.

5. Cart check after registration
php
Copy
Edit
$select_cart_items = "SELECT * FROM `cart_details` WHERE ip_address = '$user_ip'";
$result_cart = mysqli_query($con, $select_cart_items);
$rows_count = mysqli_num_rows($result_cart);
Checks if this user’s IP already has items in the cart.

php
Copy
Edit
if ($rows_count > 0) {
    $_SESSION['username'] = $user_username;
    echo "<script>alert('You have items in your cart')</script>";
    echo "<script>windows.open('checkout.php','_self')</script>";
} else {
    echo "<script>windows.open('../index.php','_self')</script>";
}
If cart is not empty, log in the user and go to checkout.

If cart is empty, redirect to home page (index.php).

Issue: windows.open should be window.open

Correct:

js
Copy
Edit
window.open('checkout.php','_self');
SUGGESTED FIXES & IMPROVEMENTS
Wrap logic in form check:

php
Copy
Edit
if (isset($_POST['user_register'])) {
   // All logic here
}
Fix typo:

html
Copy
Edit
<form enctype="multipart/form-data">
Add password confirmation check:

php
Copy
Edit
if ($_POST['user_password'] !== $_POST['comf_user_password']) {
    echo "<script>alert('Passwords do not match');</script>";
    exit();
}
Validate image type and size (optional but good practice).

Session start missing:
If you use $_SESSION, add:

php
Copy
Edit
session_start();
Use prepared statements to prevent SQL injection in production apps.


Folder with functions:
Common_function.php

1. getproducts()
php
Copy
Edit
function getproducts() {
  if (!isset($_GET['category']) && !isset($_GET['brand'])) {
    $select_query = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,12";
    ...
  }
}
Displays 12 random products on the homepage.

Only runs when there's no brand or category filter.

Each product is shown in a Bootstrap card with:

Image

Title

Price

Description

"Add to Cart" button

"View More" button

2. get_all_products()
Same as getproducts(), but:

Displays all products, not just 12.

3. get_unique_categories()
php
Copy
Edit
function get_unique_categories() {
  if (isset($_GET['category'])) {
    $category_id = $_GET['category'];
    ...
  }
}
When a category is selected, fetches and displays all products under that category.

If no products are found, shows a "stock empty" message.

4. get_unique_brands()
Like categories, but for brands:

php
Copy
Edit
if (isset($_GET['brand'])) {
  ...
}
When a brand is selected, displays all products for that brand.

5. getbrands() and getcategories()
These generate links in the sidebar menus:

Brands:
php
Copy
Edit
SELECT * FROM brands
Categories:
php
Copy
Edit
SELECT * FROM categories
Each result creates a <li> with a link that passes the brand_id or category_id as a query parameter.

6. search_product()
php
Copy
Edit
if (isset($_GET['serch_data_product'])) {
  $search_data_value = $_GET['search_data'];
  ...
}
Looks for products whose product_keywords match the search input using SQL LIKE operator.

Displays matching products using the same card layout.

Tip: Fix the typo in the form submit button name (serch_data_product → search_data_product).

7. view_details()
php
Copy
Edit
if (isset($_GET['product_id']) && !isset($_GET['category']) && !isset($_GET['brand'])) {
  ...
}
Displays detailed view of a single product, including:

Main image

Additional images (image2, image3)

Title, description, price

"Choose size" and "Go back" buttons

Used on product_details.php.

8. getIPAddress()
Gets the real IP address of the user:

php
Copy
Edit
function getIPAddress() {
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) ...
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) ...
  else $ip = $_SERVER['REMOTE_ADDR'];
}
Used to associate a user’s cart with their IP address (if they’re not logged in yet).

9. cart()
Adds a product to the cart:

php
Copy
Edit
if (isset($_GET['add_to_cart'])) {
  $product_id = $_GET['add_to_cart'];
  ...
}
Checks if product already exists in the user's cart using their IP.

If not, inserts a new row in cart_details with quantity = 0.

Shows alerts on duplicate or success.

10. cart_item()
Counts how many items the user has in their cart:

php
Copy
Edit
SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add'
Echoes the count.

Can be shown in the navbar or cart icon.

11. total_cart_price()
Calculates total price of items in cart:

php
Copy
Edit
SELECT * FROM `cart_details` WHERE ip_address = '$get_ip_add'
Then for each product:

Fetch its price.

Remove the £ symbol if present.

Add up all prices.

Format the result and print it.


Folder admin_area
edit_profile.php

Includes Database Connection
php
Copy
Edit
include('includes/connect.php');
This line includes a file that contains the database connection code (e.g., $conn = mysqli_connect(...)), so you can run SQL queries later.

Check if the Form is Submitted
php
Copy
Edit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
This makes sure the code runs only when the form is submitted using the POST method.

Collect and Sanitize Form Data
php
Copy
Edit
$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_password = $_POST['confirm_password'];
mysqli_real_escape_string() protects against SQL injection.

$_POST[...] gets the form input values.

current_password, new_password, and confirm_password are taken as raw input because they're typically not outputted directly into SQL without checking.

Identify the User
php
Copy
Edit
$user_id = 1; // Replace with actual session user ID
This is a placeholder.
In a real application, you'd use something like:

php
Copy
Edit
$user_id = $_SESSION['user_id'];
❗ Check if Passwords Match
php
Copy
Edit
if (!empty($new_password) && $new_password !== $confirm_password) {
    echo "New passwords do not match!";
    exit;
}
If the user wants to change their password:

Check that the new and confirm password fields match.

If not, show an error and stop execution.

Build the SQL UPDATE Statement
php
Copy
Edit
$update_fields = "
    first_name = '$first_name',
    last_name = '$last_name',
    email = '$email',
    address = '$address'
";
This is the core of the SQL UPDATE query. It prepares the fields that will be updated.

Hash New Password If Provided
php
Copy
Edit
if (!empty($new_password)) {
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    $update_fields .= ", password = '$hashed_password'";
}
If the user provided a new password, it gets hashed (very important for security).

Then it adds that password update to the SQL string.

Execute the Query
php
Copy
Edit
$sql = "UPDATE users SET $update_fields WHERE id = $user_id";

if (mysqli_query($conn, $sql)) {
    echo "Profile updated successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}
This puts the whole update query together and executes it.

If it works, success message is shown.

If something goes wrong, it shows the error.


index.php

1. HTML Head Section
html
Copy
Edit
<head>
    ...
    <title>Admin dashboard</title>
    <!-- CSS & Bootstrap -->
</head>
What it includes:
Bootstrap for responsive styling

Font Awesome for icons

Custom CSS from ../style.css

Inline CSS styles for:

Admin image

Button hover effects

Footer position

2. Navigation Bar
html
Copy
Edit
<nav class="navbar navbar-expand-lg navbar-light bg-white">
Displays:

A logo (../images/logo.png) linking to the homepage

A nav item saying "Welcome guest" (you could replace it with the admin's name dynamically)

3. Title Bar
html
Copy
Edit
<div class="bg-dark">
<h3 class="text-center p-2 text-white">Manage Details</h3>
</div>
Just a dark title bar labeled "Manage Details".

4. Admin Info & Buttons
html
Copy
Edit
<div class="row">
  <div class="col-md-12 bg-white d-flex align-items-center">
Layout:
Admin image on the left

Admin name below the image (currently hardcoded)

A vertical stack of buttons on the right linking to actions:

Buttons Include:
Insert/View Products

Insert/View Categories

Insert/View Brands

All Orders / Payments

List Users

Logout

Each button is wrapped in:

html
Copy
Edit
<button class="my-3">
  <a href="..." class="nav-link ...">Button Text</a>
</button>
Note: Links like index.php?insert_category pass a GET parameter.

5. Dynamic Content Inclusion (PHP)
php
Copy
Edit
<?php
if (isset($_GET['insert_category'])) {
    include('insert_categories.php');
}
if (isset($_GET['insert_brand'])) {
    include('insert_brands.php');
}
if (isset($_GET['insert_product'])) {
    include('insert_product.php');
}
?>
This part loads other PHP files dynamically based on the query string.

For example:

URL: index.php?insert_category will load insert_categories.php

It enables modular admin content without duplicating pages

6. Footer
html
Copy
Edit
<footer id="footer" class="bg-light text-black">
Sections:
About (Mobile Shopee): A dummy intro

Newsletter: Input box + subscribe button

Information: Links to pages like About Us, Privacy Policy, etc.

Account: Links to My Account, Order History, Wishlist, etc.

The copyright

html
Copy
Edit
<div class="copyright bg-dark text-white py-2">
says "Designed by Christina" (can be personalized).

7. Bootstrap JS
html
Copy
Edit
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
Includes Bootstrap's JavaScript bundle so things like modals, navbars, etc., function properly.



insert_brand.php

PHP Section: Inserting a Brand
php
Copy
Edit
include('../includes/connect.php');
Includes the file responsible for connecting to the database (you should have a $con variable in that file).

Form Submission Handling:
php
Copy
Edit
if(isset($_POST['insert_cat'])){
Checks if the form was submitted via the name="insert_cat" button.

Sanitization
php
Copy
Edit
$brand_title = mysqli_real_escape_string($con, $_POST['brand_title']);
Sanitizes the input to prevent SQL injection.

Empty Check
php
Copy
Edit
if (!empty($brand_title)) {
Ensures the brand name isn't empty.

Duplicate Check
php
Copy
Edit
$select_query = "SELECT * FROM `brands` WHERE brand_title = '$brand_title'";
$result_select = mysqli_query($con, $select_query);
$number = mysqli_num_rows($result_select);
Checks if the brand already exists.

If $number > 0, it means the brand is already in the table.

Insertion
If it's not a duplicate:

php
Copy
Edit
$insert_query = "INSERT INTO `brands` (brand_title) VALUES ('$brand_title')";
Runs an SQL INSERT query.

Result
php
Copy
Edit
if ($result) {
  echo "<script>alert('Brand has been inserted successfully.')</script>";
}
JavaScript alert is used to show success or error feedback to the user.

HTML Form (x2 — Duplicate!)
html
Copy
Edit
<form action="" method="post" class="mb-2 text-white">
  ...
  <input type="text" name="brand_title" class="form-control" placeholder="Insert brand">
  ...
  <input type="submit" class="bg-info border-0 my-3" name="insert_cat" value="Insert Brand"> 
</form>


insert_categories.php

PHP Code: Insert Category Logic
php
Copy
Edit
include('../includes/connect.php');
Includes the database connection file.

$con is assumed to be your database connection variable.

Form Submission Handler
php
Copy
Edit
if (isset($_POST['insert_cat'])) {
Checks if the submit button (name="insert_cat") has been clicked.

Input Retrieval and Sanitization
php
Copy
Edit
$category_title = mysqli_real_escape_string($con, $_POST['category_title']);
Fetches the category title from the form.

Uses mysqli_real_escape_string to prevent SQL injection.

Check if Empty
php
Copy
Edit
if (!empty($category_title)) {
Makes sure the input isn't just blank.

Check for Duplicates
php
Copy
Edit
$select_query = "SELECT * FROM `categories` WHERE category_title = '$category_title'";
$result_select = mysqli_query($con, $select_query);
$number = mysqli_num_rows($result_select);
Runs a query to see if that category already exists.

mysqli_num_rows tells how many rows matched.

Insert New Category if Not Found
php
Copy
Edit
$insert_query = "INSERT INTO `categories` (category_title) VALUES ('$category_title')";
$result = mysqli_query($con, $insert_query);
Inserts the new category into the categories table.

Feedback to Admin (JavaScript Alerts)
php
Copy
Edit
if ($result) {
  echo "<script>alert('Category has been inserted successfully.')</script>";
} else {
  echo "<script>alert('Error inserting category.')</script>";
}
Shows success or error using a JavaScript alert popup.

If Category Already Exists
php
Copy
Edit
echo "<script>alert('This category already exists in the database.')</script>";
Notifies the admin that the category is a duplicate.

If Input is Empty
php
Copy
Edit
echo "<script>alert('Category title cannot be empty.')</script>";
Tells the admin to enter something.

HTML Forms (you have two identical forms!)
First Form
html
Copy
Edit
<form action="" method="post">
  ...
  <input type="text" name="category_title">
  ...
  <input type="submit" name="insert_cat" value="Insert Category">
</form>
Takes input for the category title.

Sends it to the same page (action="").

Second Form (Duplicate)
You’ve written the exact same form again below the first one, after a heading:

html
Copy
Edit
<h2 class="text-center text-white">INSERT CATEGORIES</h2>
<form action="" method="post"> ... </form>
This is redundant. You only need one form.


insert_product.php

PHP Code (Top): Processing Form Submission
php
Copy
Edit
include('../includes/connect.php');
Connects to the MySQL database using a shared file (connect.php).

php
Copy
Edit
if (isset($_POST['insert_product'])) {
Checks if the form was submitted (submit button named insert_product was clicked).

Input Handling
php
Copy
Edit
$product_title = mysqli_real_escape_string($con, $_POST['product_title']);
$description = mysqli_real_escape_string($con, $_POST['description']);
$product_keywords = mysqli_real_escape_string($con, $_POST['product_keywords']);
$product_category = $_POST['product_category'];
$product_brands = $_POST['product_brands'];
$product_price = $_POST['product_price'];
$product_status = 'true';
Retrieves and sanitizes form data to prevent SQL injection.

$product_status is hardcoded as 'true' (you can change it dynamically if needed).

Image Handling
php
Copy
Edit
$product_image1 = $_FILES['product_image1']['name'];
$temp_image1 = $_FILES['product_image1']['tmp_name'];
$_FILES gets image files uploaded by the user.

.name is the original filename.

.tmp_name is the temporary location where PHP stores the uploaded file.

This is done for three images.

Validation
php
Copy
Edit
if (
    empty($product_title) || empty($description) || empty($product_keywords) ||
    empty($product_category) || empty($product_brands) || empty($product_price) ||
    empty($product_image1) || empty($product_image2) || empty($product_image3)
) {
    echo "<script>alert('Please fill all the available fields')</script>";
}
Ensures no required field is empty.

If anything is missing, it alerts the user and stops the script.

File Upload & Database Insert
If all fields are valid:

1. Move images to ./product_images/ folder:
php
Copy
Edit
move_uploaded_file($temp_image1, "./product_images/$product_image1");
2. Build and run the SQL INSERT statement:
php
Copy
Edit
$insert_products = "INSERT INTO `products` 
(product_title, product_description, product_keywords, category_id, brand_id, 
product_image1, product_image2, product_image3, product_price, date, status) 
VALUES (
'$product_title', '$description', '$product_keywords', '$product_category', '$product_brands', 
'$product_image1', '$product_image2', '$product_image3', '$product_price', NOW(), '$product_status')";
Adds the product to the products table.

NOW() sets the current date and time.

3. Success or error message:
php
Copy
Edit
if ($result_query) {
    echo "<script>alert('Successfully inserted product');</script>";
} else {
    echo "<script>alert('Error inserting product: " . mysqli_error($con) . "');</script>";
}
HTML Form (Bottom): Product Input Form
Title Input
html
Copy
Edit
<input type="text" name="product_title" ...>
Description, Keywords, Price Inputs
Standard text inputs for basic product info.

Category Dropdown
php
Copy
Edit
$select_query = "SELECT * FROM categories";
Dynamically fetches categories from the database to populate a dropdown menu.

Example rendered HTML:

html
Copy
Edit
<option value="2">Electronics</option>
Same approach is used for brands.

Image Inputs
html
Copy
Edit
<input type="file" name="product_image1">
Required file uploads for 3 product images.

Price Input
html
Copy
Edit
<input type="text" name="product_price">
Takes price as a string (you may want to validate it's a number).

Submit Button
html
Copy
Edit
<input type="submit" name="insert_product" ...>
Triggers the PHP logic at the top.



CSS file 

aboutus.css
GENERAL STYLES
css
Copy
Edit
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    text-align: center;
}
Applies to the whole page.

Uses Arial font.

Removes default margin/padding.

Centers inline text by default.

SCROLLABLE BANNER
css
Copy
Edit
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
Horizontally scrolls content (scroll-content) inside a full-width container.

Uses animation (not shown here) to make it scroll to the right endlessly.

LAYOUT: CONTAINER CLASS
css
Copy
Edit
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 50px;
    padding: 20px;
}
A flexbox layout that centers items, wraps them when needed, and adds space between them.

BUTTONS
css
Copy
Edit
.btn {
    padding: 8px 15px;
    border: 2px solid #ff9800;
    background-color: white;
    color: #ff9800;
    cursor: pointer;
    transition: 0.3s;
}
.btn:hover {
    background-color: #ff9800;
    color: white;
}
Orange outline button.

Reverses colors on hover.

PROFILE SECTION
Container for All Profiles
css
Copy
Edit
.profiles-container {
  display: flex;
  flex-wrap: wrap; 
  gap: 20px; 
  justify-content: center;
  padding: 20px;
}
Arranges profile cards in a responsive grid with spacing.

Individual Profile Card
css
Copy
Edit
.profile {
  width: 370px;
  background-color: #fff;
  padding: 16px;
  border-radius: 4px;
  display: flex;
  flex-direction: column;
  align-items: center;
}
Clean, card-style box for each user.

Image Styling
css
Copy
Edit
.image {
  width: 236px;
  height: 391px;
  background-size: cover;
  background-position: center;
  border-radius: 4px;
}
Styled like a photo frame (likely a div with background image).

Text Information
css
Copy
Edit
.name {
  font-size: 32px;
  font-weight: 500;
}
.title {
  font-size: 16px;
  margin-top: 8px;
}
Shows user’s name and role/title in neat formatting.

SOCIAL MEDIA ICONS
css
Copy
Edit
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
css
Copy
Edit
.social-icon.twitter {
  background-image: url('twitter-icon.png');
  background-size: contain;
}
Circular icons that show different platform logos.

Use background-image to add icons like Twitter, Instagram, etc.

RESPONSIVE DESIGN
css
Copy
Edit
@media (max-width: 768px) {
  .profiles-container {
      flex-direction: column;
      align-items: center;
  }
  .profile {
      width: 90%;
      max-width: 350px;
  }
  .image {
      width: 90%;
      max-width: 220px;
      height: auto;
  }
  .name {
      font-size: 28px;
  }
  .btn-footer {
      width: 100%;
      max-width: 300px;
      font-size: 18px;
  }
}
Makes profiles stack vertically on smaller screens.

Shrinks font size and image widths to fit mobile view.

FOOTER BUTTON STYLING
css
Copy
Edit
.buttonforfooter {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}
.btn-footer {
    width: 500px;
    height: 45px;
    background-color: white;
    color: #ff9800;
    border: 2px solid #ff9800;
    font-size: 20px;
    text-transform: uppercase;
}
.btn-footer:hover {
    background-color: #ff9800;
    color: white;
}
A large centered "Subscribe" style button in the footer.

Responsive adjustments are handled in the same @media query.

SERVICE CARD ICON STYLING
css
Copy
Edit
.service-card .icon img {
    width: 50%;
    max-width: 100px;
    margin-bottom: 5px;
}
.container {
    gap: 80px;
}
.icon {
    display: flex;
    justify-content: center;
    align-items: center;
}
Styles icons in service cards (probably SVG or PNG images).

Centers and scales them within the card.

FORM ROW FOR FOOTER
css
Copy
Edit
.form-row {
    gap: 5px;
    justify-content: center;
    align-items: center;
    flex: center; /* This is invalid */
}
Layout for a form in the footer (like a subscription input + button).


checkout_login_style.css

GLOBAL RESET AND BASE STYLES
css
Copy
Edit
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
    align-items: left;
}
Resets default margin and padding for all elements.

Sets box-sizing: border-box to include padding and border in element width/height calculations (makes layout easier).

Applies Arial font globally.


Login Link
css
Copy
Edit
.login-link {
    margin-top: 15px;
    font-size: 16px;
    color: #555;
}
Styles a login link with some spacing and a medium grey color.

FORM SECTION STYLES
Container and Layout
css
Copy
Edit
.form-section {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 3rem;
}
This section takes equal flexible space (flex: 1) — probably alongside an image section.

Uses Flexbox in column direction.

Vertically centers its content (justify-content: center).

Adds padding around the content.

Heading in Form
css
Copy
Edit
.form-section h2 {
    font-size: 3rem;
    margin-bottom: 20px;
    color: #333;
}
Large heading (3rem font size), dark grey color, spaced from form inputs below.

INPUT FIELDS
css
Copy
Edit
.form-section input {
    width: 100%;
    padding: 15px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 18px;
}
Inputs take full width of container.

Comfortable padding inside input for easy typing.

Vertical spacing between inputs.

Rounded borders and subtle grey border color.

Font size set for readability.

REGISTER BUTTON
css
Copy
Edit
.register-btn {
    height: 50px;
    width: 76px;
    padding: 8px 16px;
    margin-top: 10px;
    background-color: rgb(55, 158, 255);
    border: none;
    color: white;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}
Fixed height and width for the button.

Blue background with white text.

Rounded corners.

Pointer cursor on hover.

Smooth background color transition effect.

Hover State
css
Copy
Edit
.register-btn:hover {
    background-color: rgb(0, 24, 118);
}
Darker blue background on hover for a visual cue.

Responsive Adjustments for Small Screens
css
Copy
Edit
@media (max-width: 576px) {
    .register-btn {
        font-size: 14px;
        padding: 6px 12px;
    }
}
On small screens (like phones), the button’s font size and padding shrink for better fit.

IMAGE SECTION
css
Copy
Edit
.image-section {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.image-section img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
Image section also flexes equally alongside form section.

Uses flexbox to center the image horizontally and vertically.

Image fills the container completely and crops as needed (object-fit: cover).

RESPONSIVE BEHAVIOR (@media 768px)
css
Copy
Edit
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
For tablet and smaller screens:

.left-image (likely the image section or part of it) is hidden to prioritize the form.


edit_acount.css

Body
css
Copy
Edit
body {
  font-family: Arial, sans-serif;
  background-color: #ffffff;
  margin: 0;
  padding: 40px;
  box-sizing: border-box;
}
Sets the whole page’s font to Arial.

White background color.

Removes default margin, adds 40px padding around the content.

Uses box-sizing: border-box so padding and borders are included in element widths/heights.

Main Container
css
Copy
Edit
.container {
  display: flex;
  max-width: 1400px;
  margin: 0 auto;
  gap: 40px;
}
Creates a flex container for a horizontal layout.

Maximum width is 1400px, centered horizontally (margin: 0 auto).

Gap of 40px between flex children (sidebar and form).

Left Sidebar Navigation
css
Copy
Edit
.sidebar {
  width: 300px;
  padding-left: 0;
  margin-left: 0;
  text-align: left;
  margin-bottom: 350px;
}
Fixed width of 300px (later overridden to 380px further down).

No left padding or margin to align flush with container.

Text aligned left.

Big bottom margin (350px) to create space below sidebar.

Sidebar Heading
css
Copy
Edit
.sidebar h2 {
  font-size: 20px;
  font-weight: bold;
  color: #000;
  margin-bottom: 15px;
}
Sidebar titles use a bold, 20px black font with some spacing below.

Sidebar Links
css
Copy
Edit
.sidebar a {
  display: block;
  color: #333;
  text-decoration: none;
  margin-bottom: 10px;
  font-size: 16px;
}

.sidebar a:hover {
  text-decoration: underline;
}
Links are block elements (stack vertically).

Dark grey color, no underline by default.

Small margin between links.

Underline appears on hover for clarity.

Right Side — Edit Profile Form Panel
css
Copy
Edit
.edit-profile-container {
  flex: 1;
  background: #FFFFFF;
  box-shadow: 0px 1px 13px rgba(0, 0, 0, 0.05);
  border-radius: 4px;
  padding: 40px;
  text-align: left;
}
Takes remaining horizontal space (flex: 1).

White background with subtle shadow for elevation.

Rounded corners and generous padding inside.

Text aligned left (overrides any center alignment).

Form Panel Heading
css
Copy
Edit
.edit-profile-container h2 {
  color: #E53935; /* bright red */
  font-size: 20px;
  margin-bottom: 30px;
}
Heading styled with red color and spaced below.

Form Rows and Groups
css
Copy
Edit
.form-row {
  display: flex;
  gap: 20px;
  margin-bottom: 25px;
}

.form-group {
  flex: 1;
  text-align: left;
}
.form-row arranges child form groups horizontally with 20px gap and vertical spacing below.

Each .form-group grows evenly to fill available space.

Text inside form groups aligned left.

Labels and Inputs
css
Copy
Edit
.form-group label {
  display: block;
  font-weight: bold;
  margin-bottom: 6px;
}

.form-group input {
  width: 100%;
  padding: 10px;
  font-size: 14px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
Labels block-level with bold font and small bottom margin.

Inputs fill full width of the form group with comfortable padding.

Light grey border with rounded corners for nice input styling.

Section Titles
css
Copy
Edit
.section-title {
  font-size: 18px;
  font-weight: bold;
  color: #000;
  margin: 40px 0 20px;
}
Larger bold black text, spaced vertically — likely used to separate form sections.

Form Action Buttons
css
Copy
Edit
.form-actions {
  display: flex;
  justify-content: flex-end;
  gap: 10px;
  margin-top: 30px;
}
Action buttons container uses flexbox aligned to right.

Space of 10px between buttons.

Top margin to separate from form inputs.

Cancel Button
css
Copy
Edit
.cancel-btn {
  background-color: #ccc;
  color: #000;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
Grey background, black text.

Rounded corners, comfortable padding.

Pointer cursor on hover.

Submit Button
css
Copy
Edit
.submit-btn {
  background-color: #E53935;
  color: white;
  padding: 10px 24px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
}

.submit-btn:hover {
  background-color: #c62828;
}
Bright red background with white text.

Rounded corners and padding for good click area.

Darker red on hover as feedback.

Overwritten Styles (Repeated Selectors)
css
Copy
Edit
.sidebar {
  width: 380px;
  padding-left: 0;
  margin-left: 0;
  text-align: left;
  margin-bottom: 350px;
}

.container {
  margin-top: 0;
  padding-top: 0;
}

.edit-profile-container {
  text-align: left;
}

.form-group {
  text-align: left;
}
Sidebar width changed to 380px.

Container top margin and padding reset to zero.

Explicitly aligns form container and form groups’ text to the left.




index.css
General Styles
css
Copy
Edit
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  text-align: center;
}
Applies Arial font across the page.

Removes default margin and padding.

Centers text by default.

Scrollable Banner
css
Copy
Edit
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
@keyframes scrollRight {
  from { transform: translateX(100%); }
  to { transform: translateX(-100%); }
}
.scroll-container creates a full viewport width horizontal container with hidden overflow and no wrapping.

.scroll-content inside moves continuously from right to left (scrolling effect) using CSS animation named scrollRight.

The animation lasts 15 seconds, runs linearly and infinitely, sliding text/content across the screen.

Container Layouts
css
Copy
Edit
.container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 50px;
  padding: 20px;
}
Defines a flex container centered horizontally and vertically.

Allows wrapping of child elements.

Adds 50px gap between items.

Adds 20px padding inside container.

Buttons
css
Copy
Edit
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
.btn styled with orange border and text on white background.

Rounded corners, pointer cursor.

Smooth transition on hover: background becomes orange, text becomes white.

Testimonials Section
css
Copy
Edit
.testimonials-container {
  text-align: center;
  background-color: rgba(232, 255, 226, 0.76);
  padding: 30px;
  border-radius: 0;
  color: black;
}
.reviews-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 50px;
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
.testimonials-container has light green semi-transparent background, padding, centered black text.

.reviews-container flexbox layout to arrange review cards with spacing and wrapping.

.review-card styled white boxes with padding, border, shadows, rounded corners.

.image circular avatar with fixed size centered.

.name bold user name, .comment italic testimonial, .rating bigger font size.

Product Section
css
Copy
Edit
.new-arrivals-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 30px;
}
.product-card {
  width: 220px;
  border-radius: 8px;
  background-color: white;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
  padding: 15px;
  text-align: center;
}
.product-card img {
  width: 100px;
  height: 100px;
  object-fit: cover;
}
.new-arrivals-container flex container for products, centered with spacing and wrapping.

.product-card white card with shadow and padding, fixed width.

Product images are 100x100 px, cropped to cover container proportionally.

Categories Section
css
Copy
Edit
.categories-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}
.category-box {
  background-color: #f5f5f5;
  padding: 20px 30px;
  font-size: 18px;
  text-transform: uppercase;
  border-radius: 6px;
  cursor: pointer;
  transition: 0.3s;
}
.category-box:hover {
  background-color: black;
  color: white;
  transform: scale(1.05);
}
.categories-container flexbox with wrapping and centered content.

.category-box grey boxes with padding and uppercase text, cursor pointer for clickable look.

On hover: black background, white text, and slight scale-up for interaction feedback.

Sidebar Layout
css
Copy
Edit
.sidebar-fixed {
  min-height: 100vh;
  border-right: 2px solid #ddd;
  padding: 0;
}
Sidebar takes full viewport height.

Right border line to separate visually.

No padding inside.

Responsive Design
css
Copy
Edit
@media (max-width: 768px) {
  .profiles-container, .reviews-container, .categories-container {
    flex-direction: column;
    align-items: center;
  }
  .profile, .review-card, .product-card, .category-box {
    width: 90%;
  }
  .col-md-2 { display: none; }
}

@media (max-width: 480px) {
  .category-box { padding: 15px; }
  .btn { font-size: 12px; }
}
Below 768px screen width:

Profiles, reviews, and categories stack vertically and center.

Cards and boxes stretch to 90% width.

.col-md-2 elements hidden.

Below 480px screen width:

Smaller padding for categories.

Smaller font size for buttons.

Centered Button Container
css
Copy
Edit
.button-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 15vh;
  width: 100%;
}
Flexbox container that centers content horizontally and vertically.

Fixed height relative to viewport height (15%).

Full width.

Oval Button Style
css
Copy
Edit
.oval-button {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 190px;
  height: 55px;
  border: 2px solid black;
  border-radius: 140px;
  background-color: transparent;
  color: black;
  font-size: 16px;
  font-weight: bold;
  text-decoration: none;
  transition: 0.3s ease-in-out;
}

.oval-button:hover {
  background-color: rgb(0, 46, 96);
  color: white;
  transform: scale(1.1);
}
Large oval button with black border, transparent background.

Centered text, bold and sized well.

On hover: dark blue background, white text, and slight scaling effect.

Service Card Icon Styling
css
Copy
Edit
.service-card .icon img {
  position: flex;
  justify-content: center;
  align-items: center;
  width: 50%;
  height: auto;
  max-width: 100px;
  margin-bottom: 5px;
}

div.icon {
  display: flex;
  justify-content: center;
  align-items: center;
}
Centers icons inside .service-card.

Images scale responsively up to max 100px width.

Margin below icons.

.icon div also uses flexbox to center children.

Form Row
css
Copy
Edit
.form-row {
  gap: 5px;
  justify-content: center;
  align-items: center;
  flex: center; /* this is invalid CSS */
}
Sets 5px gap between flex children.

Centers children horizontally and vertically.

Note: flex: center; is invalid CSS and should be removed or replaced.

Footer Button
css
Copy
Edit
.buttonforfooter {
  display: flex;
  justify-content: center;
  margin-top: 10px;
}

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
.btn-footer:hover {
  background-color: #ff9800;
  color: white;
}

@media (max-width: 768px) {
  .footer .row {
    flex-direction: column;
    text-align: center;
  }
  .footer .form-row {
    flex-direction: column;
  }
  .btn-footer {
    width: 100%;
    max-width: 300px;
    height: 50px;
    font-size: 18px;
  }
}
.buttonforfooter centers the footer button with top margin.

.btn-footer large orange-outlined button, uppercase, bold.

On hover, background orange and text white.

Responsive tweaks below 768px: stacks footer rows vertically, button width shrinks to max 300px and font size reduces.


login.css
Global Styles
css
Copy
Edit
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Arial', sans-serif;
}
Resets margin and padding to zero on all elements for consistency.

box-sizing: border-box ensures padding and border are included inside element’s width/height.

Sets Arial as the default font everywhere.

Body
css
Copy
Edit
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #f4f4f4;
}
Uses Flexbox to center the entire content horizontally and vertically.

height: 100vh makes the body fill the full viewport height.

Light gray background color for the page.

Main Container
css
Copy
Edit
.container {
  display: flex;
  width: 90%;
  max-width: 1200px;
  height: 80vh;
  background: white;
}
Container uses Flexbox to arrange child elements side-by-side.

Takes 90% of the viewport width but maxes out at 1200px.

Height is 80% of viewport height.

White background to make the container stand out.

Left Side: Image Section
css
Copy
Edit
.image-section {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}

.image-section img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
Takes half the container width.

Uses flexbox to center the image inside.

Image fills the entire .image-section area, maintaining aspect ratio and cropping if necessary (object-fit: cover).

Right Side: Form Section
css
Copy
Edit
.form-section {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 3rem;
}

.form-section h2 {
  font-size: 3rem;
  margin-bottom: 20px;
  color: #333;
}
Also takes half the container width.

Uses column flex layout to stack elements vertically.

Vertically centers content inside.

Adds generous padding (3rem) around form content.

Header (h2) is large and spaced nicely from the form inputs, with a dark gray color.

Input Fields
css
Copy
Edit
.form-section input {
  width: 100%;
  padding: 12px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}
Inputs stretch full width of form container.

Padding inside inputs for comfort.

Vertical spacing between inputs.

Light gray border and rounded corners.

Font size readable and consistent.

Login Button and Forgot Password Layout
css
Copy
Edit
.login-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 10px;
}
Flex container that places login button and forgot password link on opposite ends horizontally.

Vertically centers both elements.

Adds spacing above.

Login Button
css
Copy
Edit
.login-btn {
  padding: 10px 20px;
  background-color: red;
  border: none;
  color: white;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  border-radius: 5px;
  transition: 0.3s;
}

.login-btn:hover {
  background-color: darkred;
}
Red button with white text, bold and medium-sized font.

Rounded corners.

Pointer cursor on hover.

Smooth background color transition when hovered (darker red).

Forgot Password Link
css
Copy
Edit
.forgot-password a {
  color: red;
  text-decoration: underline;
  font-size: 16px;
  font-weight: bold;
}

.forgot-password a:hover {
  color: darkred;
}
Styled as a red, underlined, bold link.

Color darkens on hover for a visual cue.

Responsiveness
css
Copy
Edit
@media (max-width: 900px) {
  .container {
    flex-direction: column;
    height: auto;
  }

  .image-section {
    height: 300px;
  }

  .form-section {
    padding: 2rem;
    text-align: center;
  }

  .login-container {
    flex-direction: column;
    align-items: center;
  }

  .forgot-password {
    margin-top: 10px;
  }
}


logo.css
1. body
css
Copy
Edit
body {
  margin: 0;
  padding: 0;
  background: #f5f5f5;
  height: 100vh;
}
Removes default margin and padding from the page.

Sets a light gray background color #f5f5f5 for the whole page.

Sets the body height to fill the full viewport height (100vh).

2. .logo-container
css
Copy
Edit
.logo-container {
  position: fixed;
  top: 10px;
  left: 10px;
  width: 120px;
  height: 110px;
  background: #FFAC1E;
  border-radius: 30px;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  z-index: 9999;
}
position: fixed;: Fixes this container in the viewport, so it stays visible even when scrolling.

Positioned 10px from the top and left edges of the viewport.

Fixed size: 120px wide and 110px tall.

Background color: a bright orange/yellow (#FFAC1E).

Rounded corners with a large radius (30px) for a pill-shaped box.

Adds a subtle shadow underneath (box-shadow) for depth.

overflow: hidden prevents any child content from spilling outside the rounded corners.

z-index: 9999 ensures this container stays on top of almost everything else on the page.

3. .grocery-icon
css
Copy
Edit
.grocery-icon {
  position: absolute;
  top: 8px;
  left: 50%;
  transform: translateX(-50%);
  width: 50px;
  height: 50px;
  background: url('icons8-grocery-store-96.png') no-repeat center center;
  background-size: contain;
}
Positioned absolutely inside .logo-container.

Top 8px from the container’s top edge.

Horizontally centered using:

left: 50% (position from the left edge of container)

transform: translateX(-50%) (shifts the icon back half of its own width to truly center it)

Fixed size: 50x50 px.

Background image is 'icons8-grocery-store-96.png':

No repetition,

Centered horizontally and vertically (center center),

Scaled to fit inside container without distortion (background-size: contain).

4. .basket-icon
css
Copy
Edit
.basket-icon {
  position: absolute;
  bottom: -20px;
  right: -15px;
  width: 90px;
  height: 110px;
  opacity: 0.15;
  background: url('icons8-basket-48.png') no-repeat center center;
  background-size: contain;
}
Positioned absolutely inside .logo-container.

Positioned slightly outside the container:

20px below bottom (bottom: -20px)

15px outside the right edge (right: -15px)

Large size: 90x110 px (almost as big as the container itself).

Very transparent (opacity: 0.15), so it appears faint or like a watermark behind other elements.

Uses a basket image as background with the same background rules as .grocery-icon.

5. .logo-text
css
Copy
Edit
.logo-text {
  position: absolute;
  bottom: 12px;
  width: 100%;
  text-align: center;
  font-family: 'Instrument Serif', serif;
  font-size: 29px;
  line-height: 1.2;
  color: #FFFFFF;
}
Positioned absolutely inside .logo-container, 12px from the bottom.

Stretches full width (width: 100%).

Text is horizontally centered.

Uses a serif font named 'Instrument Serif' (falls back to generic serif if unavailable).

Large font size (29px) with line height to control vertical spacing.

White text color for contrast against the orange background.



productpage.css

1. Body and Basic Layout
css
Copy
Edit
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    justify-content: center;
    align-items: center;
    height: 100vh;
    text-align: center;
}
Uses Arial font for the whole page.

Removes default margin and padding.

Vertically and horizontally centers content (if body was a flex container).

Sets body height to full viewport height (100vh).

Centers text horizontally (text-align: center).

2. Scrolling Text Container
css
Copy
Edit
.scroll-container {
    width: 100vw;
    overflow: hidden;
    white-space: nowrap;
    background: #f8f9fa;
    padding: 15px 0;
    position: relative;
}

.scroll-content {
    display: inline-block;
    white-space: nowrap;
    animation: scrollRight 15s linear infinite;
}

@keyframes scrollRight {
    from {
        transform: translateX(100%);
    }
    to {
        transform: translateX(-100%);
    }
}
.scroll-container is a full viewport-width container with horizontal overflow hidden.

white-space: nowrap; prevents line breaks inside the container, enabling horizontal scrolling.

.scroll-content is the content inside that scrolls horizontally from right to left continuously using CSS animation.

The animation scrollRight moves content from fully outside right (translateX(100%)) to fully outside left (translateX(-100%)) over 15 seconds infinitely.

3. Text Styling
css
Copy
Edit
.about-text {
    max-width: 700px;
}

h2 {
    color: #ff9800;
    font-weight: bold;
}
.about-text limits content width to 700px.

h2 headers have a bold, orange color (#ff9800).

4. Containers and Buttons
css
Copy
Edit
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
.container uses flexbox to center content with a large horizontal gap.

.form-row has a small gap between child elements.

.btn styles buttons with orange borders and text, white background, full width, rounded corners, and smooth hover effect that inverts colors.

5. Service Card Icons
css
Copy
Edit
.service-card .icon img {
    width: 50%; 
    height: auto; 
    max-width: 100px; 
    margin-bottom: 10px; 
}
Service card icons are sized responsively (half of container width but max 100px), with bottom margin for spacing.

6. Profile Section
css
Copy
Edit
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

.image {
    width: 236px;
    height: 391px;
    background-size: cover;
    background-position: center;
    border-radius: 4px;
    margin-bottom: 16px;
}

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
.profiles-container: flex container with gaps and padding.

.profile: card with fixed size, white background, rounded corners, vertical column layout, padding, and relative positioning.

.image: profile photo sized and styled with rounded corners and centered background.

.info: centered text and vertical layout for name, title, and social media icons.

.social-icon: circular icons with background images representing social platforms.

7. Testimonials
css
Copy
Edit
.testimonials-container {
    text-align: center;
    background-color: rgba(232, 255, 226, 0.76);
    padding: 30px;
    border-radius: 0;
    color: black;
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
    box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
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
Testimonials have a light green translucent background with padding.

Titles are bold and sized.

Reviews laid out side-by-side, wrap on small screens.

Each review card styled with padding, border, subtle shadow, and centered content.

Profile images are circular.

Text styles for name, comment, and rating.

8. New Arrivals (Products)
css
Copy
Edit
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
    box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
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
Section limited to 80% width and centered.

Title left-aligned, uppercase, bold.

Products laid out horizontally with gaps and wrapping.

Product cards are uniform sized with border, shadow, padding, and vertical layout.

Product images sized and centered with object-fit: cover to keep proportions.

9. Buttons (Various styles)
css
Copy
Edit
.btn {
    display: block;
    margin: 0px 20px;
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

.my-2 {
    background-color: white;
    border: 1px solid rgb(181, 124, 9);
    color: rgb(220, 151, 11);
    padding: 10px 20px;
    margin: 5px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}

.my-2:hover {
    background-color: rgb(220, 151, 11);
    color: white;
}

/* Center the button container */
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
    border-radius: 140px;
    background-color: transparent;
    color: black;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    transition: 0.3s ease-in-out;
}

.oval-button:hover {
    background-color: rgb(0, 46, 96);
    color: white;
    transform: scale(1.1);
}
.btn is a basic bordered button with black text and transparent background.

.my-3 and .my-2 are special buttons with blue and yellow theme colors, with smooth hover transitions that invert background and text color.

.button-container centers buttons vertically and horizontally.

.oval-button is a pill-shaped button with black border and text, enlarges and changes color on hover.

10. Carousel Section
css
Copy
Edit
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



register. css
. Global Styles
css
Copy
Edit
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}
Resets margin and padding for all elements to zero, providing a clean slate.

Sets box-sizing: border-box so padding and border are included within the element’s total width and height (makes layout easier).

Applies the Arial font globally with a fallback to sans-serif.

2. Body Styling
css
Copy
Edit
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
}
Uses Flexbox on the body to center its content both horizontally (justify-content: center) and vertically (align-items: center).

Sets height to 100 viewport height (100vh), making it fill the full screen height.

Applies a light gray background color.

3. Main Container
css
Copy
Edit
.container {
    display: flex;
    width: 90%;
    max-width: 1200px;
    height: 80vh;
    background: white;
}
Creates a flex container that holds two main parts (image and form).

Width is 90% of viewport width but capped at max 1200px for large screens.

Height is 80% of viewport height.

Background is white to visually separate the container from the page background.

4. Left Side: Image Section
css
Copy
Edit
.image-section {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.image-section img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
flex: 1 means the image section takes half the available space inside the container.

The section is also a flex container centered both ways.

The image fills the entire section (width: 100%, height: 100%).

object-fit: cover makes sure the image covers the whole container area without stretching, cropping parts if needed.

5. Right Side: Form Section
css
Copy
Edit
.form-section {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 3rem;
}

.form-section h2 {
    font-size: 3rem;
    margin-bottom: 20px;
    color: #333;
}
The form section also takes half the container (flex: 1).

Flex container with vertical stacking (flex-direction: column).

Content is vertically centered (justify-content: center).

Padding around the form content gives spacing inside.

The heading (h2) is large, with bottom margin and dark gray color.

6. Input Fields Styling
css
Copy
Edit
.form-section input {
    width: 100%;
    padding: 15px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 18px;
}
Inputs take full width inside the form.

Padding inside inputs for comfortable typing area.

Vertical spacing with margin.

Light gray border and rounded corners for a modern look.

Font size increased for better readability.

7. Create Account Button
css
Copy
Edit
.register-btn {
    width: 100%;
    padding: 15px;
    margin-top: 10px;
    background-color: red;
    border: none;
    color: white;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.register-btn:hover {
    background-color: darkred;
}
Full-width red button with padding and margin above it.

No border, white text, bold font.

Pointer cursor on hover.

Rounded corners.

Smooth color transition on hover (red → dark red).

8. Google Sign-Up Button
css
Copy
Edit
.google-btn {
    width: 100%;
    padding: 15px;
    margin-top: 10px;
    background-color: white;
    border: 1px solid #ccc;
    color: black;
    font-size: 18px;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

.google-btn:hover {
    background-color: #f1f1f1;
}
Another full-width button styled differently to represent Google sign-up.

White background, light border, black text.

Rounded corners, pointer cursor.

On hover, background becomes a light gray for subtle effect.

9. Login Link
css
Copy
Edit
.login-link {
    margin-top: 15px;
    font-size: 16px;
    color: #555;
}

.login-link a {
    color: red;
    text-decoration: underline;
    font-weight: bold;
}

.login-link a:hover {
    color: darkred;
}
A paragraph or container for a "Log In" link below the buttons.

Slightly smaller font, medium gray color.

Link itself is red, underlined, and bold.

On hover, link color darkens.

10. Responsive Design (For Smaller Screens)
css
Copy
Edit
@media (max-width: 900px) {
    .container {
        flex-direction: column;
        height: auto;
    }

    .image-section {
        height: 300px;
    }

    .form-section {
        padding: 2rem;
        text-align: center;
    }
}






































