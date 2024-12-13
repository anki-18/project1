<?php
include ('includes/conn.php');
include ('function/common_func.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ecom</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="index.css">
</head>
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
<img src ="logo.jpg"alt=""class="logo">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total price:100/-</a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
    <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
</form>

    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<ul class="navbar-nav me-auto">
    <li class="nav-item">
<a class="nav-link" href="#">Welcome guest</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">login</a>
</li>

</ul>
</nav>
<div class="bg-light">
<h3  class ="text-center">Ability xXpress store</h3>
<p class="text-center">“Know me for my abilities”</p>

</div>

<div class="row ">
<div class="col-md-10">
<div class="row px-1">
<?php
  
  get_all_product();
  getuniquecategory();
  getuniquebrands();
  ?>











</div>
</div>


<div class="col-md-2 bg-secondary p-0">
    <ul class="navbar-nav me-auto text-center">
<li class="nav-item bg-info">
<a href="index.php?brands=$brands_id" class="nav-link text-light"><h4> brands</h4></a>

</li>
<?php

getbrand();

?>
</ul>

<ul class="navbar-nav me-auto text-center">
   <li class="nav-item bg-info">
<a href=" index.php?categories=$category_id " class="nav-link text-light"><h4>Categories</h4></a>

</li>
<?php
getcategory();

?>




    </ul>
    </div>


























    <?php
include("./includes/footer.php")?>
</div>






















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>