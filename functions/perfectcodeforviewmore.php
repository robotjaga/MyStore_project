

<?php
// view details function

function view_details() {
    global $con;

    if (isset($_GET['product_id']) && !isset($_GET['category']) && !isset($_GET['brand'])) {
        $product_id = $_GET['product_id'];

        $select_query = "SELECT * FROM `products` WHERE product_id = $product_id";
        $result_query = mysqli_query($con, $select_query);

        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_image2 = $row['product_image2'];
            $product_image3 = $row['product_image3'];
            $product_price = $row['product_price'];

            echo "
            <!-- Main Product -->
            <div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./images/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <div class='stars'>⭐⭐⭐⭐☆</div>
                        <p class='price'>$$product_price</p>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn my-2'>Add to Cart</a>
                        <a href='product_details.php?product_id=$product_id' class='btn my-3'>View More</a>
                    </div>
                </div>
            </div>

            


<div class='col-md-4 mb-2'>
<div class='row'>
<h4 class='text-center text-info md-5'></h4>
</div>
<div class='col-md-6'>
<img src='./images/$product_image2' class='card-img-top' alt='$product_title'>
</div>
<div class='col-md-6'>
<img src='./images/$product_image3' class='card-img-top' alt='$product_title'>
</div>

</div>
</div>
</div>










            ";
}
}
}
?>