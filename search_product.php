<!--connect file-->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brite Store.</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
      crossorigin="anonymous">

    <!-- font awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <img src="./images/logo3.svg"  alt=""  class= "logo">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
     data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-plus" style="color: #000000;"></i><sup><?php cart_number();
            ?></sup></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" id="totalPriceLink"> Total Price: ₹ <?php total_cart_price(); ?> /-</a>
          </li>
       </ul>
       <form class="d-flex" action="search_product.php" method="get">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
  <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
</form>

    </div>
  </div>
</nav>
<!-- calling cart function-->
<?php
cart();

?>

<!-- second child-->
<nav class="navbar navbar-expand-lg navbar-success bg-warning">
  <ul class="navbar-nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
      <a class="nav-link" href="./users_area/user_login.php">Login</a>
    </li>

  </ul>
</nav>

<!-- third child -->
<div class="bg-light">
  <h3 class="text-center" style="color: blue;">Brite Store</h3>
  <p class="text-center">"Style Redefined, Prices Perfected!" </p>

</div>

<!-- fourth child-->
<div class="row px-1">
  <div class="col-md-10">
  <!-- products-->
  <div class="row">
    <!-- fetching products-->

  <?php
  // calling function
  getproducts();
  search_product();
  get_unique_categories();
  get_unique_brands();
 

?>
   
<!-- row end-->
   
</div>

<!-- col end-->
</div>
  <div class="col-md-2 p-0">
    <!--side nav-->
    <!-- brands to be displayed-->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-danger">
        <a href="#" class="nav-link text-light"><h4>Delievry Brands</h4></a>

      </li>
      <?php
      // calling function
      getbrands();

?>


    </ul>
    <!--categories to be displayed-->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-danger">
        <a href="#" class="nav-link text-light"><h4>categories</h4></a>

      </li>
      <?php
      // calling function
      getcategories();

?>
     

    </ul>
    

  </div>

</div>




<!-- last child-->
<div class="bg-warning p-3 text-center">
    <p> All Rights Reserved ©- Designed by samay gupta 2023</p>
</div>
    </div> 




 <!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>

</body>
</html>