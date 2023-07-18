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
<style>
  /* Custom CSS styles for the navbar */
  .navbar {
    background-color: #4CAF50;
    border-radius: 0;
  }

  .navbar .logo {
    height: 40px;
  }

  .navbar-toggler {
    border: none;
    background-color: transparent;
  }

  .navbar-toggler-icon {
    background-color: #fff;
  }

  .navbar-nav .nav-link {
    color: #fff;
    font-weight: 500;
    margin-right: 10px;
    transform-style: preserve-3d;
    perspective: 1000px;
    transition: transform 0.3s;
  }

  .navbar-nav .nav-link:hover {
    color: #000;
    transform: rotateX(30deg) scale(1.1);
  }

  .navbar-nav .nav-link.active {
    font-weight: 700;
  }

  .navbar-form .form-control {
    background-color: #fff;
    border-radius: 20px;
    border: none;
    padding: 6px 12px;
    margin-right: 10px;
    width: 200px;
    transition: width 0.3s;
  }

  .navbar-form .form-control:focus {
    width: 250px;
    outline: none;
  }

  .navbar-form .btn {
    background-color: transparent;
    border-color: #fff;
    color: #fff;
    border-radius: 20px;
    transition: background-color 0.3s, color 0.3s;
  }

  .navbar-form .btn:hover {
    background-color: #fff;
    color: #4CAF50;
  }
</style>

<div class="container-fluid p-0">
  <!-- first child -->
  <nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container-fluid">
      <img src="./images/logo3.svg" alt="" class="logo">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
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
            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-plus" style="color: #000;"></i><sup></sup><?php cart_number();
            ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="totalPriceLink"> Total Price: ₹ <?php total_cart_price();?> /-</a>
          </li>
        </ul>
        <form class="d-flex navbar-form" action="search_product.php" method="get">
<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
<input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
</form>
</div>
</div>
  </nav>
</div>

<!-- calling cart function-->
<?php
cart();

?>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Update the total price dynamically
    var totalPriceLink = document.getElementById("totalPriceLink");
    totalPriceLink.addEventListener("click", function(event) {
      event.preventDefault();
      var totalPrice = calculateTotalPrice(); // Implement your logic to calculate the total price
      alert("Total Price: $" + totalPrice);
    });

    // Add additional JavaScript functionality as needed
  });

  function calculateTotalPrice() {
    // Implement your logic to calculate the total price
    // You can fetch data from the server or perform calculations based on user input
    return 0; // Placeholder value, replace with your actual calculation
  }
</script>

<style>
  .text-3d {
    color: blue;
    text-shadow: 0 0 5px rgba(0, 0, 255, 0.7);
    animation: glowingText 1.5s infinite;
  }

  @keyframes glowingText {
    0% {
      color: white;
    }
    50% {
      color: blue;
    }
    100% {
      color: red;
    }
  }

  .glowing-background {
    background-color: #ffd700; /* Update the background color here */
    animation: glowingBackground 1.5s infinite;
  }

  @keyframes glowingBackground {
    0% {
      background-color: #ffff00;
    }
    50% {
      background-color: #ffffff;
    }
    100% {
      background-color: #ffff00;
    }
  }
</style>

<script>
  function generateGlowingColor() {
    var letters = "0123456789ABCDEF";
    var color = "#";
    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }

  setInterval(function () {
    var color = generateGlowingColor();
    document.querySelector(".glowing-background").style.backgroundColor = color;
  }, 1500);
</script>

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

<div class="bg-light glowing-background">
  <h3 class="text-center text-3d">Brite Store</h3>
  <p class="text-center">"Style Redefined, Prices Perfected!"</p>
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
  get_unique_categories();
  get_unique_brands();
  $ip = getIPAddress();  
echo 'User Real IP Address - '.$ip; 
 

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
<!-- include footer -->
<?php include("./includes/footer.php");

?>
    </div> 




 <!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>

</body>
</html>