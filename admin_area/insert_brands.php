
-- Active: 1730650739891@@127.0.0.1@3306@Mystore
<?php
include('../includes/connect.php');//database connection 

if(isset($_POST['insert_cat'])){
  $brand_title = mysqli_real_escape_string($con, $_POST['brand_title']);

  if (!empty($brand_title)) {
    // Check if category already exists
    $select_query = "SELECT * FROM `brands` WHERE brand_title = '$brand_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
      echo "<script>alert('This category already exists in the database.')</script>";
    } else {
      // Insert new brand
      $insert_query = "INSERT INTO `brands` (brand_title) VALUES ('$brand_title')";
      $result = mysqli_query($con, $insert_query);

      if ($result) {
        echo "<script>alert('Brand has been inserted successfully.')</script>";
      } else {
        echo "<script>alert('Error inserting brands.')</script>";
      }
    }
  } else {
    echo "<script>alert('Brand title cannot be empty.')</script>";
  }
}
?>

<form action="" method="post" class="mb-2 text-white">
  <div class="input-group w-90 mb-2 text-white">
    <span class="input-group-text bg-info text-white" id="basic-addon1 ">
      <i class="fa-solid fa-receipt text-white"></i>
    </span>
    <input type="text" name="brand_title" class="form-control" placeholder="Insert brand" aria-label="brands" aria-describedby="basic-addon1">
  </div>
  <div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class="bg-info border-0 my-3" name="insert_cat" value="Insert Brand"> 
  </div>
</form>
