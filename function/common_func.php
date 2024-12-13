<?php
include('includes/conn.php');

function getproducts() {
    global $conn;
    if (!isset($_GET['category']) && !isset($_GET['brand'])) {
        $select_query = "SELECT * FROM `product` ORDER BY RAND()";
        $result_query = mysqli_query($conn, $select_query);
        
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];

            echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn btn-info'>Add to cart</a>
                        <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                    </div>
                </div>
            </div>";
        }
    }
}


function get_all_product(){  global $conn;
    if (!isset($_GET['category']) && !isset($_GET['brand'])) {
        $select_query = "SELECT * FROM `product` ORDER BY RAND()";
        $result_query = mysqli_query($conn, $select_query);
        
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];

            echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn btn-info'>Add to cart</a>
                        <a href='#' class='btn btn-secondary'>View more</a>
                    </div>
                </div>
            </div>";
        }
    }
}







function getuniquecategory() {
    global $conn;
    if (isset($_GET['category'])) {
        $category_id = mysqli_real_escape_string($conn, $_GET['category']);
        $select_query = "SELECT * FROM `product` WHERE category_id = '$category_id'";
        $result_query = mysqli_query($conn, $select_query);

        $num_of_rows = mysqli_num_rows($result_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
        }

        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];

            echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn btn-info'>Add to cart</a>
                        <a href='#' class='btn btn-secondary'>View more</a>
                    </div>
                </div>
            </div>";
        }
    }
}

function getuniquebrands() {
    global $conn;

    // Check if 'brand' is set in the GET parameters
    if (isset($_GET['brand'])) {
        $brands_id = mysqli_real_escape_string($conn, $_GET['brand']);
        
        // SQL query to fetch products based on brand ID
        $select_query = "SELECT * FROM `product` WHERE brands_id = '$brands_id'";
        $result_query = mysqli_query($conn, $select_query);

        // Check if any rows were returned
        $num_of_rows = mysqli_num_rows($result_query);

        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>No brands for this</h2>";
        }

        // Loop through the result set and display product details
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];

            echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn btn-info'>Add to cart</a>
                        <a href='#' class='btn btn-secondary'>View more</a>
                    </div>
                </div>
            </div>";
        }
    }
}

function getcategory() {
    global $conn;
    $select_categories = "SELECT * FROM `categories`";
    $result_categories = mysqli_query($conn, $select_categories);

    while ($row_data = mysqli_fetch_assoc($result_categories)) {
        $category_title = $row_data["category_title"];
        $category_id = $row_data["category_id"];
        echo "<li class='nav-item'>
            <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
        </li>";
    }
}

function getbrand() {
    global $conn;
    $select_brands = "SELECT * FROM `brands`";
    $result_brands = mysqli_query($conn, $select_brands);

    if (mysqli_num_rows($result_brands) == 0) {
        echo "<li class='nav-item text-light'>No brands available</li>";
        return;
    }

    while ($row_data = mysqli_fetch_assoc($result_brands)) {
        $brands_title = $row_data["brands_title"];
        $brands_id = $row_data["brands_id"];
        echo "<li class='nav-item'>
            <a href='index.php?brand=$brands_id' class='nav-link text-light'> $brands_title</a>
        </li>";
    }
}



function search_product(){
    global $conn;
    if(isset($_GET['search_data_product'])){
       $search_data_value=$_GET['search_data'];
       
       
        $search_query="select *from `product`where product_keyword like '%$search_data_value%'";
        $result_query = mysqli_query($conn, $search_query);
        
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];

            echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='#' class='btn btn-info'>Add to cart</a>
                        <a href='#' class='btn btn-secondary'>View more</a>
                    </div>
                </div>
            </div>";
        }
    }

}


?>








































