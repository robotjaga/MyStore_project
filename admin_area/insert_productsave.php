<?php
include('../includes/connect.php');

if(isset($_POST['insert_product'])) {
    // Retrieve form inputs
    $product_title = mysqli_real_escape_string($con, $_POST['product_title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $product_keywords = mysqli_real_escape_string($con, $_POST['product_keywords']);
    $product_category = intval($_POST['product_category']); // Ensure it's an integer
    $product_brands = intval($_POST['product_brands']); // Ensure it's an integer
    $product_price = mysqli_real_escape_string($con, $_POST['product_price']);
    $product_status = 'true';

    // Image handling
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    // Image temp names for upload
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // Check if category_id and brand_id exist in their respective tables
    $check_category = mysqli_query($con, "SELECT * FROM categories WHERE category_id = $product_category");
    $check_brand = mysqli_query($con, "SELECT * FROM brands WHERE brand_id = $product_brands");

    if(mysqli_num_rows($check_category) == 0) {
        echo "<script>alert('Invalid Category Selected');</script>";
        exit();
    }

    if(mysqli_num_rows($check_brand) == 0) {
        echo "<script>alert('Invalid Brand Selected');</script>";
        exit();
    }

    // Check for empty fields
    if(empty($product_title) || empty($description) || empty($product_keywords) || 
       empty($product_category) || empty($product_brands) || empty($product_price) || 
       empty($product_image1) || empty($product_image2) || empty($product_image3)) {
        
        echo "<script>alert('Please fill all the available fields');</script>";
        exit();
    } else {
        // Move uploaded images to target directory
        move_uploaded_file($temp_image1, "./product_images/$product_image1");
        move_uploaded_file($temp_image2, "./product_images/$product_image2");
        move_uploaded_file($temp_image3, "./product_images/$product_image3");

        // Insert query with foreign key relationship
        $insert_products = "INSERT INTO `products` 
        (product_title, product_description, product_keywords, category_id, brand_id, 
        product_image1, product_image2, product_image3, product_price, date, status) 
        VALUES ('$product_title', '$description', '$product_keywords', '$product_category', 
        '$product_brands', '$product_image1', '$product_image2', '$product_image3', 
        '$product_price', NOW(), '$product_status')";

        $result_query = mysqli_query($con, $insert_products);

        if($result_query) {
            echo "<script>alert('Successfully inserted the product');</script>"; 
        } else {
            echo "<script>alert('Error inserting product: " . mysqli_error($con) . "');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
       <!-- bootstrap css link -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- css file -->
<link rel="stylesheet" href="styleform.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
            </div>

            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required">
            </div>

               <!-- keywords -->
               <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required="required">
            </div>

            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_category" id="" class="form-select">
               <option value="">Select a Category</option>

            <?php
           $select_query = "SELECT * FROM categories"; 
           $result_query = mysqli_query($con, $select_query);
           
           while ($row = mysqli_fetch_assoc($result_query)) { 
               $category_title = $row['category_title']; 
               $category_id = $row['category_id']; 
               echo "<option value='$category_id'>$category_title</option>"; 
           } 
           ?>
 
               </select>
            </div>

               <!-- Brands -->
               <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_brands" id="" class="form-select">
               <option value="">Select a Brands</option>
                  
            <?php
           $select_query = "SELECT * FROM brands"; 
           $result_query = mysqli_query($con, $select_query);
           
           while ($row = mysqli_fetch_assoc($result_query)) { 
               $brand_title = $row['brand_title']; 
               $brand_id = $row['brand_id']; 
               echo "<option value='$brand_id'>$brand_title</option>"; 
           } 
           ?>
                   
               </select>
            </div>

                <!-- Image 1 -->
                <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>

                <!-- Image 2 -->
                <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>

                <!-- Image 3 -->
                <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>

               <!-- Price -->
               <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
            </div>


               <!-- Price -->
               <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">
            </div>

             
        </form>
    </div>
    
</body>
</html>
