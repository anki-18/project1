<?php
include ('../includes/conn.php');

if (isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keyword = $_POST['product_keyword'];
    $product_category = $_POST['product_category'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';

    $product_image1 = $_FILES['product_image1']['name'];
    $temp_image1 = $_FILES['product_image1']['tmp_name'];

    // Check if any field is empty
    if ($product_title=='' or $product_description==''or $product_keyword=='' or $product_category==''or $product_brands=='' or $product_price=='' or $product_image1=='') {
        echo "<script>alert('Please fill all the fields')</script>";
        exit();
    } else {
        // Move the uploaded image to the target directory
        move_uploaded_file($temp_image1, "./product_image/$product_image1");

        // Insert data into the database
        $insert_product = "insert into  `product`
            (product_title, product_description, product_keyword, category_id, brands_id, product_image1, product_price, date, status) 
         values
            ('$product_title', '$product_description', '$product_keyword', '$product_category', '$product_brands', '$product_image1', '$product_price', NOW(), '$product_status')";

        $result_query = mysqli_query($conn, $insert_product);

        // Check if the query was successful
        if ($result_query) {
            echo "<script>alert('Product inserted successfully')</script>";
        } else {
            echo "<script>alert('Error inserting product')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="../index.css">
</head>

    <body class="bg-light">
      <div class="container mt-1">
<h1 class="text-center">Insert products</h1>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-outline mb-4 w-50 m-auto" >

<label for="product_title" class="form-label">product title</label>

<input type ="text" name ="product_title"id="product_title"class="form-control"placeholder="enter product title"autocomplete="off">



</div>

<div class="form-outline mb-4 w-50 m-auto" >

<label for="product_description" class="form-label">product description</label>

<input type ="text" name ="product_description"id="product_description"class="form-control"placeholder="enter product description"autocomplete="off"
>
</div>
<div class="form-outline mb-4 w-50 m-auto" >

<label for="product_keyword" class="form-label">product keyword</label>

<input type ="text" name ="product_keyword"id="product_keyword"class="form-control"placeholder="enter product description"autocomplete="off">
</div>
<div class="form-outline mb-4 w-50 m-auto" >
<select name="product_category"id=""class="form-select">
<option value="">select a category</option>
<?php
$select_query="Select * from`categories`";
$result_query=mysqli_query($conn,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
    $category_title=$row['category_title'];
    $category_id=$row['category_id'];
echo"<option value='$category_id'>$category_title</option>";


}



?>


</select>
</div>

<div class="form-outline mb-4 w-50 m-auto" >
<select name="product_brands"id=""class="form-select">
<option value="">select a brand</option>

<?php
$select_query="Select * from`brands`";
$result_query=mysqli_query($conn,$select_query);
while($row=mysqli_fetch_assoc($result_query)){
    $brands_title=$row['brands_title'];
    $brands_id=$row['brands_id'];
echo"<option value='$brands_id'>$brands_title</option>";


}



?>
</select>
</div>
<div class="form-outline mb-4 w-50 m-auto" >

<label for="product_image1" class="form-label">product image 1 </label>

<input type ="file" name ="product_image1"id="product_image1"class="form-control">
</div>
<div class="form-outline mb-4 w-50 m-auto" >

<label for="product_price" class="form-label">product price</label>

<input type ="text" name ="product_price"id="product_price"class="form-control"placeholder="enter product price"autocomplete="off"
>



</div>
<div class="form-outline mb-4 w-50 m-auto" >
<input type="submit" name="insert_product"class="btn btn-info mb-3 px-3" value="insert product">

</div>
</form>
      </div>  
</body>
</html>