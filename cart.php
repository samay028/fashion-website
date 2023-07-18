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
          </ul>
       
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
  /* Customize table appearance */
table {
  margin-bottom: 20px;
  border-collapse: separate;
  border-spacing: 0;
  width: 100%;
  max-width: 600px;
}

th, td {
  padding: 10px;
}

th {
  background-color: #f5f5f5;
  text-transform: uppercase;
  font-weight: bold;
}

/* Add 3D effect to buttons */
button {
  border: none;
  border-radius: 4px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s;
}

button:hover {
  transform: translateY(-2px);
}

/* Add unique styling */
.container {
  max-width: 800px;
  margin: 0 auto;
}

.row {
  margin: 30px 0;
}

/* Add more styling to subtotal section */
.d-flex {
  align-items: center;
}

.px-3 {
  margin: 0;
}

.text-dark {
  color: #333;
}

.bg-warning {
  background-color: #ffc107;
  color: #333;
}

.bg-warning:hover {
  background-color: #ff9800;
}
.cart_img {
    width: 80px;
    height: 80px;
    object-fit:contain;

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
      <a class="nav-link" href="#">Login</a>
    </li>
  </ul>
</nav>

<div class="bg-light glowing-background">
  <h3 class="text-center text-3d">Brite Store</h3>
  <p class="text-center">"Style Redefined, Prices Perfected!"</p>
</div>
<!-- fourth child-->
<div class="container">
    <div class="row">
      <form action="" method="post">
      <table class="table table-bordered text-center">
       
            <!-- php code to display dynamic data-->
            <?php
global $con;
$get_ip_add = getIPAddress();
$total = 0;
$cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
$result = mysqli_query($con, $cart_query);
$result_count=mysqli_num_rows($result);
if($result_count>0){
   echo " 
  <thead>
          <tr>
            <th>Product title</th>
            <th>Product image</th>
            <th>Quantity</th>
            <th>Total price</th>
            <th>Remove</th>
            <th colspan='2'>Operations</th>
          </tr>
        </thead>
        <tbody>"; 

while ($row = mysqli_fetch_array($result)) {
    $product_id = $row['product_id'];
    $select_products = "SELECT * FROM `products` WHERE product_id='$product_id'";
    $result_products = mysqli_query($con, $select_products);

    while ($row_product_price = mysqli_fetch_array($result_products)) {
        $product_price = $row_product_price['product_price'];
        $price_table = $row_product_price['product_price'];
        $product_title = $row_product_price['product_title'];
        $product_image1 = $row_product_price['product_image1'];
        $product_values = $product_price;
        $total += $product_values;
        ?>
         
  <thead>
          <tr>
            <th>Product title</th>
            <th>Product image</th>
            <th>Quantity</th>
            <th>Total price</th>
            <th>Remove</th>
            <th colspan='2'>Operations</th>
          </tr>
        </thead>
        <tbody>

        <tr>
            <td><?php echo $product_title ?></td>
            <td><img src="./admin_area/product_images/<?php echo $product_image1 ?>" alt="" class="cart_img"></td>
            <td><input type="text" name="qty" class="form-input w-50"></td>
            <?php
            $get_ip_add = getIPAddress();
            if (isset($_POST['update_cart'])) {
                $quantities = $_POST['qty'];
                $update_cart = "UPDATE cart_details SET quantity='$quantities' WHERE ip_address='$get_ip_add'";

                $result_products_quantity = mysqli_query($con, $update_cart);
                $total = intval($total) * intval($quantities);



            }
            ?>
            <td><?php echo $price_table ?>/-</td>
            <td><input type="checkbox" name="removeitem[]" value="<?php echo $product_id ?>"></td>
            <td>
                <!--<p><button class="bg-warning px-3 mx-3">Update</button></p> -->
                <input type="submit" value="Update Cart" class="bg-warning px-3 mx-3" name="update_cart">
                <!--<p> <button class="bg-warning px-3 mx-3">Remove</button></p>-->
                <input type="submit" value="Remove Cart" class="bg-warning px-3 mx-3" name="remove_cart">
            </td>
        </tr>

        <?php
    }
}}
else{

echo "<h2 class='text-center text-dark' >Cart is empty</h2>";
}
?>

</tbody>
</table>
<!--subtotal-->
<div class="d-flex mb-4">
  <?php
  $get_ip_add = getIPAddress();
$total = 0;
$cart_query = "SELECT * FROM `cart_details` WHERE ip_address='$get_ip_add'";
$result = mysqli_query($con, $cart_query);
$result_count=mysqli_num_rows($result);
if($result_count>0){

  echo"<h4 class='px-3'>Subtotal: <strong class='text-dark'> $total/-</strong></h4>
  <input type='submit' value='Continue Shopping' class='bg-warning px-3 mx-3' name='continue_shopping'>
  <button class='bg-warning px-3 mx-3'><a href='./users_area/checkout.php' class='text-dark text-decoration-none'>Check out</button></a>";
}else{
  echo" <input type='submit' value='Continue Shopping' class='bg-warning px-3 mx-3' name='continue_shopping'>";
}
   if(isset($_POST['continue_shopping'])){
    echo"<script>window.open('index.php','_self')</script>";
   }

  ?>



</div>

</div>
</div>
</form>
<script src="script.js"></script>
<!-- function to remove item -->
<?php 
function remove_cart_item() {
  global $con;
  if (isset($_POST['remove_cart']) && isset($_POST['removeitem']) && is_array($_POST['removeitem'])) {
    foreach ($_POST['removeitem'] as $remove_id) {
      echo $remove_id;
      $delete_query = "DELETE FROM `cart_details` WHERE product_id = $remove_id";
      $run_delete = mysqli_query($con, $delete_query);
      if ($run_delete) {
        echo "<script>window.open('cart.php','_self')</script>";
      }
    }
  }
}

remove_cart_item();
?>




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