<?php
include('../includes/conn.php');
if(isset($_POST['insert_brand']))
{
    $brands_title=$_POST['brand_title'];
$select_query="select*from `categories`where category_title='$brands_title'";

$result_select=mysqli_query($conn,$select_query);
$number=mysqli_num_rows($result_select);
 if($number>0){
    echo "<script>alert('this is present inside database')</script>";
 }else{

 }




$insert_query="insert into `brands`(brands_title) values ('$brands_title')";
$result=mysqli_query($conn,$insert_query);
if($result){
    echo "<script>alert('brands has been inserted succesfully')</script>";
}
}
?>
<h2 class="text-center">Insert brands</h2>
<form action=""method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title" placeholder="Insert brands" aria-label="brands" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">

  <input type="submit" class=" bg-info border-0 p-2 my-3" name="insert_bran" value ="Insert brands">
</div>
</form>

