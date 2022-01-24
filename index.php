<?php 

$conn = mysqli_connect('localhost', 'shopNow', 'zineb.oussama', 'shopNow_werehouse' );


$errors = array('Name'=>'', 'Category'=>'', 'quantity'=>'');



  if(isset($_POST['submit'])) {
    
    //check Reference
    if(!empty($_POST['Reference'])) {
      $Referece = $_POST['Reference'];
    } 

    //check Name
    if(empty($_POST['Name'])) {
      $errors['Name'] = 'Name is required <br/>';
    } else {
      $Name =  $_POST['Name'];
    }

    //check Category
    if(empty($_POST['Category'])) {
      $errors['Category'] = 'Category is required <br/>';
    } else {
      $Category = $_POST['Category'];
    }

    //check quantity
    if(empty($_POST['quantity'])) {
      $errors['quantity'] = 'quantity is required <br/>';
    } else {
      $quantity = $_POST['quantity'];
    }  
    
    if(array_filter($errors)) {
      //error in form
    } else {

      //if no error in our form
      
      $Referece = mysqli_real_escape_string($conn, $_POST['Reference']);
      $Name = mysqli_real_escape_string($conn, $_POST['Name']);
      $Category = mysqli_real_escape_string($conn, $_POST['Category']);
      $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
      
      //create sql
      $sql = "INSERT INTO products(Reference,Name,Category,quantity) VALUES('$Referece', '$Name', '$Category', '$quantity')";
      
      // save to dataBase
      if(mysqli_query($conn,$sql)) {
        //database added
        //header('Location: search.php');
      } else {
         echo 'query error: ' . mysqli_error($conn); 
      }
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
    <link rel="stylesheet" href="style.php" />
    <link rel="stylesheet" href="query.css" />
  </head>
  <body>
    <?php include('reusable/header.php'); ?>
    <!-- /////////////////////////////////////////// -->
    <main>
      <div class="cnt_of_main">
        <h1 class="head_one">add product</h1>
        <form action="index.php" method="POST">
          <div class="cnt_of_form">
            <label class="label" for="ref">Reference Number (optional)</label>
            <input  type="number" class="input" name="Reference" />
          </div> 
          <div class="cnt_of_form">
            <label class="label" for="ref">Name<span> *</span></label>
            <input type="text" class="input" name="Name" />
          </div>
          <div class="errors_paragraph"> <?php echo $errors['Name'] ?> </div>
          <div class="cnt_of_form">
            <label class="label" for="ref">Category<span> *</span></label>
            <input type="text" class="input" name="Category" />
          </div>
          <div class="errors_paragraph"> <?php echo $errors['Category'] ?> </div>
          <div class="cnt_of_form">
            <label class="label" for="ref">quantity<span> *</span></label>
            <input type="number" class="input" name="quantity" />
          </div>
          <div class="errors_paragraph"> <?php echo $errors['quantity'] ?> </div>
          <div class="cnt_of_form special_margin_bottom">
              <input type="submit" name="submit" value="add" class="anchor_search">
          </div>
        </form>
      </div>
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
