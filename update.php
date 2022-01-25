<?php 

$incorrect_ref = 1;


$conn = mysqli_connect('localhost', 'shopNow', 'zineb.oussama', 'shopNow_werehouse' );

/////////////////////

$sql = 'SELECT * FROM products';

//////////////////////

$result = mysqli_query($conn,$sql);

//////////////////////

$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

///////////////////////

// mysqli_free_result($result);

///////////////////////

// mysqli_close($conn);

///////////////////////


if(isset($_POST['update'])){

  
      $reference = htmlspecialchars($_POST['Reference']);
      $name = htmlspecialchars($_POST['Name']);
      $category = htmlspecialchars($_POST['Category']);
      $quantity = htmlspecialchars($_POST['quantity']);

      $sql = "UPDATE `products` SET `Name`='$name',`Category`='$category',`quantity`='$quantity' WHERE `Reference`='$reference'";
    if(mysqli_query($conn,$sql)) 
    {
      header("Location: update.php");
    } 
     
  else{
    echo "query error" . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShopNow | manager</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="update-page/updateStyle.php" />
    <link rel="stylesheet" href="search-page/query.php" />
  </head>
  <body>
  <?php include('reusable/header.php'); ?>

    <!-- /////////////////////////////////////////// -->
    <main>
    <div class="cnt_of_main">
        <h1 class="head_one">Search</h1>
        <form class="form" action="update.php" method="POST">
          <div class="cnt_of_form">
            <label class="label" for="ref">Reference Number</label>
            <input name="ref" type="number" class="input" />
          </div>
          <button class="search_button">
            <input name="submit" type="submit" value="search" class="anchor_search" >
          </button>
        </form>
      </div>



      <?php if(isset($_POST['submit'])) { ?>
        <?php foreach($products as $product) {
          if($_POST['ref'] == $product['Reference']) { ?>
      <div id="goto" class="cnt_of_main">
        <h1 class="head_one">product</h1>
        <form  method="POST">
          <div class="cnt_of_form">
            <label class="label" for="ref">Reference Number</label>
            <input name="Reference" value='<?php echo htmlspecialchars($product['Reference']) ?>' type="number" class="input" />
          </div>
          <div class="cnt_of_form">
            <label class="label" for="ref">Name</label>
            <input name="Name" value='<?php echo htmlspecialchars($product['Name']) ?>' type="text" class="input" />
          </div>
          <div class="cnt_of_form">
            <label class="label" for="ref">Category</label>
            <input name="Category" value='<?php echo htmlspecialchars($product['Category']) ?>' type="text" class="input" />
          </div>
          <div class="cnt_of_form">
            <label class="label" for="ref">quantity</label>
            <input name="quantity" value='<?php echo htmlspecialchars($product['quantity']) ?>' type="number" class="input" />
          </div>
          <div class="cnt_of_form spaecial_margin_bottom">
            <input type="hidden" name="ref" value="<?php echo $product['Reference'] ?>">
            <input type="submit" name="update" value="update" class="anchor_search">
          </div>
        </form>
      </div>
      <?php $incorrect_ref = 0; } ?>
      <?php } ?>
      <?php } ?>
          
      <?php if(isset($_POST['submit'])) { ?>
      <?php if($incorrect_ref !== 0) { ?>
          <p class="no_product_found"> there is no product at all </p>
      <?php } ?>
      <?php } ?>

      <?php if($products == null) { ?>
            <p class="no_product_found"> there is no product at all check out the <a class="home_anchor" href="home.php">home page</a> </p>
          <?php } ?>
    </main>
    <!-- /////////////////////////////////////////// -->
    <footer class="footer">
      <p class="paragraph_of_footer">
        © 1996-2022, ShopNow.com, Inc. or its affiliates
      </p>
    </footer>
    <!-- /////////////////////////////////////////// -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
