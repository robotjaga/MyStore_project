-- Active: 1730650739891@@127.0.0.1@3306@Mystore
<?php
include('../includes/connect.php');//database connection 

if(isset($_POST['insert_cat'])){
  $category_title = mysqli_real_escape_string($con, $_POST['category_title']);

  if (!empty($category_title)) {
    // Check if category already exists
    $select_query = "SELECT * FROM `categories` WHERE category_title = '$category_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
      echo "<script>alert('This category already exists in the database.')</script>";
    } else {
      // Insert new category
      $insert_query = "INSERT INTO `categories` (category_title) VALUES ('$category_title')";
      $result = mysqli_query($con, $insert_query);

      if ($result) {
        echo "<script>alert('Category has been inserted successfully.')</script>";
      } else {
        echo "<script>alert('Error inserting category.')</script>";
      }
    }
  } else {
    echo "<script>alert('Category title cannot be empty.')</script>";
  }
}
?>

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
</form>

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
</form>