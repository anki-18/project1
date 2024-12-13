<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="../index.css">
<style>
    .admin_image{
    width:100px;
    object-fit: contain;
}
.footer{
    position:absolute;
}
</style>
</head>

   <div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg navbar-light bg-info">
<div class="container-fluid">
<img src="logo.jpg" alt=""clas="logo"width="7%",height = "7%">
<nav class="navbar navbar-expand-lg">
<ul class="navbar-nav">
<li class="nav-items">
<a href="" class="nav-link">Ability xXpress</a>
</li>
</ul>

</nav>
</div>
</nav>

<div class="bg-light">
<h3 class="text-center p-2">Manage details</h3>
</div>

<div class="row">
<div class="COL-MD-12 bg-secondary p-1 d-flex align-items-center">
<div class="p=3">
<a href="#"><img src="random.jpg"alt=""class="admin_image " ></a>
<p class="text-light text-center">Admin name</p>

</div>
<div class="button text-center">
<button class="my-3 p "><a href="insert_product.php"class="nav-link text-light bg-info my-1 p-1"><h4>Insert products</h4></a></button>
<button><a href=""class="nav-link text-light bg-info my-1 p-1"><h4>View products</h4></a></button>
<button><a href="insert_categories"class="nav-link text-light bg-info my-1 p-1"><h4>Insert categories</h4></a></button>
<button><a href=""class="nav-link text-light bg-info my-1 p-1"><h4>View categories</h4></a></button>
<button><a href="insert_brands"class="nav-link text-light bg-info my-1 p-1"><h4>insert brand</h4></a></button>
<button><a href=""class="nav-link text-light bg-info my-1 p-1"><h4>view brand </h4></a></button>
<button><a href=""class="nav-link text-light bg-info my-1 p-1"><h4>all order </h4></a></button>
<button><a href=""class="nav-link text-light bg-info my-1 p-1"><h4>all payment</h4></s></a></button>
<button><a href=""class="nav-link text-light bg-info my-1 p-1"><h4>list users</h4></a></button><br>
<button><a href=""class="nav-link text-light bg-info my-1 p-1"><h4>log out</h4></a></button>






</div>
</div>


</div>

<div class="container my-3">

<?php
if(isset($_GET['insert_categories']))
{
 include("ic.php");
}
if(isset($_GET['insert_brands']))
{
 include( "ib.php");
}
?>
</div>










</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>