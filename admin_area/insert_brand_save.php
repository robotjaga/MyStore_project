<?php
include('../includes/connect.php'); // Ensure the database connection is correct

if(isset($_POST['insert_cat'])) {  
    $brand_title = mysqli_real_escape_string($con, $_POST['brand_title']); 

    if (!empty($brand_title)) {
        // Check if the brand already exists
        $select_query = "SELECT * FROM brands WHERE brand_title = '$brand_title'";
        $result_select = mysqli_query($con, $select_query);
        $number = mysqli_num_rows($result_select);

        if ($number > 0) {
            echo "<script>alert('This brand already exists.')</script>";
        } else {
            // Insert the new brand
            $insert_query = "INSERT INTO brands (brand_title) VALUES ('$brand_title')";
            $result = mysqli_query($con, $insert_query);

            if ($result) {
                echo "<script>alert('Brand added successfully!')</script>";
            } else {
                echo "<script>alert('Error inserting brand.')</script>";
            }
        }
    } else {
        echo "<script>alert('Brand title cannot be empty.')</script>";
    }
}
?>
<h2 class="text-center">INSERT BRANDS</h2>

<form action="" method="post" class="mb-2">
  <div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1">
      <i class="fa-solid fa-receipt"></i>
    </span>
    <input type="text" name="brand_title" class="form-control" placeholder="Insert Brand" aria-label="Brands" aria-describedby="basic-addon1">
  </div>
  <div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class="bg-info border-0 my-3" name="insert_cat" value="Insert brand"> 
  </div>
</form>

<h2 class="text-center text-white">INSERT BRANDS</h2>

<form action="" method="post" class="mb-2">
  <div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1">
      <i class="fa-solid fa-receipt"></i>
    </span>
    <input type="text" name="brand_title" class="form-control" placeholder="Insert Brand" aria-label="Brands" aria-describedby="basic-addon1">
  </div>
  <div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class="bg-info border-0 my-3" name="insert_cat" value="Insert brand"> 
  </div>
</form>





