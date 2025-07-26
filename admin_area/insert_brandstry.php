

<!-- new try something with empty fields -->


-- Active: 1730650739891@@127.0.0.1@3306@Mystore
<?php
include('../includes/connect.php');//database connection 

if(isset($_POST['insert_cat'])){
  $brand_title = mysqli_real_escape_string($con, $_POST['brand_title']);

  if (!empty($brand_title)) {
    // Check if category already exists
    $select_query = "SELECT * FROM `brand` WHERE brand_title = '$brand_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
      echo "<script>alert('This category already exists in the database.')</script>";
    } else {
      // Insert new category
      $insert_query = "INSERT INTO `brand` (brand_title) VALUES ('$brand_title')";
      $result = mysqli_query($con, $insert_query);

      if ($result) {
        echo "<script>alert('Brand has been inserted successfully.')</script>";
      } else {
        echo "<script>alert('Error inserting brand.')</script>";
      }
    }
  } else {
    echo "<script>alert('Brand title cannot be empty.')</script>";
  }
}
?>

<br><br><br><br><br><br><br>

<form action="" method="post" class="mb-2 text-white">
  <div class="input-group w-90 mb-2 text-white">
    <span class="input-group-text bg-info text-white" id="basic-addon1 ">
      <i class="fa-solid fa-receipt text-white"></i>
    </span>
    <input type="text" name="category_title" class="form-control" placeholder="Insert brand" aria-label="brand" aria-describedby="basic-addon1">
  </div>
  <div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class="bg-info border-0 my-3" name="insert_cat" value="Insert brand"> 
  </div>
</form>

<!-- 
<h2 class="text-center text-white">INSERT CATEGORIES</h2>

<form action="" method="post" class="mb-2 text-white">
  <div class="input-group w-90 mb-2 text-white">
    <span class="input-group-text bg-info text-white" id="basic-addon1 ">
      <i class="fa-solid fa-receipt text-white"></i>
    </span>
    <input type="text" name="category_title" class="form-control" placeholder="Insert category" aria-label="Categories" aria-describedby="basic-addon1">
  </div>
  <div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class="bg-info border-0 my-3" name="insert_cat" value="Insert Category"> 
  </div>
</form> -->

